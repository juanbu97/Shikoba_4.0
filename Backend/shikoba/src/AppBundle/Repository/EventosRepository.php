<?php

namespace AppBundle\Repository;

/**
 * EventosRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class EventosRepository extends \Doctrine\ORM\EntityRepository
{

    /**
     * Función que devulve todos los eventos para almacenarlos en un select
     */
    public function getAllEventos()
    {
        return $this->getEntityManager()
            ->createQueryBuilder()
            ->select('a')
            ->from('AppBundle:Eventos', 'a')
            ->getQuery()
            ->getResult();
    }

    /**
     * Función que devuelve todos los eventos en un array
     */
    public function getEventos()
    {
        $query = $this->getEntityManager()->createQuery(
            'SELECT e
            from AppBundle\Entity\Eventos e
            ORDER BY e.id'
        );

        return $query->getResult();
    }

    /**
     * Función que actuliaza un evento
     */
    public function updateEvento($id, $descripcion, $fechaInicio, $fechaFinal, $updatedAt)
    {
        $query = $this->getEntityManager()->createQuery(
            'UPDATE AppBundle\Entity\Eventos e
            SET e.descripcion = :descripcion,
            e.fechaInicio = :fechaInicio,
            e.fechaFinal = :fechaFinal,
            e.updatedAt = :updatedAt

            where e.id = :id'
        );
        $query->setParameter(':id', $id);
        $query->setParameter(':descripcion', $descripcion);
        $query->setParameter(':fechaFinal', $fechaFinal);
        $query->setParameter(':fechaInicio', $fechaInicio);
        $query->setParameter(':updatedAt', $updatedAt);


        return $query->getResult();
    }
}
