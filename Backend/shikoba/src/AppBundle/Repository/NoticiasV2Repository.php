<?php

namespace AppBundle\Repository;

/**
 * PostRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class NoticiasV2Repository extends \Doctrine\ORM\EntityRepository
{
    /**
     * Función que devuelve todas las noticias.
     *
     * @return array
     */
    public function getNoticia()
    {
        $query = $this->getEntityManager()->createQuery(
            'SELECT noticias
             FROM AppBundle\Entity\NoticiasV2 noticias
             ORDER BY noticias.id desc'
        );

        return $query->getResult();
    }

    /**
     * Funcion que devuelve true o false
     *
     * @return boolean
     */
    public function isPublished($id)
    {
        $banderaPubl = false;
        $query = $this->getEntityManager()->createQuery(
            'SELECT publicaciones
             FROM AppBundle\Entity\Publicaciones publicaciones
             where publicaciones.idNoticia = :id'
        );
        $query->setParameter(':id', $id);

        if (sizeof($query->getResult()) > 0) {
            $banderaPubl = true;
        }

        return $banderaPubl;
    }

    /**
     * Función que realiza un update en noticias.
     *
     * @return array
     */
    public function updateNoticias(
        $id,
        $titulo,
        $descripcion,
        $codigo_embebido,
        $tag_parametrizacion_valores,
        $tag_parametrizacion_puntos,
        $tag_parametrizacion_categorias,
        $tag_parametrizacion_cursos,
        $tag_parametrizacion_grupos,
        $updatedAt
    ) {
        $query = $this->getEntityManager()->createQuery('UPDATE AppBundle\Entity\NoticiasV2 n 
                SET n.titulo= :titulo, 
                n.descripcion= :descripcion, 
                n.codigoEmbebido=:codigo_embebido, 
                n.tagParametrizacionPuntos=:tag_parametrizacion_puntos, 
                n.tagParametrizacionCursos=:tag_parametrizacion_cursos,
                n.tagParametrizacionValores=:tag_parametrizacion_valores,
                n.tagParametrizacionGrupos=:tag_parametrizacion_grupos,
                n.tagParametrizacionCategorias=:tag_parametrizacion_categorias,
                n.updatedAt = :updatedAt

                where n.id= :id ');
        $query->setParameter(':id', $id);
        $query->setParameter(':titulo', $titulo);
        $query->setParameter(':descripcion', $descripcion);
        $query->setParameter(':codigo_embebido', $codigo_embebido);
        $query->setParameter(':tag_parametrizacion_puntos', $tag_parametrizacion_puntos);
        $query->setParameter(':tag_parametrizacion_cursos', $tag_parametrizacion_cursos);
        $query->setParameter(':tag_parametrizacion_valores', $tag_parametrizacion_valores);
        $query->setParameter(':tag_parametrizacion_grupos', $tag_parametrizacion_grupos);
        $query->setParameter(':tag_parametrizacion_categorias', $tag_parametrizacion_categorias);
        $query->setParameter(':updatedAt', $updatedAt);


        return $query->getResult();
    }
}
