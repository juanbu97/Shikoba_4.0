<?php
/**
 * @User: Guillermo Boquizo Sánchez (GUBS), Rafael García Zurita (RAGZ).
 * @File: DiarioAulaConvivencia.php
 * @Updated: 2019
 * @Description: Entidad para el diario del aula de convivencia.
 *
 * @license http://opensource.org/licenses/gpl-license.php  GNU Public License
 */

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use DateTime;

/**
 * Class DiarioAulaConvivencia.
 *
 * @ORM\Table(name="diario_aula_convivencia")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\DiarioAulaConvivenciaRepository")
 */
class DiarioAulaConvivencia
{
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
     * Hora.
     * @var int
     *
     * @ORM\Column(name="hora", type="integer")
     */
    private $hora;

    /**
     * Observaciones.
     * @var string
     *
     * @ORM\Column(name="observaciones", type="string", length=255, nullable=true)
     */
    private $observaciones;

    /**
     * Actitud.
     * @var string
     *
     * @ORM\Column(name="actitud", type="string", length=255, columnDefinition="enum('A', 'B', 'C')", nullable=true)
     */
    private $actitud;

    /**
     * Trabajo.
     * @var string
     *
     * @ORM\Column(name="trabajo", type="string", length=255, columnDefinition="enum('A', 'B', 'C')", nullable=true)
     */
    private $trabajo;

    /**
     * Id del profesor del aula.
     * @var int
     *
     * @ORM\ManyToOne(targetEntity="Profesores")
     * @ORM\JoinColumn(name="idProfesor", referencedColumnName="id", onDelete="cascade")
     */
    private $idProfesor;

    /**
     * Id de la sanción.
     * @var int
     *
     * @ORM\ManyToOne(targetEntity="Sanciones")
     * @ORM\JoinColumn(name="idSancion", referencedColumnName="id", onDelete="cascade")
     */
    private $idSancion;

    /**
     * Asistencia.
     * @var int
     *
     * @ORM\Column(name="asiste", type="integer")
     */
    private $asiste;

    /**
     * Recuperación de puntos.
     * @var int
     * @ORM\Column(name="recupera", type="integer")
     */
    private $recupera;

    /**
     * DiarioAulaConvivencia constructor.
     */
    public function __construct()
    {
        $this->asiste = 0;
        $this->recupera = 0;
    }

    /**
     * Obtiene el id.
     *
     * @return int id
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Establece la fecha.
     *
     * @param DateTime $fecha la fecha
     *
     * @return DiarioAulaConvivencia
     */
    public function setFecha($fecha)
    {
        $this->fecha = $fecha;

        return $this;
    }

    /**
     * Obtiene la fecha.
     *
     * @return DateTime
     */
    public function getFecha()
    {
        return $this->fecha;
    }

    /**
     * Establece la hora.
     *
     * @param int $hora la hora
     *
     * @return DiarioAulaConvivencia
     */
    public function setHora($hora)
    {
        $this->hora = $hora;

        return $this;
    }

    /**
     * Obtiene la hora.
     *
     * @return int hora
     */
    public function getHora()
    {
        return $this->hora;
    }

    /**
     * Establece las observaciones.
     *
     * @param string $observaciones
     *
     * @return DiarioAulaConvivencia
     */
    public function setObservaciones($observaciones)
    {
        $this->observaciones = $observaciones;

        return $this;
    }

    /**
     * Obtiene las observaciones.
     *
     * @return string
     */
    public function getObservaciones()
    {
        return $this->observaciones;
    }

    /**
     * Establece la actitud.
     *
     * @param string $actitud
     *
     * @return DiarioAulaConvivencia
     */
    public function setActitud($actitud)
    {
        $this->actitud = $actitud;

        return $this;
    }

    /**
     * Obtiene la actitud.
     *
     * @return string
     */
    public function getActitud()
    {
        return $this->actitud;
    }

    /**
     * Establece el trabajo.
     *
     * @param string $trabajo
     *
     * @return DiarioAulaConvivencia
     */
    public function setTrabajo($trabajo)
    {
        $this->trabajo = $trabajo;

        return $this;
    }

    /**
     * Obtiene el trabajo.
     *
     * @return string
     */
    public function getTrabajo()
    {
        return $this->trabajo;
    }

    /**
     * Establece el idProfesor.
     *
     * @param int $idProfesor
     *
     * @return DiarioAulaConvivencia
     */
    public function setIdProfesor($idProfesor)
    {
        $this->idProfesor = $idProfesor;

        return $this;
    }

    /**
     * Obtiene el idProfesor.
     *
     * @return int idProfesor
     */
    public function getIdProfesor()
    {
        return $this->idProfesor;
    }

    /**
     * Establece el idSancion.
     *
     * @param Sanciones $idSancion el idSancion
     *
     * @return DiarioAulaConvivencia
     */
    public function setIdSancion(Sanciones $idSancion = null)
    {
        $this->idSancion = $idSancion;

        return $this;
    }

    /**
     * Obtiene el idSancion.
     *
     * @return int
     */
    public function getIdSancion()
    {
        return $this->idSancion;
    }

    /**
     * Establece si asiste.
     *
     * @param int $asiste
     *
     * @return DiarioAulaConvivencia
     */
    public function setAsiste($asiste)
    {
        $this->asiste = $asiste;

        return $this;
    }

    /**
     * Obtiene si asiste.
     *
     * @return int
     */
    public function getAsiste()
    {
        return $this->asiste;
    }

    /**
     * Establece si recupera puntos.
     *
     * @param int $recupera
     *
     * @return DiarioAulaConvivencia
     */
    public function setRecupera($recupera)
    {
        $this->recupera = $recupera;

        return $this;
    }

    /**
     * Obtiene si recupera puntos.
     *
     * @return int
     */
    public function getRecupera()
    {
        return $this->recupera;
    }
}
