<?php
/**
 * @User: Guillermo Boquizo Sánchez (GUBS), Rafael García Zurita (RAGZ).
 * @File: TipoParte.php
 * @Updated: 2019
 * @Description: Entidad para los tipos de parte.
 *
 * @license http://opensource.org/licenses/gpl-license.php  GNU Public License
 */
namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Class TipoParte.
 *
 * @ORM\Table(name="tipo_parte")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\TipoParteRepository")
 */
class TipoParte
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
     * @return TipoParte
     */
    public function setTipo($tipo)
    {
        $this->tipo = $tipo;

        return $this;
    }

    /**
     * Permite obtener el tipo.
     *
     * @return string
     */
    public function getTipo()
    {
        return $this->tipo;
    }
}
