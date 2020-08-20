<?php
/**
 * @User: Guillermo Boquizo Sánchez (GUBS), Rafael García Zurita (RAGZ).
 * @File: EstadosSancion.php
 * @Updated: 2019
 * @Description: Entidad para los estados de las sanciones.
 * @license http://opensource.org/licenses/gpl-license.php  GNU Public License
 */

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Class EstadosSancion.
 *
 * @ORM\Table(name="estados_sancion")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\EstadosSancionRepository")
 */
class EstadosSancion
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
     * Estado.
     * @var string
     *
     * @ORM\Column(name="estado", type="string", length=255)
     */
    private $estado;


    /**
     * Permite obtener el id.
     *
     * @return int id el id
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Permite establecer el estado.
     *
     * @param string $estado el estado
     *
     * @return EstadosSancion
     */
    public function setEstado($estado)
    {
        $this->estado = $estado;

        return $this;
    }

    /**
     * Permite obtener el estado.
     *
     * @return string
     */
    public function getEstado()
    {
        return $this->estado;
    }
}
