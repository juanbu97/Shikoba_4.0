<?php
/**
 * @User: Guillermo Boquizo Sánchez (GUBS), Rafael García Zurita (RAGZ).
 * @File: Sanciones.php
 * @Updated: 2019
 * @Description: Entidad para las sanciones.
 *
 * @license http://opensource.org/licenses/gpl-license.php  GNU Public License
 */

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Exception;
use DateTime;

/**
 * Class Sanciones.
 *
 * @ORM\Table(name="sanciones")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\SancionesRepository")
 */
class Sanciones
{
    /**
     * Sanciones constructor.
     * @throws Exception
     */
    public function __construct()
    {
        $this->fecha = new DateTime();
        $this->fechaFinal = new DateTime();
        $this->fechaInicio = new DateTime();
        $this->fechaComunicacion = null;
        $this->fechaConfirmacion = null;
    }

    /**
     * Id principal de la clase.
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * Fecha.
     * @var DateTime
     *
     * @ORM\Column(name="fecha", type="datetime")
     */
    private $fecha;

    /**
     * Fecha de inicio.
     * @var DateTime
     *
     * @ORM\Column(name="fechaInicio", type="datetime")
     */
    private $fechaInicio;

    /**
     * Fecha final.
     * @var DateTime
     *
     * @ORM\Column(name="fechaFinal", type="datetime")
     */
    private $fechaFinal;

    /**
     * Sanción.
     * @var string
     *
     * @ORM\Column(name="sancion", type="string", length=255)
     */
    private $sancion;

    /**
     * Observaciones.
     * @var string
     *
     * @ORM\Column(name="observaciones", type="string", length=255, nullable=true)
     */
    private $observaciones;

    /**
     * Evaluación.
     * @var string
     *
     * @ORM\Column(name="evaluacion", type="string", length=255, nullable=true)
     */
    private $evaluacion;

    /**
     * Puntos recuperados.
     * @var int
     *
     * @ORM\Column(name="puntosRecuperados", type="integer", nullable=true)
     */
    private $puntosRecuperados = 0;

    /**
     * Fecha de confirmación.
     * @var string
     *
     * @ORM\Column(name="fechaConfirmacion", type="string", nullable=true)
     */
    private $fechaConfirmacion;

    /**
     * Fecha de comunicación.
     * @var string
     *
     * @ORM\Column(name="fechaComunicacion", type="string", nullable=true)
     */
    private $fechaComunicacion;

    /**
     * idTipo.
     * @var int
     *
     * @ORM\ManyToOne(targetEntity="TipoSancion")
     * @ORM\JoinColumn(name="idTipo", referencedColumnName="id")
     */
    private $idTipo;

    /**
     * idEstado.
     * @var int
     *
     * @ORM\ManyToOne(targetEntity="EstadosSancion")
     * @ORM\JoinColumn(name="idEstado", referencedColumnName="id")
     */
    private $idEstado;

    /**
     * idAlumno.
     * @var int
     *
     * @ORM\ManyToOne(targetEntity="Alumno")
     * @ORM\JoinColumn(name="idAlumno", referencedColumnName="id", onDelete="cascade")
     */
    private $idAlumno;

    /**
     * idParte.
     * @var int
     *
     * @ORM\ManyToMany(targetEntity="Partes", inversedBy="sancion", cascade={"remove", "persist"})
     * @ORM\JoinColumn(name="idParte", referencedColumnName="id", onDelete="cascade")
     */
    private $idParte;

    /**
     * Permite obtener el id.
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Establece la fecha.
     *
     * @param DateTime $fecha
     *
     * @return Sanciones
     */
    public function setFecha($fecha)
    {
        $this->fecha = $fecha;

        return $this;
    }

    /**
     * Permite obtener la fecha.
     *
     * @return DateTime
     */
    public function getFecha()
    {
        return $this->fecha;
    }

    /**
     * Establece la fechaInicio.
     *
     * @param DateTime $fechaInicio
     *
     * @return Sanciones
     */
    public function setFechaInicio($fechaInicio)
    {
        $this->fechaInicio = $fechaInicio;

        return $this;
    }

    /**
     * Permite obtener la fechaInicio.
     *
     * @return DateTime
     */
    public function getFechaInicio()
    {
        return $this->fechaInicio;
    }

    /**
     * Establece la fechaFinal.
     *
     * @param DateTime $fechaFinal
     *
     * @return Sanciones
     */
    public function setFechaFinal($fechaFinal)
    {
        $this->fechaFinal = $fechaFinal;

        return $this;
    }

    /**
     * Permite obtener la fechaFinal.
     *
     * @return DateTime
     */
    public function getFechaFinal()
    {
        return $this->fechaFinal;
    }

    /**
     * Establece la sanción.
     *
     * @param string $sancion
     *
     * @return Sanciones
     */
    public function setSancion($sancion)
    {
        $this->sancion = $sancion;

        return $this;
    }

    /**
     * Permite obtener la sanción.
     *
     * @return string
     */
    public function getSancion()
    {
        return $this->sancion;
    }

    /**
     * Establece las observaciones.
     *
     * @param string $observaciones
     *
     * @return Sanciones
     */
    public function setObservaciones($observaciones)
    {
        $this->observaciones = $observaciones;

        return $this;
    }

    /**
     * Permite obtener las observaciones.
     *
     * @return string
     */
    public function getObservaciones()
    {
        return $this->observaciones;
    }

    /**
     * Establece la evaluación.
     *
     * @param string $evaluacion
     *
     * @return Sanciones
     */
    public function setEvaluacion($evaluacion)
    {
        $this->evaluacion = $evaluacion;

        return $this;
    }

    /**
     * Permite obtener la evaluacion.
     *
     * @return string
     */
    public function getEvaluacion()
    {
        return $this->evaluacion;
    }

    /**
     * Establece los puntosRecuperados.
     *
     * @param int $puntosRecuperados
     *
     * @return Sanciones
     */
    public function setPuntosRecuperados($puntosRecuperados)
    {
        $this->puntosRecuperados = $puntosRecuperados;

        return $this;
    }

    /**
     * Permite obtener los puntosRecuperados.
     *
     * @return int
     */
    public function getPuntosRecuperados()
    {
        return $this->puntosRecuperados;
    }

    /**
     * Permite obtener el idTipo.
     * @return int
     */
    public function getIdTipo()
    {
        return $this->idTipo;
    }

    /**
     * Establece el idTipo.
     * @param int $idTipo
     */
    public function setIdTipo($idTipo)
    {
        $this->idTipo = $idTipo;
    }

    /**
     * Permite obtener el idEstado.
     * @return int
     */
    public function getIdEstado()
    {
        return $this->idEstado;
    }

    /**
     * Establece el idEstado.
     * @param int $idEstado
     */
    public function setIdEstado($idEstado)
    {
        $this->idEstado = $idEstado;
    }

    /**
     * Establece el idAlumno.
     *
     * @param int $idAlumno
     *
     * @return Sanciones
     */
    public function setIdAlumno($idAlumno)
    {
        $this->idAlumno = $idAlumno;

        return $this;
    }

    /**
     * Permite obtener el idAlumno.
     *
     * @return int
     */
    public function getIdAlumno()
    {
        return $this->idAlumno;
    }

    /**
     * Permite obtener el idParte.
     * @return int
     */
    public function getIdParte()
    {
        return $this->idParte;
    }

    /**
     * Establece el idParte.
     * @param int $idParte
     * @return Sanciones
     */
    public function setIdParte($idParte)
    {
        $this->idParte = $idParte;
        return $this;
    }

    /**
     * Añade el idParte.
     *
     * @param Partes $idParte
     *
     * @return Sanciones
     */
    public function addIdParte(Partes $idParte)
    {
        $idParte->addSancion($this);
        $this->idParte[] = $idParte;

        return $this;
    }

    /**
     * Borra el idParte.
     *
     * @param Partes $idParte
     */
    public function removeIdParte(Partes $idParte)
    {
        $this->idParte->removeElement($idParte);
    }

    /**
     * Establece la fechaConfirmacion.
     *
     * @param string $fechaConfirmacion
     *
     * @return Sanciones
     */
    public function setFechaConfirmacion($fechaConfirmacion)
    {
        $this->fechaConfirmacion = $fechaConfirmacion;

        return $this;
    }

    /**
     * Permite obtener la fechaConfirmacion.
     *
     * @return string
     */
    public function getFechaConfirmacion()
    {
        return $this->fechaConfirmacion;
    }

    /**
     * Establece la fechaComunicacion.
     *
     * @param string $fechaComunicacion
     *
     * @return Sanciones
     */
    public function setFechaComunicacion($fechaComunicacion)
    {
        $this->fechaComunicacion = $fechaComunicacion;

        return $this;
    }

    /**
     * Permite obtener la fechaComunicacion.
     *
     * @return string
     */
    public function getFechaComunicacion()
    {
        return $this->fechaComunicacion;
    }
}
