<?php
/**
 * @User: Guillermo Boquizo Sánchez (GUBS), Rafael García Zurita (RAGZ).
 * @File: partesHelper.php
 * @Updated: 2019
 * @Description: Servicio para la gestión de los partes.
 * @license http://opensource.org/licenses/gpl-license.php  GNU Public License
 */

namespace AppBundle\Services;

use AppBundle\Controller\PartesController;
use AppBundle\Entity\DiarioAulaConvivencia;
use AppBundle\Entity\EstadosParte;
use AppBundle\Entity\Partes;
use AppBundle\Entity\Sanciones;
use AppBundle\Entity\Usuarios;
use AppBundle\Repository\EstadosParteRepository;
use AppBundle\Repository\EstadosSancionRepository;
use AppBundle\Repository\PartesRepository;
use AppBundle\Repository\ProfesoresRepository;
use AppBundle\Repository\TipoSancionRepository;
use Doctrine\ORM\EntityManager;
use Symfony\Component\HttpFoundation\Request;
use Exception;

//use AppBundle\Repository\CursosRepository;
//use Symfony\Component\Validator\Constraints\DateTime;

/**
 * Class PartesHelper
 */
class PartesHelper
{
    const VALUE_INICIADO = 'Iniciado';
    const VALUE_COMUNICADO = 'Comunicado';
    const ESTADO_INICIADO = 1;

    /**
     * PartesHelper constructor.
     * @param EntityManager $em
     * @param $sancionHelper
     */
    public function __construct(EntityManager $em, CrearSancionHelper $sancionHelper)
    {
        $this->em = $em;
        /* @var PartesRepository repositoryPartes */
        $this->repositoryPartes = $this->em->getRepository('AppBundle:Partes');
        /* @var EstadosParteRepository repositoryEstadoPartes */
        $this->repositoryEstadoPartes = $this->em->getRepository('AppBundle:EstadosParte');
        /* @var EstadosSancionRepository repositoryEstadoSanciones */
        $this->repositoryEstadoSanciones = $this->em->getRepository('AppBundle:EstadosSancion');
        /* @var TipoSancionRepository repositoryTipoSancion */
        $this->repositoryTipoSancion = $this->em->getRepository('AppBundle:TipoSancion');
        $this->sancionHelper = $sancionHelper;
    }

    /**
     * Función que devuelve un parte dependiendo del request.
     * @param Request $request
     * @return Partes $parte
     */
    public function getParteFromRequest(Request $request)
    {
        if ($request->query->has('idParte')) {
            $parte = $this->repositoryPartes->getParteById($request->get('idParte'));
        } else {
            $parte = new Partes();
            $estadoIniciado = $this->repositoryEstadoPartes->findOneByEstado(PartesController::ESTADO_INICIADO);
            $parte->setIdEstado($estadoIniciado);
        }
        return $parte;
    }

    /**
     * Función que devuelve true si puede recuperar 1 punto, false en caso contrario.
     * @param Partes $parte
     * @return bool
     */
    public function parteRecupera(Partes $parte)
    {
        if (0 == $parte->getRecupera()) {
            return true;
        }
        return false;
    }

    /**
     * Función que recupera 1 punto si el usuario a pulsado el boton recupera punto.
     * @param Request $request
     * @throws Exception
     * @return bool
     */
    public function recuperarPuntos(Request $request)
    {
        if (null != $request->get('recuperaPunto') && null != $request->get('idParte')) {
            /* @var Partes $parte */
            $parte = $this->repositoryPartes->getParteById($request->get('idParte'));
            if (1 != $parte->getRecupera()) {
                $parte->setRecupera(1);
                $this->em->persist($parte);
                $this->em->flush();
                return true;
            }
        }
        return false;
    }

    /**
     * Función que cambia el estado del parte en función del request.
     * @param Request $request
     * @throws Exception
     * @param Partes $parte
     * @return bool
     */
    public function changeEstado(Request $request, Partes $parte)
    {
        if (null != $request->get('estadoParte')) {
            $allEstados = $this->repositoryEstadoPartes->findAll();
            /** @var EstadosParte $valueEstado */
            foreach ($allEstados as $key => $valueEstado) {
                if ($valueEstado->getId() == $parte->getIdEstado()->getId()) {
                    $fecha = new \DateTime();
                    if (self::VALUE_INICIADO == $valueEstado->getEstado()) {
                        $parte->setFechaComunicacion($fecha->format('d/m/Y'));
                    } elseif (self::VALUE_COMUNICADO == $valueEstado->getEstado()) {
                        $parte->setFechaConfirmacion($fecha->format('d/m/Y'));
                    }
                    if ($key < count($allEstados) - 1) {
                        $nextEstado = $this->repositoryEstadoPartes->findOneById($valueEstado->getId() + 1);
                        $parte->setIdEstado($nextEstado);
                        $this->em->persist($parte);
                        $this->em->flush();
                        return true;
                    }
                }
            }
        }
        return false;
    }

    /**
     * Función que crea una sancion y un diario aula dependiendo de la hora actual y del request del parte.
     * @param Request $request
     * @throws Exception
     * @param Partes $parte
     */
    public function createSancionFromRequest(Request $request, Partes $parte)
    {
        if (null != $request->get('expulsion')) {
            $sancion = new Sanciones();
//            $sancion->setIdParte([$parte]);
            $sancion->addIdParte($parte);
            $sancion->setIdAlumno($parte->getIdAlumno());
            $sancion->setFecha(new \DateTime());
            $estado = $this->repositoryEstadoSanciones->findOneByEstado(CrearSancionHelper::ESTADO_INICIADO);
            $sancion->setIdEstado($estado);
            $tipo = $this->repositoryTipoSancion->findOneById(CrearSancionHelper::SANCION_TYPE_HORAS);
            $sancion->setIdTipo($tipo);
            $sancion->setFechaInicio(new \DateTime());
            $sancion->setFechaFinal(new \DateTime());
            $sancion->setSancion('Expulsión Aula Convivencia');
            $this->em->persist($sancion);
            $this->em->flush();
            $diarioAula = new DiarioAulaConvivencia();
            $diarioAula->setFecha($sancion->getFecha());
            $diarioAula->setHora($this->sancionHelper->getHoraFromDate($sancion->getFecha()));
            $diarioAula->setIdSancion($sancion);
            $this->em->persist($diarioAula);
            $this->em->flush();
        }
    }

    /**
     * Función que devuelve un profesor por usuario.
     * @param Usuarios $usuario
     * @return mixed
     */
    public function getProfesorByUser(Usuarios $usuario)
    {
        /* @var ProfesoresRepository $repositoryProfesor */
        $repositoryProfesor = $this->em->getRepository('AppBundle:Profesores');
        return [$repositoryProfesor->findOneByIdUsuario($usuario)];
    }

    /**
     * Función que devuelve todos los profesores.
     * @return array
     */
    public function getAllProfesores()
    {
        /* @var ProfesoresRepository $repositoryProfesor */
        $repositoryProfesor = $this->em->getRepository('AppBundle:Profesores');
        return $repositoryProfesor->findAll();
    }
}
