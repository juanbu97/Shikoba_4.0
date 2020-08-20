<?php
/**
 * @User: Guillermo Boquizo Sánchez (GUBS), Rafael García Zurita (RAGZ).
 * @File: Config.php
 * @Updated: 2019
 * @Description: Entidad para la config.
 * @license http://opensource.org/licenses/gpl-license.php  GNU Public License
 */

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Class Config.
 * @ORM\Table(name="config")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\ConfigRepository")
 */
class Config
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
     * Días de validez.
     * @var int
     *
     * @ORM\Column(name="dias_validez", type="integer")
     */
    private $diasValidez;

    /**
     * Permite obtener el id.
     * @return int id
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Establece los diasValidez.
     * @param string $diasValidez los días de validez
     * @return Config
     */
    public function setDiasValidez($diasValidez)
    {
        $this->diasValidez = $diasValidez;

        return $this;
    }

    /**
     * Permite obtener los diasValidez.
     * @return string diasValidez
     */
    public function getDiasValidez()
    {
        return $this->diasValidez;
    }
}
