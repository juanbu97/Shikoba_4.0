<?php

/**
 * @User: Guillermo Boquizo Sánchez (GUBS), Rafael García Zurita (RAGZ).
 * @File: NoticiasController.php
 * @Updated: 2019
 * @Description: Controlador de las noticias.
 * @license http://opensource.org/licenses/gpl-license.php  GNU Public License
 */

namespace AppBundle\Controller;

use AppBundle\Entity\Cursos;
use AppBundle\Entity\Noticias_eventos;
use AppBundle\Entity\NoticiasV2;
use AppBundle\Form\Noticias_eventosType;
use AppBundle\Repository\CursosRepository;
use Doctrine\ORM\EntityManager;
use AppBundle\Form\NoticiasV2Type;
use DateTime;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Exception;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

//use Symfony\Component\Form\Extension\Core\Type\TextType;
//use Symfony\Component\Form\Extension\Core\Type\IntegerType;
//use Symfony\Component\Form\Extension\Core\Type\DateType;
//use Symfony\Component\Form\Extension\Core\Type\SubmitType;

/**
 * Class NoticiasController.
 */
class NoticiasController extends Controller
{
    /**
     * Permite mostrar las noticias.
     * @Route("/noticias", name="noticias")
     * @Method({"GET", "POST"})
     * @return Response la vista a renderizar
     */
    public function showNoticias()
    {
        /** @var EntityManager $em */
        $em = $this->getDoctrine()->getManager();

        /** @var NoticiasRepository $repositoryNoticias */
        $repositoryNoticias = $em->getRepository('AppBundle:NoticiasV2');

        $noticias = $repositoryNoticias->getNoticia();

        return $this->render('convivencia/noticias/noticias.html.twig', array(
            'noticias' => $noticias,
            'user' => $this->getUser(),
        ));
    }

    /**
     * @Route("/noticiasForm", name="nuevaNoticia")
     * @Method({"GET", "POST"})
     */
    public function nuevaNoticia(Request $request): Response
    {
        $entityManager = $this->getDoctrine()->getManager();
        $noticia = new NoticiasV2();

        $form = $this->createForm(NoticiasV2Type::class, $noticia);
        //$formEvento = $this->createForm(Noticias_eventosType::class, $evento);

        $form->handleRequest($request);
        //$formEvento->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {



            $noticia->setNumeroPublicaciones(0);
            $noticia->setCreatedAt(new \DateTime());
            $noticia->setUpdatedAt(new \DateTime());
            //$evento->setIdNoticias($noticia->getId());
            //$entityManager->persist($evento);


            $entityManager->persist($noticia);
            $entityManager->flush();

            return $this->redirectToRoute('noticias');
        }

       


        return $this->render('convivencia/noticias/noticiasForm.html.twig', [
            'noticia' => $noticia,
            //'evento' => $evento,
            'form' => $form->createView(),
            //'formEvento' => $formEvento->createView(),
        ]);
    }

    /**
     * Permite borrar una noticia.
     * @Route("/noticias/borrarNoticia/{id}", name="borrar_noticia")
     * @Method({"GET", "POST"})
     * @param Noticias $noticia la noticia a borrar
     * @throws Exception
     * @return Response la vista a renderizar
     */
    public function deleteNoticias(NoticiasV2 $noticia)
    {
        try {
            /** @var EntityManager $em */
            $em = $this->getDoctrine()->getManager();
            $em->remove($noticia);
            $em->flush();
            $this->addFlash('noticia', 'Noticia eliminada correctamente');
        } catch (Exception $e) {
            $this->addFlash('noticiaError', 'No se ha podido eliminar la noticia');
        }

        return $this->redirectToRoute('noticias');
    }

    /**
     * Permite editar una noticia.
     * @Route("/noticias/editNoticia/{id}", name="editNoticia")
     * @Method({"GET", "POST"})
     * @param Noticias $noticia la noticia a editar, Request $request la petición a realizar
     * @return Response la vista a renderizar
     */
    public function editNoticia(NoticiasV2 $noticia, Request $request)
    {

        $id = $noticia->getId();
        
        $form = $this->createForm(NoticiasV2Type::class, $noticia);

        /** @var EntityManager $em */
        $em = $this->getDoctrine()->getManager();

        /** @var NoticiasRepository $repositoryNoticias */
        $repositoryNoticias = $em->getRepository('AppBundle:NoticiasV2');
        
        $form->handleRequest($request);

        if($form->isSubmitted() && $form->isValid()){

            $titulo = $form->get('titulo')->getViewData();
            $descripcion = $form->get('descripcion')->getViewData();
            $codigo_embebido = $form->get('codigoEmbebido')->getViewData();
            $tag_paremetrizacion_cursos = $form->get('tagParametrizacionCursos')->getViewData();
            $tag_paremetrizacion_grupos = $form->get('tagParametrizacionGrupos')->getViewData();
            $tag_paremetrizacion_categorias = $form->get('tagParametrizacionCategorias')->getViewData();
            $tag_paremetrizacion_valores = $form->get('tagParametrizacionValores')->getViewData();
            $tag_paremetrizacion_puntos = $form->get('tagParametrizacionPuntos')->getViewData();
            $updatedAt = new DateTime();

            $repositoryNoticias->updateNoticias($id, $titulo, $descripcion, $codigo_embebido, $tag_paremetrizacion_valores,
            $tag_paremetrizacion_puntos, $tag_paremetrizacion_categorias, $tag_paremetrizacion_cursos,
            $tag_paremetrizacion_grupos, $updatedAt);

            return $this->redirectToRoute('noticias');

        }
        return $this->render('convivencia/noticias/noticiasForm.html.twig', array(
            'noticia' => $noticia,
            'form' => $form->createView(),
        ));
        
    }
}
