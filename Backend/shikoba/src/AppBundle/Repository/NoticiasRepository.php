<?php
/**
 * @User: Guillermo Boquizo Sánchez (GUBS), Rafael García Zurita (RAGZ).
 * @File: NoticiasRepository.php
 * @Updated: 2019
 * @Description: Repositorio para la gestión de las noticias.
 *
 * @license http://opensource.org/licenses/gpl-license.php  GNU Public License
 */

namespace AppBundle\Repository;

use Doctrine\ORM\EntityRepository;

/**
 * Class NoticiasRepository.
 */
class NoticiasRepository extends EntityRepository
{
    /**
     * Función que devuelve todas las noticias.
     *
     * @return array
     */
    public function getNoticias()
    {
        $query = $this->getEntityManager()->createQuery(
            'SELECT n
             FROM AppBundle\Entity\NoticiasV2 n
             ORDER BY n.numeroPublicaciones desc'
        );

        return $query->getResult();
    }

    /**
     * Función que devuelve noticia para el alumno.
     *
     * @param $curso
     * @param $puntos
     *
     * @return array
     */
    /* public function getNoticiasCurso($curso, $puntos)
    {
        $query = $this->getEntityManager()->createQuery(
            'SELECT n
             FROM AppBundle\Entity\NoticiasV2 n
             WHERE n.idCurso = :curso and n.puntos = :puntos ORDER BY n.fecha desc'
        );
        $query->setParameter(':curso', $curso);
        $query->setParameter(':puntos', $puntos);
        $query->setMaxResults(1);

        return $query->getResult();
    } */

    /**
     * Función que realiza un update en noticias.
     *
     * @return array
     */
    /* public function updateNoticias($id, $curso, $puntos, $fechaI, $fechaF, $texto)
    {
        $query = $this->getEntityManager()->createQuery('UPDATE AppBundle\Entity\noticias n 
                SET n.fechaFinal= :fechaF, 
                n.fechaInicio= :fechaI, 
                n.idCurso=:curso, 
                n.puntos=:puntos, 
                n.noticia_texto=:texto 
                where n.id= :id ');
        $query->setParameter(':id', $id);
        $query->setParameter(':curso', $curso);
        $query->setParameter(':puntos', $puntos);
        $query->setParameter(':fechaI', $fechaI);
        $query->setParameter(':fechaF', $fechaF);
        $query->setParameter(':texto', $texto);

        return $query->getResult();
    } */

    /**
     * Función que devuelve noticia según el id.
     *
     * @return array
     */
    public function getNoticia($id)
    {
        $query = $this->getEntityManager()->createQuery(
            'SELECT n FROM AppBundle\Entity\NoticiasV2 n WHERE n.id = :id'
        );
        $query->setParameter(':id', $id);

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

        if (sizeof($query->getResult())>0) {
            $banderaPubl = true;
        }

        return $banderaPubl;
    }
}
