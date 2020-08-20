<?php
/**
 * @User: Guillermo Boquizo Sánchez (GUBS), Rafael García Zurita (RAGZ).
 * @File: Conductas.php
 * @Updated: 2019
 * @Description: Entidad para las conductas.
 * @license http://opensource.org/licenses/gpl-license.php  GNU Public License
 */

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;

/**
 * Class Conductas.
 * @ORM\Table(name="conductas")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\ConductasRepository")
 */
class Conductas
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
     * Conducta.
     * @var string
     *
     * @ORM\Column(name="conducta", type="string", length=255)
     */
    private $conducta;

    /**
     * Puntos.
     * @var int
     *
     * @ORM\Column(name="puntos", type="integer")
     */
    private $puntos;

    /**
     * Tipo.
     * @var string
     *
     * @ORM\Column(name="tipo", type="string", length=255)
     */
    private $tipo;

//    /**
//     * @ORM\OneToMany(targetEntity="rPartesConductas", mappedBy="idConducta")
//     */
//    private $parteConducta;

    /**
     * IdParte.
     * @ORM\ManyToMany(targetEntity="Partes", mappedBy="idConducta")
     */
    private $idParte;

    /**
     * Permite obtener el id.
     *
     * @return int id
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Permite estblecer la conducta.
     *
     * @param string $conducta la conducta
     *
     * @return Conductas
     */
    public function setConducta($conducta)
    {
        $this->conducta = $conducta;

        return $this;
    }

    /**
     * Permite obtener la conducta.
     * @return string conducta
     */
    public function getConducta()
    {
        return $this->conducta;
    }

    /**
     * Función que devuelve el nombre y los puntos.
     * @return string Una cadena que contiene los puntos y el nombre de la conducta
     */
    public function getNombreAndPuntos()
    {
        return '('.abs($this->getPuntos()).') - '.$this->getConducta();
    }

    /**
     * Permite establecer los puntos.
     * @param int $puntos los puntos
     * @return Conductas
     */
    public function setPuntos($puntos)
    {
        $this->puntos = $puntos;

        return $this;
    }

    /**
     * Permite obtener los puntos.
     * @return int puntos
     */
    public function getPuntos()
    {
        return $this->puntos;
    }

    /**
     *
     * Permite establecer el tipo.
     *
     * @param string $tipo el tipo
     *
     * @return Conductas
     */
    public function setTipo($tipo)
    {
        $this->tipo = $tipo;

        return $this;
    }

    /**
     * Permite obtener el tipo.
     *
     * @return string tipo
     */
    public function getTipo()
    {
        return $this->tipo;
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
//        return $this;
//    }

    /**
     * Constructor.
     */
    public function __construct()
    {
        $this->idParte = new ArrayCollection();
    }

    /**
     *
     * Añade un idParte.
     *
     * @param Partes $idParte el idParte
     *
     * @return Conductas
     */
    public function addIdParte(Partes $idParte)
    {
        $this->idParte[] = $idParte;

        return $this;
    }

    /**
     * Elimina un idParte.
     *
     * @param Partes $idParte el idParte
     */
    public function removeIdParte(Partes $idParte)
    {
        $this->idParte->removeElement($idParte);
    }

    /**
     * Permite obtener el idParte.
     *
     * @return Collection
     */
    public function getIdParte()
    {
        return $this->idParte;
    }
}
