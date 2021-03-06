<?php

namespace AppBundle\Repository;

/**
 * Noticias_eventosRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class Noticias_eventosRepository extends \Doctrine\ORM\EntityRepository
{

    /**
     * Funcio que borra un evento asociado a una noticia por id
     */
    public function deleteNoticiaEvento($idEvento, $idNoticia)
    {
        $query = $this->getEntityManager()->createQuery(
            'DELETE from AppBundle\Entity\Noticias_eventos n
            where n.idEvento = :idEvento
            and n.idNoticia = :idNoticia'
        );
        $query->setParameter('idEvento', $idEvento)
        ->setParameter('idNoticia',$idNoticia);

        return $query->getResult();

    }

    /**
     * Encuentra una noticia por id
     */
    public function findById($idEvento, $idNoticia)
    {
        $query=$this->getEntityManager()->createQuery(
            'SELECT e.idEvento
            from AppBundle:Noticias_eventos e
            where e.idEvento = :idEvento
            and e.idNoticia = :idNoticia'
        )
        ->setParameter('idEvento',$idEvento)
        ->setParameter('idNoticia',$idNoticia);

        return $query->getResult();
    }
}
