<?php
/**
 * @User: Guillermo Boquizo Sánchez (GUBS), Rafael García Zurita (RAGZ).
 * @File: UsuariosRepository.php
 * @Updated: 2019
 * @Description: Repositorio para la gestión de los usuarios.
 * @license http://opensource.org/licenses/gpl-license.php  GNU Public License
 */

namespace AppBundle\Repository;

use Doctrine\ORM\EntityRepository;
use Doctrine\ORM\NoResultException;
use \Doctrine\ORM\NonUniqueResultException;

/**
 * Class UsuariosRepository.
 */
class UsuariosRepository extends EntityRepository
{
    /**
     * Permite obtener el usuario.
     * @param $user
     * @param $password
     * @return mixed
     * @throws NoResultException
     * @throws NonUniqueResultException
     */
    public function getUsuario($user, $password)
    {
        return $this->getEntityManager()
            ->createQueryBuilder()
            ->select('u')
            ->from('AppBundle:Usuarios', 'u')
            ->where('u.usuario = :user', 'u.password = :password')
            ->setParameter('user', $user)
            ->setParameter('password', $password)
            ->getQuery()
            ->getSingleResult();
    }
}
