<?php
/**
 * @User: Guillermo Boquizo Sánchez (GUBS), Rafael García Zurita (RAGZ).
 * @File: SancionController.php
 * @Updated: 2019
 * @Description: Controlador de las sanciones.
 * @license http://opensource.org/licenses/gpl-license.php  GNU Public License
 */

namespace AppBundle\Controller;

use AppBundle\Entity\AccionEstadoSancion;
use AppBundle\Entity\Cursos;
use AppBundle\Entity\Sanciones;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Exception;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Doctrine\ORM\EntityManager;
use AppBundle\Services\AlumnoHelper;
use AppBundle\Services\CrearSancionHelper;
use AppBundle\Form\SancionFormType;
use AppBundle\Repository\CursosRepository;
use AppBundle\Repository\PartesRepository;
use AppBundle\Repository\SancionesRepository;
use Datetime;

/*use AppBundle\Entity\Alumno;
use AppBundle\Entity\TipoSancion;
use AppBundle\Repository\AlumnoRepository;
use AppBundle\Entity\EstadosSancion;
use AppBundle\Repository\TipoSancionRepository;
use AppBundle\Utils\CsvResponse;
use Doctrine\ORM\PersistentCollection;*/

/**
 * Class SancionController.
 */
class SancionController extends Controller
{
    /**
     * Permite crear una sanción.
     * @Route("/nuevaSancion", name="nueva_sancion")
     * @Method({"GET", "POST"})
     * @param Request $request la petición a realizar
     * @return Response la vista a renderizar
     * @throws Exception
     */
    public function crearSancionAction(Request $request)
    {
        if (!in_array('ROLE_ADMIN', $this->getUser()->getRoles())
            && !in_array('ROLE_CONVIVENCIA', $this->getUser()->getRoles())
            && !in_array('ROLE_PROFESOR', $this->getUser()->getRoles())) {
            return $this->redirectToRoute('index');
        }

        /** @var EntityManager $em */
        $em = $this->getDoctrine()->getManager();

        /** @var CrearSancionHelper $crearSancionHelper */
        $crearSancionHelper = $this->get('app.crearSancionHelper');

        /** @var AlumnoHelper $alumnoHelper */
        $alumnoHelper = $this->get('app.alumnoHelper');

        /** @var CursosRepository $repositoryACursos */
        $repositoryACursos = $em->getRepository('AppBundle:Cursos');

        /** @var AccionEstadoSancion $repositoryAccionSanciones */
        $repositoryAccionSanciones = $em->getRepository('AppBundle:AccionEstadoSancion');

        /** @var PartesRepository $repositoryPartes */
        $repositoryPartes = $em->getRepository('AppBundle:Partes');

        /** @var Cursos $curso */
        $cursos = $repositoryACursos->getCursosGroupByCursos();

        $alumnos = $alumnoHelper->getAlumnosByRequest($request);

        $tipos = $alumnoHelper->getTipoByRol($this->getUser());

        $choices = [$alumnos, $tipos];

        $sancion = $crearSancionHelper->getSancionFromRequest($request);

        if ($crearSancionHelper->changeEstado($request, $sancion)) {
            $this->redirectToRoute('nueva_sancion', array('idSancion' => $sancion->getId()));
        }
        $form = $this->createForm(SancionFormType::class, $sancion, array(
            'compound' => $choices,
        ));
        $form->handleRequest($request);
        $detalles = $crearSancionHelper->getDiarioFromSancion($sancion);

        if ($form->isSubmitted() && $form->isValid()) {
            if (null != $request->get('idParte')) {
                $parte = $repositoryPartes->findOneById($request->get('idParte'));
                $sancion->setIdParte([$parte]);
            }
            $fechaSancion = DateTime::createFromFormat('d/m/Y', $request->get('fecha'));
            $sancion->setFecha($fechaSancion);
            $fechaSancion = DateTime::createFromFormat('d/m/Y', $request->get('fechaInicio'));
            $sancion->setFechaInicio($fechaSancion);
            $fechaSancion = DateTime::createFromFormat('d/m/Y', $request->get('fechaFinal'));
            $sancion->setFechaFinal($fechaSancion);

            $em->persist($sancion);
            $em->flush();

            $crearSancionHelper->creaDiarioFromSancion($sancion, $request);
            return $this->redirectToRoute('gestion_sanciones');
        }
        $accion = $repositoryAccionSanciones->findOneByEstado($sancion->getIdEstado());

        return $this->render('convivencia/sanciones/sancionesForm.html.twig', array(
            'form' => $form->createView(),
            'detalles' => $detalles,
            'horas' => $crearSancionHelper::HORAS_CLASE,
            'cursos' => $cursos,
            'accion' => $accion,
            'sancion' => $sancion,
        ));
    }

    /**
     * Permite gestionar las sanciones.
     * @Route("/sanciones", name="gestion_sanciones")
     * @Method({"GET", "POST"})
     * @param Request $request la petición a realizar
     * @return Response la vista a renderizar
     */
    public function showGestionSanciones(Request $request)
    {
        /** @var EntityManager $em */
        $em = $this->getDoctrine()->getManager();

        //$paginator = $this->get('knp_paginator');

        /** @var SancionesRepository $sancionesRepository */
        $sancionesRepository = $em->getRepository('AppBundle:Sanciones');

        if ($request->query->has('like')) {
            if (null != $request->get('historico')) {
                $sanciones = $sancionesRepository->getSancionesLike($request->get('like'), true);
            } else {
                $sanciones = $sancionesRepository->getSancionesLike($request->get('like'));
            }
        } else {
            if (null != $request->get('historico')) {
                $sanciones = $sancionesRepository->getSancionesOrdenadas(true);
            } else {
                $sanciones = $sancionesRepository->getSancionesOrdenadas();
            }
        }
//        $sancionesPagination = $paginator->paginate(
//            $sanciones, /* query NOT result */
//            $request->query->getInt('page', 1)/*page number*/,
//            10/*limit per page*/
//        );

        return $this->render('convivencia/sanciones/sanciones.html.twig', array(
//          'sanciones' => $sancionesPagination,
            'sanciones' => $sanciones,
            'user' => $this->getUser(),
        ));
    }

    /**
     * Permite borrar una sanción.
     * @Route("/borrarSancion/{id}", name="borrar_sancion")
     * @Method({"GET"})
     * @param Sanciones $sancion la sanción a borrar
     * @return Response la vista a renderizar
     * @throws Exception
     */
    public function removeSancion(Sanciones $sancion)
    {
        if (!in_array('ROLE_ADMIN', $this->getUser()->getRoles())
            && !in_array('ROLE_CONVIVENCIA', $this->getUser()->getRoles())) {
            return $this->redirectToRoute('index');
        }

        try {
            /** @var EntityManager $em */
            $em = $this->getDoctrine()->getManager();
            $em->remove($sancion);
            $this->addFlash('sancion', 'Sanción eliminada correctamente');
            $em->flush();
        } catch (Exception $e) {
            $this->addFlash('sancionError', 'No se ha podido eliminar la sanción');
        }
        return $this->redirectToRoute('gestion_sanciones');
    }

//    /**
//     * Permite exportar una sanción.
//     * @Route("/sancion/exportSanciones", name="admin_export_sanciones")
//     * @param Request $request la petición a realizar.
//     * @return Response la vista a renderizar.
//     */
//    public function exportSanciones(Request $request)
//    {
//        /** @var EntityManager $em */
//        $em = $this->getDoctrine()->getManager();
//
//
//        $alumnosSeleccionados = $request->get('alumnos');
//        $tiposSeleccionados = $request->get('tipos');
//        $fechaSeleccionada = $request->get('fecha');
//
//        /** @var AlumnoRepository $repositoryAlumnos */
//        $repositoryAlumnos = $em->getRepository('AppBundle:Alumno');
//
//        /** @var TipoSancionRepository $repositoryTipoSancion */
//        $repositoryTipoSancion = $em->getRepository('AppBundle:TipoSancion');
//
//        if ($alumnosSeleccionados == "Todos") {
//            $alumnos = $repositoryAlumnos->findAll();
//        } else {
//            $alumnos = $repositoryAlumnos->findById($alumnosSeleccionados);
//        }
//
//        if ($tiposSeleccionados == "Todos") {
//            $tipos = $repositoryTipoSancion->findAll();
//        } else {
//            $tipos = $repositoryTipoSancion->findById($tiposSeleccionados);
//        }
//        /** @var SancionesRepository $repositorySanciones */
//        $repositorySanciones = $em->getRepository('AppBundle:Sanciones');
//
//        $data = $repositorySanciones->getSancionesExportar($fechaSeleccionada, $alumnos, $tipos);
//        $arrData = [];
//        $arrData[] = ['Id', 'Fecha', 'Fecha Inicio', 'Fecha Final', 'Sanción',
//        'Observaciones', 'Evaluación', 'Puntos Recuperados', 'Fecha Confirmacion',
//        'Fecha Comunicación', 'Tipo', 'Estado', 'Alumno'];
//        foreach ($data as $sancion) {
//            $sancionArray = (array)$sancion;
//            $sancionCsv = [];
//            foreach ($sancionArray as $sancionValue)
//                if ($sancionValue instanceof Alumno)
//                    $sancionCsv[] = $sancionValue->getNombreCompleto();
//                elseif ($sancionValue instanceof TipoSancion)
//                    $sancionCsv[] = $sancionValue->getTipo();
//                elseif ($sancionValue instanceof EstadosSancion)
//                    $sancionCsv[] = $sancionValue->getEstado();
//                elseif ($sancionValue instanceof \DateTime) {
//                    $year = $sancionValue->format('Y');
//                    if ($sancionValue == null)
//                        $fecha = "Sin fecha";
//                    elseif ($year == '1970')
//                        $fecha = $sancionValue->format('H:i:s');
//                    else
//                        $fecha = $sancionValue->format('Y-m-d H:i:s');
//                    $sancionCsv[] = $fecha;
//                } elseif (!$sancionValue instanceof PersistentCollection)
//                    $sancionCsv[] = $sancionValue;
//            $arrData[$sancion->getId()] = $sancionCsv;
//        }
//        $response = new CsvResponse($arrData, 200);
//        $response->setFilename("Sanciones.csv");
//        return $response;
//    }

//    /**
//     * Permite generar un formulario de exportación de la sanción.
//     * @Route("/sancion/exportFormSanciones", name="export_form_sanciones")
//     * @return Response la vista a renderizar.
//     */
//    public function exportSancionForm()
//    {
//        /** @var EntityManager $em */
//        $em = $this->getDoctrine()->getManager();
//
//        /** @var AlumnoRepository $repositoryAlumnos */
//        $repositoryAlumnos = $em->getRepository('AppBundle:Alumno');
//
//        /** @var TipoSancionRepository $repositoryTipoSancion */
//        $repositoryTipoSancion = $em->getRepository('AppBundle:TipoSancion');
//
//        $alumnos = $repositoryAlumnos->findAll();
//        $tipos = $repositoryTipoSancion->findAll();
//
//        return $this->render('convivencia/exportSanciones.html.twig', array(
//            'alumnos' => $alumnos,
//            'tipos' => $tipos,
//        ));
//    }

    /**
     * Permite generar el informe de sancioens de alumnos por grupo.
     * @Route("/informeSancionesAlumnosGrupo", name="sanciones_alumnosgrupos_informe")
     * @param Request $request la petición a realizar
     * @return Response la vista a renderizar
     */
    public function informeSancionesAlumnosGrupo(Request $request)
    {
        /** @var EntityManager $em */
        $em = $this->getDoctrine()->getManager();

        /** @var SancionesRepository $repositorySanciones */
        $repositorySanciones = $em->getRepository('AppBundle:Sanciones');

        $fechaI = $request->get('fechaI');
        $fechaF = $request->get('fechaF');
        $data = $repositorySanciones->getInformeSancionesAlumnos("$fechaI", "$fechaF");

        return $this->render(
            'convivencia/informes/sancionesAlumnadoGrupoInforme.html.twig',
            array('data' => $data)
        );
    }
}
