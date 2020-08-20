<?php
/**
 * @User: Guillermo Boquizo Sánchez (GUBS), Rafael García Zurita (RAGZ).
 * @File: CrearSancionHelper.php
 * @Updated: 2019
 * @Description: Servicio para la creación de las sanciones.
 * @license http://opensource.org/licenses/gpl-license.php  GNU Public License
 */

namespace AppBundle\Services;

use AppBundle\Entity\DiarioAulaConvivencia;
use AppBundle\Entity\Sanciones;
use AppBundle\Repository\AlumnoRepository;
use AppBundle\Repository\DiarioAulaConvivenciaRepository;
use AppBundle\Repository\SancionesRepository;
use Doctrine\ORM\EntityManager;
use Symfony\Component\HttpFoundation\Request;
use Exception;
use DateTime;

//use AppBundle\Repository\DetalleDiarioSancionHoraRepository;
//use AppBundle\Entity\DetalleDiarioSancionHora;

/**
 * Class CrearSancionHelper.
 */
class CrearSancionHelper
{
    const VALUE_INICIADO = 'Iniciada';
    const VALUE_COMUNICADO = 'Comunicada';

    const HORAS_CLASE = array(
        '1' => '08:15 - 09:15',
        '2' => '09:15 - 10:15',
        '3' => '10:15 - 11-15',
        '4' => '11:40 - 12:40',
        '5' => '12:40 - 13:40',
        '6' => '13:40 - 14:40',
    );
    const ESTADO_INICIADO = 'Iniciada';
    const SANCION_TYPE_HORAS = 5;
    const SANCION_TYPE_JORNADA = 2;

    /**
     * CrearSancionHelper constructor.
     *
     * @param EntityManager $em
     */
    public function __construct(EntityManager $em)
    {
        $this->em = $em;
        /* @var DiarioAulaConvivenciaRepository $repositoryDetalleDiario */
        $this->repositoryDiario = $this->em->getRepository('AppBundle:DiarioAulaConvivencia');
    }

    /**
     * Función que devuelve una sanción en función de la respuesta recibida.
     * @param Request $request
     * @return Sanciones
     */
    public function getSancionFromRequest(Request $request)
    {
        /** @var SancionesRepository $repositorySancion */
        $repositorySancion = $this->em->getRepository('AppBundle:Sanciones');
        $repositoryEstadoSanciones = $this->em->getRepository('AppBundle:EstadosSancion');
        /** @var AlumnoRepository $repositoryAlumno */
        $repositoryAlumno = $this->em->getRepository('AppBundle:Alumno');
        $estadoIniciado = $repositoryEstadoSanciones->findOneByEstado(self::ESTADO_INICIADO);
        if ($request->query->has('idSancion')) {
            return $repositorySancion->findOneById($request->get('idSancion'));
        } elseif ($request->query->has('idAlumno')) {
            $sancion = new Sanciones();
            $alumno = $repositoryAlumno->findOneById($request->get('idAlumno'));
            $sancion->setIdAlumno($alumno);
            $sancion->setIdEstado($estadoIniciado);
        } else {
            $sancion = new Sanciones();
            $sancion->setIdEstado($estadoIniciado);
        }
        return $sancion;
    }

    /**
     * Función que cambia el estado de la sancion a la siguiente.
     * @param Request $request
     * @throws Exception
     * @param Sanciones $sancion
     * @return mixed
     */
    public function changeEstado(Request $request, Sanciones $sancion)
    {
        if (null != $request->get('estadoSancion')) {
            $repositoryEstadoSanciones = $this->em->getRepository('AppBundle:EstadosSancion');
            $allEstados = $repositoryEstadoSanciones->findAll();
            foreach ($allEstados as $key => $valueEstado) {
                if ($valueEstado->getId() == $sancion->getIdEstado()->getId()) {
                    $fecha = new \DateTime();
                    if (self::VALUE_INICIADO == $valueEstado->getEstado()) {
                        $sancion->setFechaComunicacion($fecha->format('d/m/Y'));
                    } elseif (self::VALUE_COMUNICADO == $valueEstado->getEstado()) {
                        $sancion->setFechaConfirmacion($fecha->format('d/m/Y'));
                    }
                    if ($key < count($allEstados) - 1) {
                        $nextEstado = $repositoryEstadoSanciones->findOneById($valueEstado->getId() + 1);
                        $sancion->setIdEstado($nextEstado);
                        $this->em->persist($sancion);
                        $this->em->flush();
                        return true;
                    }
                }
            }
        }
        return false;
    }

    /**
     * Función que devuelve los diarios segun una sanción.
     * @param Sanciones $sancion
     * @return mixed
     */
    public function getDiarioFromSancion(Sanciones $sancion)
    {
        if (null != $sancion && null != $sancion->getIdTipo()
            && self::SANCION_TYPE_HORAS == $sancion->getIdTipo()->getId()) {
            return $this->repositoryDiario->findByIdSancion($sancion->getId());
        } else {
            return null;
        }
    }

    /**
     * Función que crea diarios a traves de una sanción.
     * @param Sanciones $sancion
     * @throws Exception
     * @param Request $request
     */
    public function creaDiarioFromSancion(Sanciones $sancion, Request $request)
    {
        $this->deleteDiarioBySancion($sancion);
        if (self::SANCION_TYPE_HORAS == $sancion->getIdTipo()->getId()) {
            if ($request->request->has('horaAc')) {
                $horas = $request->get('horaAc');
                $fechas = $request->get('fechaHora');
                foreach ($horas as $key => $hora) {
                    $this->persistDiario($sancion, $hora, $fechas, $key);
                }
                $this->em->flush();
            }
            if ($request->request->has('horaAcEdit')) {
                $horas = $request->get('horaAcEdit');
                $fechas = $request->get('fechaHoraEdit');
                foreach ($horas as $key => $hora) {
                    $this->persistDiario($sancion, $hora, $fechas, $key);
                }
                $this->em->flush();
            }
        } elseif (self::SANCION_TYPE_JORNADA == $sancion->getIdTipo()->getId()) {
            if ($sancion->getFechaInicio() <= $sancion->getFechaFinal()) {
                $dateAdd = date_interval_create_from_date_string('1 day');
                for ($i = $sancion->getFechaInicio(); $i <= $sancion->getFechaFinal(); $i = date_add($i, $dateAdd)) {
                    foreach (self::HORAS_CLASE as $hora => $valor) {
                        $this->persistDiario($sancion, $hora, $i, null, false);
                    }
                    $this->em->flush();
                }
            }
        }
    }

    /**
     * Función que persiste un diario en función de los parámetros.
     * @param Sanciones $sancion
     * @param $hora
     * @param $fechas
     * @param $key
     * @param bool $format
     */
    public function persistDiario(Sanciones $sancion, $hora, $fechas, $key, $format = true)
    {
        $diarioAula = new DiarioAulaConvivencia();
        $diarioAula->setIdSancion($sancion);
        $diarioAula->setHora($hora);
        if ($format) {
            $fecha = \DateTime::createFromFormat('d/m/Y', $fechas[$key]);
            $diarioAula->setFecha($fecha);
        } else {
            $diarioAula->setFecha($fechas);
        }
        $diarioAula->setAsiste(0);
        $this->em->persist($diarioAula);
    }

    /**
     * Función que elimina los diarios de una sanción.
     * @throws Exception
     * @param Sanciones $sancion
     */
    public function deleteDiarioBySancion(Sanciones $sancion)
    {
        $diarios = $this->repositoryDiario->findByIdSancion($sancion);
        if (null != $diarios) {
            foreach ($diarios as $diario) {
                $this->em->remove($diario);
            }
        }
        $this->em->flush();
    }

    /**
     * Función que devuelve una hora de clase a partir de una fecha.
     * @param DateTime $fecha
     * @return mixed
     */
    public function getHoraFromDate(DateTime $fecha)
    {
        $hora = intval($fecha->format('H'));
        $min = intval($fecha->format('i'));
        if ($hora < 8) {
            return 1;
        }
        if ($hora > 14 || (14 == $hora && $min > 40)) {
            $fecha = date_add($fecha, date_interval_create_from_date_string('1 day'));
            $fecha->setTime(8, 15);
            return $this->getHoraFromDate($fecha);
        }
        if ((14 == $hora && $min <= 40) || (13 == $hora && $min >= 40)) {
            return 6;
        }

        foreach (self::HORAS_CLASE as $keyHoras => $arrayhoraClase) {
            $arrayhoraClase = explode(' - ', $arrayhoraClase);
            foreach ($arrayhoraClase as $key => $horaClase) {
                if (0 == $key) {
                    $horaDate = explode(':', $horaClase)[0];
                    $minDate = explode(':', $horaClase)[1];
                    if ($hora == $horaDate) {
                        if ($min >= $minDate) {
                            $horaFromDate = $keyHoras;
                        } else {
                            $horaFromDate = ($hora != 8) ? $keyHoras - 1 : 1;
                        }
                        return $horaFromDate;
                    }
                }
            }
        }
    }
}
