<?php
/**
 * @User: Guillermo Boquizo Sánchez (GUBS), Rafael García Zurita (RAGZ).
 * @File: PerfilRepository.php
 * @Updated: 2019
 * @Description: Repositorio para la gestión de los perfiles.
 *
 * @license http://opensource.org/licenses/gpl-license.php  GNU Public License
 */

namespace AppBundle\Repository;

use Doctrine\ORM\EntityRepository;
use Doctrine\ORM\NoResultException;
use Doctrine\ORM\NonUniqueResultException;

/**
 * Class PerfilRepository.
 */
class PerfilRepository extends EntityRepository
{
    /**
     * Permite obtener el perfil por el id indicado.
     * @param $id
     * @return mixed
     * @throws NoResultException
     * @throws NonUniqueResultException
     */
    public function getPerfil($id)
    {
        return $this->getEntityManager()
            ->createQueryBuilder()
            ->select('p.perfil')
            ->from('AppBundle:Perfil', 'p')
            ->where('p.id = :id')
            ->setParameter('id', $id)
            ->getQuery()
            ->getSingleResult();
    }

    /**
     * Permite obtener los perfiles y sus ids.
     * @return array
     */
    public function getPerfiles()
    {
        return $this->getEntityManager()
            ->createQueryBuilder()
            ->select('p.perfil, p.id')
            ->from('AppBundle:Perfil', 'p')
            ->getQuery()
            ->getResult();
    }
}

