<?php
/**
 * @User: Guillermo Boquizo Sánchez (GUBS), Rafael García Zurita (RAGZ), maze
 * @File: ConvivenciaController.php
 * @Date: 20/03/2017
 * @Time: 17:01
 * @Updated: 2019
 * @Description: Controlador de convivencia.
 * @license http://opensource.org/licenses/gpl-license.php  GNU Public License
 */

namespace AppBundle\Controller;

use AppBundle\Entity\Usuarios;
use AppBundle\Form\ImportFormType;
use AppBundle\Entity\Cursos;
use AppBundle\Form\RegistroFormType;
use AppBundle\Form\UsuarioFormType;
use AppBundle\Repository\AlumnoRepository;
use AppBundle\Repository\CursosRepository;
use AppBundle\Repository\DiarioAulaConvivenciaRepository;
use AppBundle\Repository\PartesRepository;
use AppBundle\Repository\ProfesoresRepository;
use AppBundle\Repository\SancionesRepository;
use AppBundle\Repository\TutoresRepository;
use AppBundle\Repository\UsuariosRepository;
use AppBundle\Services\CrearSancionHelper;
use AppBundle\Services\ImportHelper;
use Exception;
use Doctrine\ORM\EntityManager;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Security;
use Symfony\Component\HttpFoundation\File\File;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Generator\UrlGeneratorInterface;
use Swift_Message;

/*use Symfony\Component\Validator\Constraints\DateTime;
use AppBundle\Entity\Alumno;
use AppBundle\Entity\EstadosParte;
use AppBundle\Entity\EstadosSancion;
use AppBundle\Entity\Profesores;
use AppBundle\Entity\TipoParte;
use AppBundle\Entity\TipoSancion;
use AppBundle\Form\ProfesoresFormType;
use AppBundle\Services\PartesHelper;
use AppBundle\Utils\CsvResponse;
use Doctrine\ORM\PersistentCollection;*/

/**
 * Class ConvivenciaController.
 */
class ConvivenciaController extends Controller
{
    /**
     * Muestra la vista correspondiente por defecto a cada rol de usuario.
     * @Route("/", name="index")
     * @return Response la vista a la que redirige
     */
    public function indexAction()
    {
        if (in_array('ROLE_ADMIN', $this->getUser()->getRoles())) {
            return $this->redirectToRoute('admin');
        }
        if (in_array('ROLE_TUTOR', $this->getUser()->getRoles())) {
            return $this->redirectToRoute('tutor');
        }
        if (in_array('ROLE_PROFESOR', $this->getUser()->getRoles())) {
            return $this->redirectToRoute('show_alumnosgrupo');
        }
        if (in_array('ROLE_CONVIVENCIA', $this->getUser()->getRoles())) {
            return $this->redirectToRoute('gestion_partes');
        }
        if (in_array('ROLE_USER', $this->getUser()->getRoles())) {
            return $this->redirectToRoute('alumno');
        }
        return $this->redirectToRoute('login');
    }

    /**
     * Permite el logueo de cada perfil de usuario.
     *
     * @Route("/login", name="login")
     * @Method({"GET", "POST"})
     * @return Response la vista a renderizar
     */
    public function loginAction()
    {
        if ($this->get('security.authorization_checker')->isGranted('IS_AUTHENTICATED_FULLY')) {
            return $this->redirectToRoute('alumno');
        }
        // Recupera el servicio de autenticación
        $authenticationUtils = $this->get('security.authentication_utils');

        // Recupera, si existe, el último error al intentar hacer login
        $error = $authenticationUtils->getLastAuthenticationError();

        // Recupera el último nombre de usuario introducido
        $lastUsername = $authenticationUtils->getLastUsername();

        // Renderiza la plantilla, enviándole, si existen, el último error y nombre de usuario
        return $this->render('convivencia/index.html.twig', array(
            'last_username' => $lastUsername,
            'error' => $error,
        ));
    }

    /**
     * Permite registrar un usuario.
     * @Route("/registro", name="convivencia_registro")
     * @Method({"GET", "POST"})
     * @param Request $request la petición a realizar
     * @throws Exception
     * @return Response la vista a renderizar
     */
    public function registroAction(Request $request)
    {
        /** @var EntityManager $em */
        $em = $this->getDoctrine()->getManager();
        $usuario = new Usuarios();
        $form = $this->createForm(RegistroFormType::class, $usuario);

        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            // Codificamos la contraseña en texto plano accediendo al 'encoder'
            // que habíamos indicado en la configuración
            $password = $this->get('security.password_encoder')
                ->encodePassword($usuario, $usuario->getPlainPassword());
            // Establecemos la contraseña real ya codificada al usuario
            $usuario->setPassword($password);
            $usuario->setHash($password);

            // Persistimos la entidad como cualquier otra
            $em->persist($usuario);
            $em->flush();

            // Redigirimos a la pantalla del admin
            return $this->redirectToRoute('admin');
        }

        return $this->render('convivencia/registro.html.twig', array(
            'form' => $form->createView(),
        ));
    }

    /**
     * Permite el deslogueo de un perfil.
     * @Route("/logout", name="logout")
     */
    public function logoutAction()
    {
    }

//    /**
//     * Permite visualizar un profesor por id
//     * @Route("/profesor/{id}", name="verProfesor", requirements={"id": "\d+"})
//     * @param int $id el id del profesor.
//     * @return Response la vista a renderizar.
//     */
//    public function showProfesorAction($id)
//    {
//        if (!in_array("ROLE_ADMIN", $this->getUser()->getRoles())
//              && !in_array('ROLE_CONVIVENCIA', $this->getUser()->getRoles()))
//            return $this->redirectToRoute("index");
//        $em = $this->getDoctrine()->getManager();
//        $profesor = $em->getRepository("AppBundle:Profesores")->findOneById($id);
//        return $this->render('convivencia/profesor/profesor.html.twig', array(
//                'profesor' => $profesor,
//                'userAdmin' => $this->getUser(),
//            )
//        );
//    }

    /**
     * Administra las copias de seguridad.
     * @Route("/admin/copias", name="admin_security")
     * @return Response la vista a renderizar
     */
    public function securityAction()
    {
        return $this->render('convivencia/admin/security.html.twig');
    }

    /**
     * Controla la funcionalidad para la vista admin.
     * @Route("/admin", name="admin")
     * @throws Exception
     * @return Response la vista a renderizar
     */
    public function adminAction()
    {
        /** @var EntityManager $em */
        $em = $this->getDoctrine()->getManager();

        /** @var CrearSancionHelper $sancionHelper */
        $sancionHelper = $this->get('app.crearSancionHelper');

        /** @var PartesRepository $repositoryPartes */
        $repositoryPartes = $em->getRepository('AppBundle:Partes');

        /** @var SancionesRepository $repositorySanciones */
        $repositorySanciones = $em->getRepository('AppBundle:Sanciones');

        /** @var DiarioAulaConvivenciaRepository $repositoryDiario */
        $repositoryDiario = $em->getRepository('AppBundle:DiarioAulaConvivencia');

        $partesIniciados = $repositoryPartes->getPartesByEstado('Iniciado');
        $sancionesIniciadas = $repositorySanciones->getSancionesPorEstado();

        $fecha = new \DateTime();
        $hora = $sancionHelper->getHoraFromDate($fecha);
        $diarioNow = $repositoryDiario->getDiarioByFechaYHora($fecha, $hora);

        return $this->render('convivencia/admin/admin.html.twig', array(
            'partesIniciados' => count($partesIniciados),
            'sancionesIniciadas' => count($sancionesIniciadas),
            'diarioNow' => count($diarioNow),
        ));
    }

    /**
     * Controla la vista del diario del aula de convivencia.
     * @Route("/diario", name="admin_diario_aula")
     * @return Response la vista a renderizar
     */
    public function gestionDiarioAula()
    {
        return $this->render('convivencia/diarioAulaConvivencia/diarioAula.html.twig');
    }

    /**
     * Permite cambiar la contraseña.
     * @Route("/changePassword", name="change_password")
     * @Method({"GET", "POST"})
     * @param Request $request la petición a realizar
     * @return Response la vista a renderizar
     * @throws Exception
     */
    public function changePassword(Request $request)
    {
        /** @var EntityManager $em */
        $em = $this->getDoctrine()->getManager();
        $usuario = new Usuarios();
        $form = $this->createForm(UsuarioFormType::class, $usuario);

        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            /** @var UsuariosRepository $repositoryUser */
            $repositoryUser = $em->getRepository('AppBundle:Usuarios');

            $password = $this->get('security.password_encoder')
                ->encodePassword($usuario, $usuario->getPlainPassword());

            /** @var Usuarios $usuario */
            $usuario = $repositoryUser->findOneById($this->getUser());

            $usuario->setPassword($password);
            $usuario->setHash($password);

            // Persistimos la entidad como cualquier otra
            $em->persist($usuario);
            $em->flush();

            $this->addFlash(
                'password',
                'Contraseña cambiada con éxito'
            );
        } elseif ($form->isSubmitted() && !$form->isValid()) {
            $this->addFlash(
                'passwordError',
                'La contraseña no se ha podido cambiar'
            );
        }
        return $this->render('convivencia/changePassword.html.twig', array(
            'form' => $form->createView(),
        ));
    }

    /**
     * Permite importar alumnos desde un fichero.
     * @Route("/admin/importAlumno", name="admin_import")
     * @Security("has_role('ROLE_ADMIN')")
     * @param Request $request la petición a realizar
     * @return Response la vista a renderizar
     */
    public function importAlumnoAction(Request $request)
    {
        try {
            $form = $this->createForm(ImportFormType::class);
            $form->handleRequest($request);
            if ($form->isSubmitted() && $form->isValid()) {
                /** @var File $file */
                $file = $form['importar']->getData();

                /** @var ImportHelper $importHelper */
                $importHelper = $this->get('app.importHelper');

                $importHelper->importarAlumnos($file);
                $this->addFlash(
                    'alumnos',
                    '¡El fichero ha sido importado!'
                );
            }
        } catch (\Exception $e) {
            $this->addFlash(
                'alumnosError',
                'El fichero no se ha podido importar'
            );
        }

        return $this->render('convivencia/admin/gestionAlumnos.html.twig', array(
            'form' => $form->createView(),
        ));
    }

    /**
     * Permite importar profesores desde un archivo.
     * @Route("/admin/importProfesor", name="admin_import_profesor")
     * @Security("has_role('ROLE_ADMIN')")
     * @param Request $request la petición a realizar
     * @return Response la vista a renderizar
     */
    public function importProfesorAction(Request $request)
    {
        try {
            $form = $this->createForm(ImportFormType::class);
            $form->handleRequest($request);
            if ($form->isSubmitted() && $form->isValid()) {
                /** @var File $file */
                $file = $form['importar']->getData();

                /** @var ImportHelper $importHelper */
                $importHelper = $this->get('app.importHelper');

                $importHelper->importarProfesor($file);
                $this->addFlash(
                    'profesor',
                    '¡El fichero ha sido importado!'
                );
            }
        } catch (Exception $e) {
            $this->addFlash(
                'profesorError',
                'El fichero no se ha podido importar'
            );
        }

        return $this->render('convivencia/admin/gestionProfesores.html.twig', array(
            'form' => $form->createView(),
        ));
    }

    /**
     * Permite administrar la gestión de tutores.
     * @Route("/admin/tutores", name="admin_tutores")
     * @Security("has_role('ROLE_ADMIN')")
     * @Method({"GET", "POST"})
     * @return Response la vista a renderizar
     */
    public function tutoresAction()
    {
        if (!in_array('ROLE_ADMIN', $this->getUser()->getRoles()) &&
            !in_array('ROLE_CONVIVENCIA', $this->getUser()->getRoles()) &&
            !in_array('ROLE_PROFESOR', $this->getUser()->getRoles())
        ) {
            return $this->redirectToRoute('index');
        }
        /** @var EntityManager $em */
        $em = $this->getDoctrine()->getManager();

        /** @var $repositoryCursos CursosRepository */
        $repositoryCursos = $em->getRepository('AppBundle:Cursos');

        $tutores = $repositoryCursos->verTutores();

        return $this->render('convivencia/admin/tutores.html.twig', array('tutores' => $tutores));
    }

    /**
     * Permite borrar un tutor asignado a un grupo.
     * @Route("/admin/tutores/borrarTutor,{grupo}", name="borrarTutor")
     * @Security("has_role('ROLE_ADMIN')")
     * @Method({"GET", "POST"})
     * @param Cursos $grupo el grupo del tutor
     * @return Response la vista a renderizar
     */
    public function borrarTutorAction($grupo = null)
    {
        if (!in_array('ROLE_ADMIN', $this->getUser()->getRoles()) &&
            !in_array('ROLE_CONVIVENCIA', $this->getUser()->getRoles()) &&
            !in_array('ROLE_PROFESOR', $this->getUser()->getRoles())
        ) {
            return $this->redirectToRoute('index');
        }

        try {
            /** @var EntityManager $em */
            $em = $this->getDoctrine()->getManager();

            /** @var $repositoryCursos CursosRepository */
            $repositoryCursos = $em->getRepository('AppBundle:Cursos');

            $repositoryCursos->borrarTutores($grupo);
            $tutores = $repositoryCursos->verTutores();

            $this->addFlash(
                'tutor',
                '¡Tutor borrado con éxito!'
            );
        } catch (\Exception $e) {
            $this->addFlash(
                'tutorError',
                'El tutor no se ha podido borrar'
            );
        }

        return $this->render('convivencia/admin/tutores.html.twig', array('tutores' => $tutores));
    }
    /**
     * Permite asignar un grupo a un profesor.
     * @Route("/admin/importProfesorGrupo", name="admin_import_profesorGrupo")
     * @Security("has_role('ROLE_ADMIN')")
     * @Method({"GET", "POST"})
     * @param Request $request la petición a procesar
     * @return Response la vista a renderizar
     */
    public function importProfesorGrupoAction(Request $request)
    {
        if (!in_array('ROLE_ADMIN', $this->getUser()->getRoles()) &&
            !in_array('ROLE_CONVIVENCIA', $this->getUser()->getRoles()) &&
            !in_array('ROLE_PROFESOR', $this->getUser()->getRoles())
        ) {
            return $this->redirectToRoute('index');
        }
        /** @var EntityManager $em */
        $em = $this->getDoctrine()->getManager();

        /** @var ProfesoresRepository $repositoryProfesores */
        $repositoryProfesores = $em->getRepository('AppBundle:Profesores');

        /** @var CursosRepository $repositoryCursos */
        $repositoryCursos = $em->getRepository('AppBundle:Cursos');

        //Permite filtrar aquellos cursos que no tienen tutor asignado.
        $cursos = $repositoryCursos->cursosSinTutor();

        //Permite filtrar aquellos profesores que no tienen curso asignado.
        $profesores = $repositoryProfesores->verProfesoresSinCurso();

        if (!empty($request->request->get('curso'))) {
            $curso = $request->request->get('curso');
            $profesor = $request->request->get('profesor');

            $repositoryCursos->updateProfesorCurso($profesor, $curso);

            return $this->redirectToRoute('admin_tutores');
        }

        return $this->render('convivencia/admin/gestionProfesoresGrupo.html.twig', array(
            'profesores' => $profesores,
            'cursos' => $cursos,
        ));
    }

    /**
     * Permite recuperar una contraseña.
     * @Route("recuperarPassword", name="recuperarPassword")
     * @param Request $request la petición a procesar
     * @return Response la vista a renderizar
     */
    public function recuperarPassword(Request $request)
    {
        try {
            if (null == $request->get('username') && null == $request->get('recuperar')) {
                return $this->render('convivencia/recuperarPassword.html.twig');
            }

            /** @var EntityManager $em */
            $em = $this->getDoctrine()->getManager();

            /** @var UsuariosRepository $repositoryUsers */
            $repositoryUsers = $em->getRepository('AppBundle:Usuarios');

            /** @var AlumnoRepository $repositoryAlumnos */
            $repositoryAlumnos = $em->getRepository('AppBundle:Alumno');

            /** @var ProfesoresRepository $repositoryProfesores */
            $repositoryProfesores = $em->getRepository('AppBundle:Profesores');

            /** @var TutoresRepository $repositoryTutores */
            $repositoryTutores = $em->getRepository('AppBundle:tutores');

            /** @var Usuarios $user */
            $user = $repositoryUsers->findOneByUsuario($request->get('username'));

            if (null == $user) {
                $this->addFlash('passwordError', 'El usuario no existe');
                return $this->redirectToRoute('recuperarPassword');
            }

            $hash = $user->getHash();

            if (null != $repositoryAlumnos->findOneByIdUsuario($user->getId())) {
                $user = $repositoryAlumnos->findOneByIdUsuario($user->getId());
                $email = $user->getEmail();
            } elseif (null != $repositoryProfesores->findOneByIdUsuario($user->getId())) {
                $user = $repositoryProfesores->findOneByIdUsuario($user->getId());
                $email = $user->getEmail();
            } elseif (null != $repositoryTutores->findOneByIdUsuario($user->getId())) {
                $user = $repositoryTutores->findOneByIdUsuario($user->getId());
                $email = $user->getEmail();
            } else {
                $this->addFlash('passwordError', 'El usuario no existe');
                return $this->redirectToRoute('recuperarPassword');
            }

            if (null == $user->getEmail()) {
                $this->addFlash('passwordError', 'El usuario no tiene email');
                return $this->redirectToRoute('recuperarPassword');
            }

            $message = Swift_Message::newInstance()
                ->setSubject('Proyecto Convivencia. Recuperación de contraseña')
                //->setFrom('proyectoiesgrancapitan@gmail.com')
                ->setFrom('shikobatres@gmail.com')
                ->setTo($email)
                ->setBody("Enlace para recuperar su contraseña:\n"
                    .$this->generateUrl('reset_password', array(), UrlGeneratorInterface::ABSOLUTE_URL).'?hash='.$hash.'&id');
            $this->get('mailer')->send($message);
            $this->addFlash('login', 'Mensaje enviado a su correo');
            return $this->redirectToRoute('login');
        } catch (Exception $e) {
            $this->addFlash('loginError', 'No se ha podido enviar el correo');
            return $this->redirectToRoute('login');
        }
    }

    /**
     * Permite resetear la contraseña.
     * @Route("/resetPassword", name="reset_password")
     * @Method({"GET", "POST"})
     * @param Request $request la petición a procesar
     * @return Response la vista a renderizar
     */
    public function resetPassword(Request $request)
    {
        if (null == $request->get('hash')) {
            return $this->redirectToRoute('recuperarPassword');
        }

        try {
            $hash = $request->get('hash');

            /** @var EntityManager $emConvivencia */
            $emConvivencia = $this->getDoctrine()->getManager();

            /** @var UsuariosRepository $repositoryUsuarios */
            $repositoryUsuarios = $emConvivencia->getRepository('AppBundle:Usuarios');
            /** @var Usuarios $usuario */
            $usuario = $repositoryUsuarios->findOneByHash($hash);
            if (null == $usuario) {
                return $this->redirectToRoute('recuperarPassword');
            }

            $usuarioReset = new Usuarios();
            $form = $this->createForm(UsuarioFormType::class, $usuarioReset);
            $form->handleRequest($request);

            if ($form->isSubmitted() && $form->isValid()) {
                $password = $this->get('security.password_encoder')
                    ->encodePassword($usuario, $usuarioReset->getPlainPassword());
                $usuario->setPassword($password);
                $emConvivencia->persist($usuario);
                $emConvivencia->flush();

                $this->addFlash('login', 'Contraseña reestablecida');
                return $this->redirectToRoute('login');
            }
            return $this->render('convivencia/changePassword.html.twig', array(
                'form' => $form->createView(),
            ));
        } catch (Exception $e) {
            $this->addFlash('loginError', 'No se ha podido restablecer la contraseña');
            return $this->redirectToRoute('login');
        }
    }
}
