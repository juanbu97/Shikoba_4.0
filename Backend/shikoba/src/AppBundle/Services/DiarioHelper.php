<?php
/**
 * @User: Guillermo Boquizo Sánchez (GUBS), Rafael García Zurita (RAGZ).
 * @File: DiarioHelper.php
 * @Updated: 2019
 * @Description: Servicio para la gestión del diario.
 * @license http://opensource.org/licenses/gpl-license.php  GNU Public License
 */

namespace AppBundle\Services;

use AppBundle\Entity\DiarioAulaConvivencia;
use AppBundle\Model\DiarioData;
use AppBundle\Repository\DiarioAulaConvivenciaRepository;
use Doctrine\ORM\EntityManager;
use Symfony\Component\HttpFoundation\Request;
use DateTime;
use Exception;

/**
 * Class DiarioHelper.
 */
class DiarioHelper
{
    /**
     * DiarioHelper constructor.
     *
     * @param EntityManager $em
     */
    public function __construct(EntityManager $em)
    {
        $this->em = $em;
        /* @var DiarioAulaConvivenciaRepository repositoryDiario */
        $this->repositoryDiario = $this->em->getRepository('AppBundle:DiarioAulaConvivencia');
    }

    /**
     * Función que devuelve los diarios de una fecha y unas horas sin repetir alumno.
     * @param DateTime $fecha
     * @param $horas
     * @return array
     */
    public function getDiariosAula(DateTime $fecha, $horas)
    {
        $arrDiariosAula = array();
        $arrIdSancion = array();
        foreach ($horas as $hora) {
            $diariosAula = $this->repositoryDiario->getDiarioByFechaYHora($fecha, $hora);
            /** @var DiarioAulaConvivencia $diario */
            foreach ($diariosAula as $diario) {
                if (!in_array($diario->getIdSancion()->getIdAlumno()->getId(), $arrIdSancion)) {
                    $arrDiariosAula[] = $diario;
                    $arrIdSancion[] = $diario->getIdSancion()->getIdAlumno()->getId();
                }
            }
        }
        return $arrDiariosAula;
    }

    /**
     * Función que crea un nuevo Modelo DiarioData.
     * @param \DateTime $fecha
     * @param $horas
     * @param $horasElegidas
     * @return DiarioData
     */
    public function getDiarioData(\DateTime $fecha, $horasElegidas, $horas)
    {
        $diariosAula = $this->getDiariosAula($fecha, $horasElegidas);
        return new DiarioData($diariosAula, $horas, $horasElegidas, $fecha);
    }

    /**
     * Función que recupera 1 punto si el usuario a pulsado el boton recupera punto.
     * @param Request $request
     * @throws Exception
     * @return bool
     */
    public function recuperarPuntos(Request $request)
    {
        if (null != $request->get('recuperaPunto') && null != $request->get('id')) {
            /* @var DiarioAulaConvivencia $diario */
            $diario = $this->repositoryDiario->findOneById($request->get('id'));
            if (1 != $diario->getRecupera()) {
                $diario->setRecupera(1);
                $this->em->persist($diario);
                $this->em->flush();
                return true;
            }
        }
        return false;
    }

    /**
     * Función que devuelve true si puede recuperar 1 punto, false en caso contrario.
     * @param DiarioAulaConviviencia $diario
     * @return bool
     */
    public function diarioRecupera(DiarioAulaConvivencia $diario)
    {
        if (0 == $diario->getRecupera()) {
            return true;
        }
        return false;
    }
}
