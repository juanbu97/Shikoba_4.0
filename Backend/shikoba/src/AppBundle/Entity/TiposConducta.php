<?php
/**
 * @User: Guillermo Boquizo Sánchez (GUBS), Rafael García Zurita (RAGZ).
 * @File: TiposConducta.php
 * @Updated: 2019
 * @Description: Entidad para los tipos de conducta.
 *
 * @license http://opensource.org/licenses/gpl-license.php  GNU Public License
 */

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Class TiposConducta.
 *
 * @ORM\Table(name="tipos_conducta")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\TiposConductaRepository")
 */
class TiposConducta
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
     * Tipo.
     * @var string
     *
     * @ORM\Column(name="tipo", type="string", length=255)
     */
    private $tipo;

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
     * Establece el tipo.
     *
     * @param string $tipo
     *
     * @return TiposConducta
     */
    public function setTipo($tipo)
    {
        $this->tipo = $tipo;

        return $this;
    }

    /**
     * Obtiene el tipo.
     *
     * @return string
     */
    public function getTipo()
    {
        return $this->tipo;
    }
}
