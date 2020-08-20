<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Eventos;
use AppBundle\Entity\Noticias_eventos;
use AppBundle\Entity\NoticiasV2;
use AppBundle\Form\Noticias_eventosType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Symfony\Component\HttpFoundation\Request;
use Exception;
use AppBundle\Repository\Noticias_eventosRepository;

class Noticias_eventos_controllerController extends Controller
{
    /**
     * Asocia un evento a una noticia
     * 
     * @Route("/eventosForm/{id}", name="asociarEvento")
     * @Method({"GET", "POST"})
     */
    public function crearEvento(Request $request, NoticiasV2 $noticia)
    {
        $em = $this->getDoctrine()->getManager();
        $evento = new Noticias_eventos();
        $idNoticia = $noticia->getId();

        $form = $this->createForm(Noticias_eventosType::class, $evento);

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {

            $idEvento = $form->get('idEvento')->getViewData();
            $evento->setIdNoticia($idNoticia);
            $evento->setIdEvento($idEvento);
            $em->persist($evento);
            $em->flush();

            return $this->redirectToRoute('noticias');
        }

        return $this->render('convivencia/eventos/eventosForm.html.twig', [
            'noticia' => $noticia,
            'form' => $form->createView(),
        ]);
    }

    /**
     * Elimina un evento asociado a una noticia
     * 
     * @Route("/deleteEvent/{idEvento}/{idNoticia}", name="eliminarEvento")
     * @Method({"GET", "POST"})
     * 
     */
    public function deleteEvent($idEvento, $idNoticia){

        try {
            $em = $this->getDoctrine()->getManager();

            $noticiasRepository = $em->getRepository('AppBundle:Noticias_eventos');

            $noticiasRepository->deleteNoticiaEvento($idEvento, $idNoticia);

            $em->flush();
            $this->addFlash('evento', 'Evento eliminado correctamente');
        } catch (Exception $e) {
            $this->addFlash('eventoError', 'No se ha podido eleminar el evento');
        }

        return $this->redirectToRoute('noticias');
    }
}
