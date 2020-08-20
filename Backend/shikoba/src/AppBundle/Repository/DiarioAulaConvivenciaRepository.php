<?php
/**
 * @User: Guillermo Boquizo Sánchez (GUBS), Rafael García Zurita (RAGZ).
 * @File: DiarioAulaConvivenciaRepository.php
 * @Updated: 2019
 * @Description: Repositorio para la gestión del diario del aula de convivencia.
 *
 * @license http://opensource.org/licenses/gpl-license.php  GNU Public License
 */

namespace AppBundle\Repository;

use Doctrine\ORM\EntityRepository;
use Exception;
use DateTime;

/**
 * Class DiarioAulaConvivenciaRepository.
 */
class DiarioAulaConvivenciaRepository extends EntityRepository
{
    /**
     * Función que devuelve las sanciones ordenadas por fecha.
     * @param DateTime $fecha
     * @param $hora
     * @throws Exception
     * @return array
     */
    public function getDiarioByFechaYHora(DateTime $fecha, $hora)
    {
        $from = new DateTime($fecha->format('Y-m-d').' 00:00:00');
        $to = new DateTime($fecha->format('Y-m-d').' 23:59:59');
        $query = $this->getEntityManager()->createQuery(
            'SELECT d
             FROM AppBundle\Entity\DiarioAulaConvivencia d
             WHERE d.hora = :hora AND d.fecha BETWEEN :fechaFrom AND :fechaTo 
             ORDER BY d.fecha DESC'
        );
        $query->setParameter('fechaFrom', $from);
        $query->setParameter('fechaTo', $to);
        $query->setParameter('hora', $hora);
        return $query->getResult();
    }
}
