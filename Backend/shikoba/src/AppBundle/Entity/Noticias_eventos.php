<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Noticias_enventos
 *
 * @ORM\Table(name="noticias_eventos")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\Noticias_eventosRepository")
 */
class Noticias_eventos
{

    /**
     * @var int
     *
     * @ORM\Column(type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var int
     *
     * @ORM\Column(name="idEvento", type="integer")
     */
    private $idEvento;

    /**
     * @var int
     *
     * @ORM\Column(name="idNoticia", type="integer")
     */
    private $idNoticia;


    /**
     * Get id
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set idEventos
     *
     * @param integer $idEventos
     *
     * @return Noticias_eventos
     */
    public function setIdEvento($idEvento)
    {
        $this->idEvento = $idEvento;

        return $this;
    }

    /**
     * Get idEventos
     *
     * @return integer
     */
    public function getIdEvento()
    {
        return $this->idEvento;
    }

    /**
     * Set idNoticias
     *
     * @param integer $idNoticias
     *
     * @return Noticias_eventos
     */
    public function setIdNoticia($idNoticia)
    {
        $this->idNoticia = $idNoticia;

        return $this;
    }

    /**
     * Get idNoticias
     *
     * @return integer
     */
    public function getIdNoticia()
    {
        return $this->idNoticia;
    }
}
