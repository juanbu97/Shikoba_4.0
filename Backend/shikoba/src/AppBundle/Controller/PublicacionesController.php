<?php

namespace AppBundle\Controller;

use AppBundle\Entity\NoticiasV2;
use AppBundle\Entity\Publicaciones;
use AppBundle\Form\PublicacionesType;
use AppBundle\Repository\NoticiasRepository;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Exception;


class PublicacionesController extends Controller
{

    /**
     * @Route("/publicarNoticia/{id}", name="publicacion")
     * @Method({"GET", "POST"})
     */
    public function publicarNoticia(NoticiasV2 $noticia, Request $request): Response
    {

        $entityManager = $this->getDoctrine()->getManager();
        $publicacion = new Publicaciones();

        $id = $noticia->getId();

        /** @var NoticiasRepository $repositoryNoticias */
        $repositoryNoticias = $entityManager->getRepository('AppBundle:NoticiasV2');

        $noticiaActual = $repositoryNoticias->getNoticia($id);

        $cadenaCursos = $noticia->getTagParametrizacionCursos();
        $cadenaGrupos = $noticia->getTagParametrizacionGrupos();
        $cadenaPuntos = $noticia->getTagParametrizacionPuntos();

        $consultaSql = 'Select email from alumno ';

        $arrayCursos = explode(',', $cadenaCursos);
        $arrayPuntos = explode(',', $cadenaPuntos);
        $arrayGrupos = explode(',', $cadenaGrupos);

        if (count($arrayPuntos) == 1) {
            if ($arrayPuntos[0] == "*") {
                $consultaSql .= "";
            } else {
                $consultaSql .= "where puntos = " . $arrayPuntos[0];
            }
        } else {
            $consultaSql .= "where puntos in ({$cadenaPuntos})";
        }
        if ($arrayPuntos[0] == "*") {
            $consultaSql .= " where ";
        } else {
            $consultaSql .= " and ";
        }

        if (count($arrayCursos) == 1) {
            if ($arrayCursos[0] == "*") {
                $consultaSql .= "";
            } else {
                $consultaSql .= "idCurso in (select id from cursos where curso = '{$arrayCursos[0]}'";
            }
        } else {
            $consultaSql .= "idCurso in (select id from cursos where ";
            foreach ($arrayCursos as $valor) {
                if ($valor == $arrayCursos[count($arrayCursos) - 1]) {
                    $consultaSql .= " curso = '{$valor}'";
                } else {
                    $consultaSql .= " curso = '{$valor}' or ";
                }
            }
        }

        if ($arrayCursos[0] == "*") {
            $consultaSql .= "idCurso in (select id from cursos where ";
        } else if ($arrayGrupos[0] != "*") {
            $consultaSql .= " and ";
        } else {
            $consultaSql .= "";
        }

        if (count($arrayGrupos) == 1) {
            if ($arrayGrupos[0] == '*') {
                $consultaSql .= "";
            } else {
                $consultaSql .= "grupo = '{$arrayGrupos[0]}'";
            }
        } else {
            foreach ($arrayGrupos as $valor) {
                if ($valor == $arrayGrupos[count($arrayGrupos) - 1]) {
                    $consultaSql .= " grupo = '{$valor}'";
                } else {
                    $consultaSql .= " grupo = '{$valor}' or ";
                }
            }
        }

        if ($arrayCursos[0] == "*" && $arrayPuntos[0] == "*" && $cadenaGrupos[0] == "*") {
            $consultaSql = "Select email from alumno;";
        } else if ($arrayCursos[0] == "*" && $arrayPuntos[0] == "*") {
            $consultaSql .= ");";
        } else if ($arrayCursos[0] == "*" && $arrayGrupos[0] == "*") {
            $consultaSql = 'Select email from alumno ';

            if (count($arrayPuntos) == 1) {
                if ($arrayPuntos[0] == "*") {
                    $consultaSql .= "";
                } else {
                    $consultaSql .= "where puntos = " . $arrayPuntos[0];
                }
            } else {
                $consultaSql .= "where puntos in ({$cadenaPuntos})";
            }
            $consultaSql .= ";";
        } else {
            $consultaSql .= ");";
        }




        //$idNoticiaSelecionada = $repositoryNoticias->getNoticia($id);

        $form = $this->createForm(PublicacionesType::class, $publicacion);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {



            $publicacion->setIdNoticia($id);
            $publicacion->setDestinatariosSql($consultaSql);
            $publicacion->setTipoPublicacion(1);
            $publicacion->setCreatedAt(new \DateTime());
            $publicacion->setUpdatedAt(new \DateTime());
            $publicacion->setEstado(2);
            $publicacion->setFechaCreacion(new \DateTime());
            $entityManager->persist($publicacion);
            $entityManager->flush();

            return $this->redirectToRoute('noticias');
        }

        return $this->render('convivencia/publicaciones/publicacionesForm.html.twig', [
            'publicacion' => $publicacion,
            'form' => $form->createView(),
        ]);
    }

    /**
     * Permite borrar una noticia.
     * @Route("/publicaciones/borrarPublicacion/{id}", name="publicaciones_borrar")
     * @Method({"GET", "POST"})
     * @param Publicaciones $noticia la noticia a borrar
     * @throws Exception
     * @return Response la vista a renderizar
     */
    public function deletePublicacion(Publicaciones $publicacion2){

        $em = $this->getDoctrine()->getManager();
        try {
            $em->remove($publicacion2);
            $em->flush();
            $this->addFlash('publicacion', 'Publicacion eliminada correctamente');
        } catch (Exception $e) {
            $this->addFlash('publicacionError', 'No se ha podido eliminar la publicacion');
        }

        return $this->redirectToRoute('noticias');

    }
    
    
    /*public function deletePublicacion(Publicaciones $publicacion)
    {
        try {
            
            $em = $this->getDoctrine()->getManager();
            $em->remove($publicacion);
            $em->flush();
            $this->addFlash('publicacion', 'Publicación eliminada correctamente');
        } catch (Exception $e) {
            $this->addFlash('publicacionError', 'No se ha podido eliminar la publicación');
        }

        return $this->redirectToRoute('noticias');
    } */
}
