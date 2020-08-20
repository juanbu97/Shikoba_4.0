<?php
/**
 * @User: Guillermo Boquizo Sánchez (GUBS), Rafael García Zurita (RAGZ).
 * @File: AccionEstadoSanciones.php
 * @Updated: 2019
 * @Description: Entidad para la acción y el estado de las sanciones.
 * @license http://opensource.org/licenses/gpl-license.php  GNU Public License
 */

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Class AccionEstadoSancion.
 * @ORM\Table(name="accion_estado_sancion")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\AccionEstadoSancionRepository")
 */
class AccionEstadoSancion
{
    /**
     * Id principal de la tabla.
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * Estado.
     * @var string
     *
     * @ORM\ManyToOne(targetEntity="EstadosSancion")
     * @ORM\JoinColumn(name="estado", referencedColumnName="id")
     */
    private $estado;

    /**
     * Acción.
     * @var string
     *
     * @ORM\Column(name="accion", type="string", length=255)
     */
    private $accion;

    /**
     * Permite obtener el id.
     * @return int id el id
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Establece el estado.
     * @param string $estado el estado
     * @return AccionEstadoSancion
     */
    public function setEstado($estado)
    {
        $this->estado = $estado;

        return $this;
    }

    /**
     * Obtiene el estado.
     * @return string estado el estado
     */
    public function getEstado()
    {
        return $this->estado;
    }

    /**
     * Establece la acción.
     * @param string $accion la acción
     * @return AccionEstadoSancion
     */
    public function setAccion($accion)
    {
        $this->accion = $accion;

        return $this;
    }

    /**
     * Obtiene la acción.
     * @return string accion la acción
     */
    public function getAccion()
    {
        return $this->accion;
    }

    /**
     * Devuelve un string.
     * @return string accion la acción
     */
    public function __toString()
    {
        return $this->accion;
    }
}
