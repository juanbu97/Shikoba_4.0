<?php
/**
 * @User: Guillermo Boquizo Sánchez (GUBS), Rafael García Zurita (RAGZ).
 * @File: RecuperaPuntos.php
 * @Updated: 2019
 * @Description: Entidad para la recuperación de puntos.
 *
 * @license http://opensource.org/licenses/gpl-license.php  GNU Public License
 */

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use DateTime;

/**
 * Class RecuperaPuntos.
 *
 * @ORM\Table(name="recupera_puntos")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\RecuperaPuntosRepository")
 */
class RecuperaPuntos
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
     * Descripción.
     * @var string
     *
     * @ORM\Column(name="descripcion", type="string", length=255)
     */
    private $descripcion;

    /**
     * Observaciones.
     * @var string
     *
     * @ORM\Column(name="observaciones", type="string", length=255)
     */
    private $observaciones;

    /**
     * Puntos.
     * @var int
     *
     * @ORM\Column(name="puntos", type="integer")
     */
    private $puntos;

    /**
     * idParte.
     * @var int
     *
     * @ORM\ManyToOne(targetEntity="Partes")
     * @ORM\JoinColumn(name="idParte", referencedColumnName="id")
     */
    private $idParte;

    /**
     * idAlumno.
     * @var int
     *
     * @ORM\ManyToOne(targetEntity="Alumno")
     * @ORM\JoinColumn(name="idAlumno", referencedColumnName="id")
     */
    private $idAlumno;

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
     * @return RecuperaPuntos
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
     * Establece la descripción.
     *
     * @param string $descripcion
     *
     * @return RecuperaPuntos
     */
    public function setDescripcion($descripcion)
    {
        $this->descripcion = $descripcion;

        return $this;
    }

    /**
     * Permite obtener la descripción.
     *
     * @return string
     */
    public function getDescripcion()
    {
        return $this->descripcion;
    }

    /**
     * Establece las observaciones.
     *
     * @param string $observaciones
     *
     * @return RecuperaPuntos
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
     * Establece los puntos.
     * @param int $puntos
     * @return RecuperaPuntos
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
     * Establece el idParte.
     *
     * @param int $idParte
     *
     * @return RecuperaPuntos
     */
    public function setIdParte($idParte)
    {
        $this->idParte = $idParte;

        return $this;
    }

    /**
     * Permite obtener el idParte.
     *
     * @return int
     */
    public function getIdParte()
    {
        return $this->idParte;
    }

    /**
     * Permite obtener el idAlumno.
     * @return int
     */
    public function getIdAlumno()
    {
        return $this->idAlumno;
    }

    /**
     * Establece el idAlumno.
     * @param int $idAlumno
     * @return RecuperaPuntos
     */
    public function setIdAlumno($idAlumno)
    {
        $this->idAlumno = $idAlumno;

        return $this;
    }
}
