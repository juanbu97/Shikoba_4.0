<?php
/**
 * @User: Guillermo Boquizo Sánchez (GUBS), Rafael García Zurita (RAGZ).
 * @File: ConductasRepository.php
 * @Updated: 2019
 * @Description: Repositorio para la gestión de las conductas.
 * @license http://opensource.org/licenses/gpl-license.php  GNU Public License
 */

namespace AppBundle\Repository;

use AppBundle\Entity\Conductas;
use Doctrine\ORM\EntityRepository;

/**
 * Class ConductasRepository.
 */
class ConductasRepository extends EntityRepository
{
    /**
     * Función que devuelve un array con las conductas indexadas por el tipo.
     * @return array Array con las conductas indexadas por el tipo
     */
    public function getConductasOption()
    {
        $conductas = $this->findAll();
        $arrConductas = [];
        /** @var Conductas $conducta */
        foreach ($conductas as $conducta) {
            $arrConductas[$conducta->getTipo()][] = $conducta->getNombreAndPuntos();
        }
        return $arrConductas;
    }

    /**
     * Función que devuelve las conductas.
     * @return array
     */
    public function getConductas()
    {
        $qb = $this->getEntityManager()->createQuery(
            'SELECT c.id,c.conducta,c.puntos
           FROM AppBundle\Entity\Conductas c'
        );

        return $qb->getResult();
    }
}
