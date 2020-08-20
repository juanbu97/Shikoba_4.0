<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Eventos;
use AppBundle\Form\EventosType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use AppBundle\Repository\EventosRepository;
use DateTime;
use Exception;
use Symfony\Component\HttpFoundation\Request;

class EventosController extends Controller
{

    /**
     * @Route("/eventos", name="eventos")
     * @Method({"GET", "POST"})
     * 
     * Controlador que muestra todos los eventos
     */
    public function listarEventos()
    {

        $em = $this->getDoctrine()->getManager();

        $eventosRepository = $em->getRepository('AppBundle:Eventos');

        $eventos = $eventosRepository->getEventos();

        return $this->render('convivencia/eventos/eventos.html.twig', [
            'eventos' => $eventos,

        ]);
    }

    /**
     * @Route("/borrarEvento/{id}", name="borrarEvento")
     * @Method({"GET", "POST"})
     * 
     * Controlador que borra un evento
     */
    public function borrarEventos(Eventos $evento)
    {

        try {
            $em = $this->getDoctrine()->getManager();
            $em->remove($evento);
            $em->flush();
            $this->addFlash('evento', 'Evento eliminado correctamente');
        } catch (Exception $e) {
            $this->addFlash('eventoError', 'No se ha podido eleminar el evento');
        }

        return $this->redirectToRoute('eventos');
    }

    /**
     * @Route("/nuevoEvento", name="nuevoEvento")
     * @Method({"GET", "POST"})
     * 
     * Controlador que crea un nuevo evento
     */
    public function crearEvento(Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        $evento = new Eventos();
        $form = $this->createForm(EventosType::class, $evento);

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {

            $evento->setCreatedAt(new \DateTime());
            $evento->setUpdatedAt(new \DateTime());

            $em->persist($evento);
            $em->flush();

            return $this->redirectToRoute('eventos');
        }

        return $this->render('convivencia/eventos/nuevoEvento.html.twig', [
            'evento' => $evento,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/editEvento/{id}", name="editEvento")
     * @Method({"GET", "POST"})
     * 
     * Controlador que edita los datos de un evento creado
     */
    public function editEvento(Request $request, Eventos $evento)
    {
        $id = $evento->getId();
        $form = $this->createForm(EventosType::class , $evento);
        $em = $this->getDoctrine()->getManager();

        $eventosRepository = $em->getRepository('AppBundle:Eventos');

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {

            $descripcion = $form->get('descripcion')->getViewData();
            $fechaInicio = $form->get('fechaInicio')->getViewData();
            $fechaFinal = $form->get('fechaFinal')->getViewData();

            $updatedAt = new DateTime();
            $eventosRepository->updateEvento($id, $descripcion, $fechaInicio, $fechaFinal, $updatedAt);

            return $this->redirectToRoute('eventos');
        }

        return $this->render('convivencia/eventos/nuevoEvento.html.twig', [
            'evento' => $evento,
            'form' => $form->createView(),
        ]);


    }
}
