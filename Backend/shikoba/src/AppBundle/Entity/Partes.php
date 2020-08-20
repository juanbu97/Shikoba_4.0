<?php
/**
 * @User: Guillermo Boquizo Sánchez (GUBS), Rafael García Zurita (RAGZ).
 * @File: Partes.php
 * @Updated: 2019
 * @Description: Entidad para los partes.
 *
 * @license http://opensource.org/licenses/gpl-license.php  GNU Public License
 */

namespace AppBundle\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;
use Exception;
use DateTime;
use Doctrine\Common\Collections\Collection;

/**
 * Class Partes.
 *
 * @ORM\Table(name="partes")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\PartesRepository")
 */
class Partes
{
    /**
     * El id principal.
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
     * Descripción.
     * @var string
     *
     * @ORM\Column(name="descripcion", type="string", length=1000)
     */
    private $descripcion;

    /**
     * Tareas.
     * @var string
     *
     * @ORM\Column(name="tareas", type="string", length=600, nullable=true)
     */
    private $tareas = '';

    /**
     * Hora de salida del aula.
     * @var DateTime
     *
     * @ORM\Column(name="horaSalidaAula", type="time")
     */
    private $horaSalidaAula;

    /**
     * Hora de llegada a jefatura.
     * @var DateTime
     *
     * @ORM\Column(name="horaLlegadaJefatura", type="time")
     */
    private $horaLlegadaJefatura;

    /**
     * Formato.
     * @var string
     *
     * @ORM\Column(name="formato", type="string", length=255, columnDefinition="enum('Papel', 'Digital')")
     */
    private $formato;

    /**
     * Observaciones.
     * @var string
     *
     * @ORM\Column(name="observacion", type="string", length=255)
     */
    private $observacion;

    /**
     * Puntos.
     * @var int
     *
     * @Assert\Range(
     *      min = 0,
     *      max = 12,
     *      minMessage = "Tiene que ser un mínimo de {{ limit }} puntos",
     *      maxMessage = "Como máximo pueden ser {{ limit }} puntos"
     * )
     *
     * @ORM\Column(name="puntos", type="integer")
     */
    private $puntos = 0;

    /**
     * idEstado.
     * @var int
     *
     * @ORM\ManyToOne(targetEntity="EstadosParte")
     * @ORM\JoinColumn(name="idEstado", referencedColumnName="id")
     */
    private $idEstado;

    /**
     * idTipo.
     * @var string
     *
     * @ORM\ManyToOne(targetEntity="TipoParte")
     * @ORM\JoinColumn(name="idTipo", referencedColumnName="id")
     */
    private $idTipo;

    /**
     * idAlumno.
     * @var int
     *
     * @ORM\ManyToOne(targetEntity="Alumno")
     * @ORM\JoinColumn(name="idAlumno", referencedColumnName="id", onDelete="cascade")
     */
    private $idAlumno;

    /**
     * idProfesor.
     * @var int
     *
     * @ORM\ManyToOne(targetEntity="Profesores")
     * @ORM\JoinColumn(name="idProfesor", referencedColumnName="id", onDelete="cascade")
     */
    private $idProfesor;

    /**
     * idConducta.
     * @ORM\ManyToMany(targetEntity="Conductas", inversedBy="idParte")
     * @ORM\JoinTable(name="partes_conductas")
     */
    private $idConducta;

    /**
     * Recupera.
     * @var int
     * @ORM\Column(name="recupera", type="integer")
     */
    private $recupera;

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
     * Sanción.
     * @var int
     *
     * @ORM\ManyToMany(targetEntity="Sanciones", mappedBy="idParte")
     */
    private $sancion;

  
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
     * @return Partes
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
     * Establece la descripcion.
     *
     * @param string $descripcion
     *
     * @return Partes
     */
    public function setDescripcion($descripcion)
    {
        $this->descripcion = $descripcion;

        return $this;
    }

    /**
     * Permite obtener la descripcion.
     *
     * @return string
     */
    public function getDescripcion()
    {
        return $this->descripcion;
    }

    /**
     * Establece las tareas.
     *
     * @param string $tareas
     *
     * @return Partes
     */
    public function setTareas($tareas)
    {
        $this->tareas = $tareas;

        return $this;
    }

    /**
     * Permite obtener las tareas.
     *
     * @return string
     */
    public function getTareas()
    {
        return $this->tareas;
    }

    /**
     * Establece la horaSalidaAula.
     *
     * @param DateTime $horaSalidaAula
     *
     * @return Partes
     */
    public function setHoraSalidaAula($horaSalidaAula)
    {
        $this->horaSalidaAula = $horaSalidaAula;

        return $this;
    }

    /**
     * Permite obtener la horaSalidaAula.
     *
     * @return DateTime
     */
    public function getHoraSalidaAula()
    {
        return $this->horaSalidaAula;
    }

    /**
     * Establece la horaLlegadaJefatura.
     *
     * @param DateTime $horaLlegadaJefatura
     *
     * @return Partes
     */
    public function setHoraLlegadaJefatura($horaLlegadaJefatura)
    {
        $this->horaLlegadaJefatura = $horaLlegadaJefatura;

        return $this;
    }

    /**
     * Permite obtener la horaLlegadaJefatura.
     *
     * @return DateTime
     */
    public function getHoraLlegadaJefatura()
    {
        return $this->horaLlegadaJefatura;
    }

    /**
     * Establece el formato.
     *
     * @param string $formato
     *
     * @return Partes
     */
    public function setFormato($formato)
    {
        $this->formato = $formato;

        return $this;
    }

    /**
     * Permite obtener el formato.
     *
     * @return string
     */
    public function getFormato()
    {
        return $this->formato;
    }

    /**
     * Establece la observacion.
     *
     * @param string $observacion
     *
     * @return Partes
     */
    public function setObservacion($observacion)
    {
        $this->observacion = $observacion;

        return $this;
    }

    /**
     * Permite obtener la observacion.
     *
     * @return string
     */
    public function getObservacion()
    {
        return $this->observacion;
    }

    /**
     * Establece los puntos.
     *
     * @param int $puntos
     *
     * @return Partes
     */
    public function setPuntos($puntos)
    {
        $this->puntos = $puntos;

        return $this;
    }

    /**
     * Permite obtener los puntos.
     *
     * @return int
     */
    public function getPuntos()
    {
        return $this->puntos;
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
     * @return Partes
     */
    public function setIdEstado($idEstado)
    {
        $this->idEstado = $idEstado;
        return $this;
    }

    /**
     * Permite obtener el idTipo.
     * @return string
     */
    public function getIdTipo()
    {
        return $this->idTipo;
    }

    /**
     * Establece el idTipo.
     * @param string $idTipo
     */
    public function setIdTipo($idTipo)
    {
        $this->idTipo = $idTipo;
    }

    /**
     * Establece el idAlumno.
     *
     * @param int $idAlumno
     *
     * @return Partes
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
     * Establece el idProfesor.
     *
     * @param int $idProfesor
     *
     * @return Partes
     */
    public function setIdProfesor($idProfesor)
    {
        $this->idProfesor = $idProfesor;

        return $this;
    }

    /**
     * Permite obtener el idProfesor.
     *
     * @return int
     */
    public function getIdProfesor()
    {
        return $this->idProfesor;
    }
//    /**
//     * @return mixed
//     */
//    public function getParteConducta()
//    {
//        return $this->parteConducta;
//    }
//
//    /**
//     * @param mixed $parteConducta
//     */
//    public function setParteConducta($parteConducta)
//    {
//        $this->parteConducta = $parteConducta;
//
//        return $this;
//    }

    /**
     * Partes constructor.
     * @throws Exception
     */
    public function __construct()
    {
        $this->fecha = new DateTime();
        $this->fechaComunicacion = null;
        $this->fechaConfirmacion = null;
        $this->horaSalidaAula = new DateTime();
        $this->horaLlegadaJefatura = new DateTime();
        $this->idConducta = new ArrayCollection();
        $this->recupera = 0;
    }

    /**
     * Añade el idConductum.
     *
     * @param Conductas $idConductum
     *
     * @return Partes
     */
    public function addIdConductum(Conductas $idConductum)
    {
        $this->idConducta[] = $idConductum;

        return $this;
    }

    /**
     * Borra el idConductum.
     *
     * @param Conductas $idConductum
     */
    public function removeIdConductum(Conductas $idConductum)
    {
        $this->idConducta->removeElement($idConductum);
    }

    /**
     * Permite obtener el idConducta.
     *
     * @return Collection
     */
    public function getIdConducta()
    {
        return $this->idConducta;
    }

    /**
     * Establece si recupera puntos.
     *
     * @param int $recupera
     *
     * @return Partes
     */
    public function setRecupera($recupera)
    {
        $this->recupera = $recupera;

        return $this;
    }

    /**
     * Permite obtener si recupera puntos.
     *
     * @return int
     */
    public function getRecupera()
    {
        return $this->recupera;
    }

    /**
     * Establece la fecha de confirmación.
     *
     *
     * @param string $fechaConfirmacion
     *
     * @return Partes
     */
    public function setFechaConfirmacion($fechaConfirmacion)
    {
        $this->fechaConfirmacion = $fechaConfirmacion;

        return $this;
    }

    /**
     * Permite obtener la fecha de confirmación.
     *
     * @return string
     */
    public function getFechaConfirmacion()
    {
        return $this->fechaConfirmacion;
    }

    /**
     * Establece la fecha de comunicación.
     *
     * @param string $fechaComunicacion
     *
     * @return Partes
     */
    public function setFechaComunicacion($fechaComunicacion)
    {
        $this->fechaComunicacion = $fechaComunicacion;

        return $this;
    }

    /**
     * Permite obtener la fecha de comunicación.
     *
     * @return string
     */
    public function getFechaComunicacion()
    {
        return $this->fechaComunicacion;
    }

    /**
     * Añade la sancion.
     *
     * @param Sanciones $sancion
     *
     * @return Partes
     */
    public function addSancion(Sanciones $sancion)
    {
        $this->sancion[] = $sancion;

        return $this;
    }

    /**
     * Borra la sancion.
     * @param Sanciones $sancion
     */
    public function removeSancion(Sanciones $sancion)
    {
        // anotaci�n quitada de arriba por un error el 7 de septiembre de 2019 @paramSanciones $sancion 
        $this->sancion->removeElement($sancion);
    }

    /**
     * Permite obtener la sancion.
     *
     * @return int
     */
    public function getSancion()
    {
        return $this->sancion;
    }
}
