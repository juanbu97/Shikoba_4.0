<?php
/**
 * @User: Guillermo Boquizo S谩nchez (GUBS), Rafael Garc铆a Zurita (RAGZ).
 * @File: PartesController.php
 * @Updated: 2019
 * @Description: Controlador de los partes.
 * @license http://opensource.org/licenses/gpl-license.php  GNU Public License
 */

namespace AppBundle\Controller;

use AppBundle\Entity\AccionEstadoParte;
use AppBundle\Entity\Alumno;
use AppBundle\Entity\Conductas;
use AppBundle\Entity\Cursos;
use AppBundle\Entity\EstadosParte;
use AppBundle\Entity\Partes;
use AppBundle\Entity\Profesores;
//use AppBundle\Entity\Sanciones;
use AppBundle\Entity\TipoParte;
//use AppBundle\Form\ParteExportFormType;
use AppBundle\Form\ParteFormType;
use AppBundle\Repository\AlumnoRepository;
use AppBundle\Repository\CursosRepository;
use AppBundle\Repository\PartesRepository;
use AppBundle\Repository\ProfesoresRepository;
use AppBundle\Repository\SancionesRepository;
use AppBundle\Repository\ConductasRepository;
use AppBundle\Services\AlumnoHelper;
use AppBundle\Services\PartesHelper;
use AppBundle\Services\SmsHelper;
use AppBundle\Utils\CsvResponse;
use Doctrine\ORM\EntityManager;
use Doctrine\ORM\PersistentCollection;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Symfony\Component\Config\Definition\Exception\Exception;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use AppBundle\Config\SmsMessage;
use Swift_Message;


class PartesController extends Controller
{
    /**
     * Constante para el estado inicial del parte.
     */
    const ESTADO_INICIADO = 'Iniciado';
   
    /**
     * M閠odo privado que genera el fichero pdf, v醠ido para imprimir y enviar
     * @param $parte. Parte para para generar archivo.
     * @param $local. Falso imprime y muestra en el navegador.
     *                True Graba el archivo en local para enviarlo.
     * @return Objeto knp_snappy
     */
	private function generaPdf($parte, $local=false)
	{
	    $html = $this->renderView('convivencia/partes/imprimirParte.html.twig', array(
                    'partes' => $parte,
                   ));
		$snappy = $this->get('knp_snappy.pdf');
        $snappy->setOption('no-outline', true);
        $snappy->setOption('page-size', 'LETTER');
        $snappy->setOption('encoding', 'UTF-8');
        
		$titulo = $parte->getIdAlumno()->getApellido1() . $parte->getIdAlumno()->getApellido2() . $parte->getIdAlumno()->getNombre();
        $filename = 'Parte' . $titulo;
        if ($local) {
		    return $snappy->generateFromHtml($html,'/tmp/file.pdf',array(),true);
		}
	    else {
			return $snappy->getOutputFromHtml($html);
		}
              
    }


    /**
     * Muestra los partes
     * @Route("/partes", name="gestion_partes")
     * @Method({"GET", "POST"})
     * @param Request $request la petici贸n a realizar.
     * @return Response la vista a renderizar.
     */
    public function showGestionPartes(Request $request)
    {
        $em = $this->getDoctrine()->getManager();

        /** @var PartesRepository $repositoryPartes */
        $repositoryPartes = $em->getRepository("AppBundle:Partes");

        if ($request->query->has('like')) {
            if ($request->get('historico') != null)
                $query = $repositoryPartes->getPartesLike($request->get('like'), true);
            else
                $query = $repositoryPartes->getPartesLike($request->get('like'));
        } else {
            if ($request->get('historico') != null)
                $query = $repositoryPartes->getPartesOrdenados(true);
            else
                $query = $repositoryPartes->getPartesOrdenados();
        }

        $partes = $query;
        return $this->render('convivencia/partes/partes.html.twig', array(
            'partes' => $partes,
            'user' => $this->getUser(),
        ));
    }

    /**
     * Permite crear un parte.
     * @Route("/nuevoParte", name="nuevoParte")
     * @Method({"GET", "POST"})
     * @param Request $request la petici贸n a realizar.
     * @throws \Exception
     * @return Response la vista a renderizar.
     */
    public function crearParteAction(Request $request)
    {
        $recupera = false;

        /** @var EntityManager $em */
        $em = $this->getDoctrine()->getManager();

        /** @var AlumnoHelper $alumnoHelper */
        $alumnoHelper = $this->get('app.alumnoHelper');

        /** @var PartesHelper $parteHelper */
        $parteHelper = $this->get('app.partesHelper');

        /** @var SmsHelper $smsHelper */
        $smsHelper = $this->get('app.smsHelper');

        /** @var AccionEstadoParte $repositoryAccionPartes */
        $repositoryAccionPartes = $em->getRepository('AppBundle:AccionEstadoParte');

        /** @var CursosRepository $repositoryACursos */
        $repositoryACursos = $em->getRepository('AppBundle:Cursos');

        /** @var ConductasRepository $repositoryAConductas */
        $repositoryAConductas = $em->getRepository('AppBundle:Conductas');

        /** @var SancionesRepository $repositorySanciones */
        $repositorySanciones = $em->getRepository('AppBundle:Sanciones');

        /** @var Cursos $curso */
        $cursos = $repositoryACursos->getCursosGroupByCursos();

        /** @var Conductas $conductas */
        $conductas = $repositoryAConductas->getConductas();

        /** @var Alumno $alumnos */
        $alumnos = $alumnoHelper->getAlumnosByRequest($request);

        /** @var Partes $parte */
        $parte = $parteHelper->getParteFromRequest($request);
        $nuevoParte = true;
        if ($request->query->has('idParte')) {
            $nuevoParte=false;
            if ((!in_array('ROLE_ADMIN', $this->getUser()->getRoles()) &&
                    in_array('ROLE_PROFESOR', $this->getUser()->getRoles())) &&
                $parte->getIdProfesor()->getIdUsuario()->getId() != $this->getUser()->getId()
            )
                return $this->redirectToRoute('index');
            $recupera = $parteHelper->parteRecupera($parte);
        }
        if ($parteHelper->recuperarPuntos($request) ||
            $parteHelper->changeEstado($request, $parte)
        )
            return $this->redirectToRoute("nuevoParte", array(
                'idParte' => $parte->getId()));

        if (in_array('ROLE_PROFESOR', $this->getUser()->getRoles()))
            $compound = [$alumnos, $parteHelper->getProfesorByUser($this->getUser())];
        else
            $compound = [$alumnos, $parteHelper->getAllProfesores()];

        $form = $this->createForm(ParteFormType::class, $parte, array(
            'compound' => $compound,
        ));
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {

                $fechaParte = \DateTime::createFromFormat('d/m/Y', $request->get('fecha'));
                $parte->setFecha($fechaParte);

           if ($parte->getDescripcion() == null || $parte->getIdAlumno() == null
                || $parte->getIdProfesor() == null || $parte->getIdConducta()->isEmpty()) {

               $this->addFlash("parteError", "Error al generar el parte");

               return $this->redirectToRoute("nuevoParte");

            } else {
               
                $em->persist($parte);
                $em->flush();
               
                if ($nuevoParte) {
                try {
                   // enviamos parte
                    $alumno = $parte->getIdAlumno()->getApellido1() . " " .$parte->getIdAlumno()->getApellido2(). " ".$parte->getIdAlumno()->getnombre();
                    $titulo = $parte->getIdAlumno()->getApellido1() . $parte->getIdAlumno()->getApellido2() . $parte->getIdAlumno()->getNombre()."_Parte_".date_format($parte->getFecha(),'Y-m-d');
                    $filename = $titulo;
		        //$snappy->generateFromHtml($html,'file.pdf',array(),true);
                    $this->generaPdf($parte,true);
		            $email = $parte->getIdAlumno()->getIdCurso()->getIdTutor()->getEmail();
                    $message = Swift_Message::newInstance()
                               ->setSubject($alumno. ': Parte de convivencia')
                               ->setFrom('proyectoiesgrancapitan@gmail.com')
                               ->setTo($email)
                               ->setBody("Adjuntamos parte de convivencia.")
		        	           ->attach(\Swift_Attachment::fromPath('/tmp/file.pdf')->setFilename($filename));
                    $this->get('mailer')->send($message);
                } catch (\Exception $e) {
                    $this->addFlash(
                          'alumnosError',
                          'No se pudo enviar correo al tutor'
                        );
                    }
                
                // enviamos sms
                try {
				//Comprobacion del checkbox de envio del sms
                if ($request->get('envioSMS') != null) {
                    $telefonos = array();

                    //Compruebo si esta activo el envio de sms a cada tutor y agrego su telefono
                    if ($parte->getIdAlumno()->getMsgTL1()) {
                        $telefonos[] = $parte->getIdAlumno()->getTelefonoTL1();
                    }
                    if ($parte->getIdAlumno()->getMsgTL2()) {
                        $telefonos[] = $parte->getIdAlumno()->getTelefonoTL2();
                    }

                    //Redacto el mensaje, empleando la clase Config\SmsMessage y el nombre del alumno.
                    $pre = SmsMessage::getMessagePre();
                    $post = SmsMessage::getMessagePost();
                    $smsHelper->sendSms($telefonos, $pre . '' .substr($parte->getIdAlumno()->getNombreCompleto(),0,160-strlen($post)) . ' ' .$post);
                   }
                } catch (\Exception $e) {
                    $this->addFlash(
                          'alumnosError',
                          'No se pudo enviar sms al tutor legal'
                        );
                    }
                   

                } // Fin if nuevo parte
                

                $parteHelper->createSancionFromRequest($request, $parte);

                $this->addFlash("parte", "Parte asignado correctamente");
                return $this->redirectToRoute("gestion_partes");
            }
        }

        $accion = $repositoryAccionPartes->findOneByEstado($parte->getIdEstado());
        $sanciones = $repositorySanciones->getSancionesByPartes($parte);

        return $this->render('convivencia/partes/partesForm.html.twig', array(
            'form' => $form->createView(),
            'recupera' => $recupera,
            'cursos' => $cursos,
            'accion' => $accion,
            'parte' => $parte,
            'sanciones' => $sanciones,
            'conductas' => $conductas
        ));
    }


    /**
     * Permite imprimir el parte.
     * @Route("/imprimirParte", name="printParte")
     * @Method({"GET", "POST"})
     * @param Request $request la petici贸n a realizar.
     * @return Response la vista a renderizar.
     */
    public function printParteAction(Request $request)
    {
        /** @var PartesHelper $parteHelper */
           
        try {
        $parteHelper = $this->get('app.partesHelper');
        $parte = $parteHelper->getParteFromRequest($request);

        $html = $this->renderView('convivencia/partes/imprimirParte.html.twig', array(
            'partes' => $parte,
        ));

        $snappy = $this->get('knp_snappy.pdf');
        $snappy->setOption('no-outline', true);
        $snappy->setOption('page-size', 'LETTER');
        $snappy->setOption('encoding', 'UTF-8');
        
        $titulo = $parte->getIdAlumno()->getApellido1() . $parte->getIdAlumno()->getApellido2() . $parte->getIdAlumno()->getNombre();
        $filename = 'Parte' . $titulo;
        return new Response(
            $snappy->getOutputFromHtml($html),
            200,
            array(
                'Content-Type' => 'application/pdf;',
                'Content-Disposition' => 'inline; filename="' . $filename . '.pdf"'
            )
        );
		} catch (\Exception $e) {
                    $this->addFlash(
                          'alumnosError',
                          'No se pudo imprimir parte'
                        );
					return $this->redirectToRoute("gestion_partes");	
                    }
       

    }

 



    /**
     * Permite borrar el parte.
     * @Route("/borrarParte/{id}", name="borrar_parte")
     * @Method({"GET"})
     * @param Partes $parte el parte a borrar.
     * @throws \Exception
     * @return Response la vista a renderizar.
     */
    public function removeParte(Partes $parte)
    {
        if ((!in_array('ROLE_ADMIN', $this->getUser()->getRoles()) &&
                in_array('ROLE_PROFESOR', $this->getUser()->getRoles())) &&
            $parte->getIdProfesor()->getIdUsuario()->getId() != $this->getUser()->getId()
        )
            return $this->redirectToRoute('index');

        /** @var EntityManager $em */
        $em = $this->getDoctrine()->getManager();

        /** @var SancionesRepository $repositorySanciones */
        $repositorySanciones = $em->getRepository('AppBundle:Sanciones');

        try {

            /** @var EntityManager $em */
            $em = $this->getDoctrine()->getManager();

            $em->remove($parte);

            $sanciones = $repositorySanciones->getSancionesByPartes($parte);
            foreach ($sanciones as $sancion)
                $em->remove($sancion);
            $em->flush();
            $this->addFlash("parte", "Parte eliminado correctamente");
        } catch (Exception $e) {
            $this->addFlash("parteError", "No se ha podido eliminar el parte");
        }
        return $this->redirectToRoute("gestion_partes");
    }

//    /**
////     * Permite la exportaci贸n de los partes.
////     * @Route("/exportPartes", name="admin_export_partes")
////     * @param Request $request la petici贸n a realizar.
////     * @return Response la vista a renderizar.
////     */
////    public function exportPartes(Request $request)
////    {
////        try {
////
////            /** @var EntityManager $em */
////            $em = $this->getDoctrine()->getManager();
////
////            $alumnosSeleccionados = $request->get('alumnos');
////
////            $cursoSeleccionado = $request->get('curso');
////
////            $profesoresSeleccionados = $request->get('profesores');
////
////            $fechaSeleccionada = $request->get('fecha');
////
////            /** @var AlumnoRepository $repositoryAlumnos */
////            $repositoryAlumnos = $em->getRepository('AppBundle:Alumno');
////
////            /** @var CursosRepository $repositoryCursos */
////            $repositoryCursos = $em->getRepository('AppBundle:Cursos');
////
////            /** @var ProfesoresRepository $repositoryProfesores */
////            $repositoryProfesores = $em->getRepository('AppBundle:Profesores');
////
////            if ($alumnosSeleccionados == "Todos") {
////                $alumnos = $repositoryAlumnos->findAll();
////            } else {
////                $alumnos = $repositoryAlumnos->findById($alumnosSeleccionados);
////            }
////            if ($cursoSeleccionado == "Todos") {
////                $curso = $repositoryCursos->findAll();
////            } else {
////                $curso = $repositoryCursos->findById($cursoSeleccionado);
////            }
////            if ($profesoresSeleccionados == "Todos") {
////                $profesores = $repositoryProfesores->findAll();
////            } else {
////                $profesores = $repositoryProfesores->findById($profesoresSeleccionados);
////            }
////            /** @var PartesRepository $repositoryPartes */
////            $repositoryPartes = $em->getRepository('AppBundle:Partes');
////
////            $data = $repositoryPartes->getPartesExportar($fechaSeleccionada, $alumnos, $profesores, $curso);
////            $arrData = [];
////            $arrData[] = ['Id', 'Fecha', 'Descripci贸n', 'Tareas', 'Hora Salida Aula', 'Hora Llegada Jefatura', 'Formato', 'Observaci贸n', 'Puntos', 'Estado', 'Tipo', 'Alumno', 'Profesor', 'Recupera Punto', 'Fecha Confirmacion', 'Fecha Comunicaci贸n'];
////            foreach ($data as $parte) {
////                $parteArray = (array)$parte;
////                $parteCsv = [];
////                foreach ($parteArray as $parteValue)
////                    if ($parteValue instanceof Profesores || $parteValue instanceof Alumno)
////                        $parteCsv[] = $parteValue->getNombreCompleto();
////                    elseif ($parteValue instanceof TipoParte)
////                        $parteCsv[] = $parteValue->getTipo();
////                    elseif ($parteValue instanceof EstadosParte)
////                        $parteCsv[] = $parteValue->getEstado();
////                    elseif ($parteValue instanceof \DateTime) {
////                        $year = $parteValue->format('Y');
////                        if ($parteValue == null)
////                            $fecha = "Sin fecha";
////                        elseif ($year == '1970')
////                            $fecha = $parteValue->format('H:i:s');
////                        else
////                            $fecha = $parteValue->format('Y-m-d H:i:s');
////                        $parteCsv[] = $fecha;
////                    } elseif (!$parteValue instanceof PersistentCollection)
////                        $parteCsv[] = $parteValue;
////                $arrData[$parte->getId()] = $parteCsv;
////            }
////            $response = new CsvResponse($arrData, 200);
////            $response->setFilename("Partes.xls");
////            return $response;
////        } catch (\Exception $e) {
////            $this->addFlash('exportarError', 'No se ha podido exportar');
////            return $this->redirectToRoute('export_form_partes');
////        }
////    }

//    /**
//     * Formulario para la exportaci贸n de partes.
//     * @Route("/exportFormPartes", name="export_form_partes")
//     * @return Response la vista a renderizar
//     */
//    public function exportForm()
//    {
//        /** @var EntityManager $em */
//        $em = $this->getDoctrine()->getManager();
//
//        /** @var AlumnoRepository $repositoryAlumnos */
//        $repositoryAlumnos = $em->getRepository('AppBundle:Alumno');
//
//        /** @var CursosRepository $repositoryCursos */
//        $repositoryCursos = $em->GetRepository('AppBundle:Cursos');
//
//        /** @var ProfesoresRepository $repositoryProfesores */
//        $repositoryProfesores = $em->getRepository('AppBundle:Profesores');
//
//        $alumnos = $repositoryAlumnos->findAll();
//        $cursos = $repositoryCursos->findAll();
//        $profesores = $repositoryProfesores->findAll();
//
//        return $this->render('convivencia/exportPartes.html.twig', array(
//            'alumnos' => $alumnos,
//            'profesores' => $profesores,
//            'cursos' => $cursos
//        ));
//    }

    /**
     * Permite generar el informe de partes por alumno.
     * @Route("/informePartesAlumno", name="partes_alumno_informe")
     * @param Request $request la petici贸n a realizar.
     * @return Response la vista a renderizar.
     */
    public function partesAlumnoInforme(Request $request)
    {
        /** @var EntityManager $em */
        $em = $this->getDoctrine()->getManager();

        /** @var PartesRepository $repositoryPartes */
        $repositoryPartes = $em->getRepository('AppBundle:Partes');

        $fechaI = $request->get('fechaI');
        $fechaF = $request->get('fechaF');
        $data = $repositoryPartes->getInformePartesAlumnos("$fechaI", "$fechaF");

        return $this->render('convivencia/informes/partesAlumnoInforme.html.twig', array(
            'data' => $data
        ));
    }

    /**
     * Permite generar los informes de partes por profesor.
     * @Route("/informePartesProfesor", name="partes_profesor_informe")
     * @param Request $request la petici贸n a realizar.
     * @return Response la vista a renderizar.
     */
    public function partesProfesorInforme(Request $request)
    {
        /** @var EntityManager $em */
        $em = $this->getDoctrine()->getManager();
        /** @var PartesRepository $repositoryPartes */
        $repositoryPartes = $em->getRepository("AppBundle:Partes");

        $fechaI = $request->get('fechaI');
        $fechaF = $request->get('fechaF');

        $data = $repositoryPartes->getInformePartesProfesorado("$fechaI", "$fechaF");

        return $this->render('convivencia/informes/partesProfesorInforme.html.twig', array(
            'data' => $data
        ));
    }

    /**
     * Permite generar los informes de partes por grupos.
     * @Route("/informePartesGrupo", name="partes_grupos_informe")
     * @param Request $request la petici贸n a realizar.
     * @return Response la vista a renderizar.
     */
    public function partesGruposInforme(Request $request)
    {
        /** @var EntityManager $em */
        $em = $this->getDoctrine()->getManager();

        /** @var PartesRepository $repositoryPartes */
        $repositoryPartes = $em->getRepository("AppBundle:Partes");

        $fechaI = $request->get('fechaI');
        $fechaF = $request->get('fechaF');
        $data = $repositoryPartes->getInformePartesGrupo("$fechaI", "$fechaF");

        return $this->render('convivencia/informes/partesGruposInforme.html.twig', array(
            'data' => $data
        ));
    }
}