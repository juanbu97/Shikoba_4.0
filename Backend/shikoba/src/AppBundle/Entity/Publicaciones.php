<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Publicaciones
 *
 * @ORM\Table(name="publicaciones")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\PublicacionesRepository")
 */
class Publicaciones
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var int
     *
     * @ORM\Column(name="id_noticia", type="integer")
     */
    private $idNoticia;

    /**
     * @var string
     *
     * @ORM\Column(name="destinatarios_sql", type="text")
     */
    private $destinatariosSql;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fecha_inicio", type="datetime")
     */
    private $fechaInicio;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fecha_final", type="datetime")
     */
    private $fechaFinal;

    /**
     * @var int
     *
     * @ORM\Column(name="tipo_publicacion", type="integer")
     */
    private $tipoPublicacion;

    /**
     * @var int
     *
     * @ORM\Column(name="estado", type="integer")
     */
    private $estado;

    /**
     * @var int
     *
     * @ORM\Column(name="prioridad", type="integer")
     */
    private $prioridad;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fecha_creacion", type="datetime")
     */
    private $fechaCreacion;

    /**
     * @var int
     *
     * @ORM\Column(name="id_profesor", type="integer", nullable=true)
     */
    private $idProfesor;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="created_at", type="datetime")
     */
    private $createdAt;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="updated_at", type="datetime")
     */
    private $updatedAt;


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
     * Set idNoticia
     *
     * @param integer $idNoticia
     *
     * @return Publicaciones
     */
    public function setIdNoticia($idNoticia)
    {
        $this->idNoticia = $idNoticia;
    
        return $this;
    }

    /**
     * Get idNoticia
     *
     * @return integer
     */
    public function getIdNoticia()
    {
        return $this->idNoticia;
    }

    /**
     * Set destinatarioSql
     *
     * @param string $destinatariosSql
     *
     * @return Publicaciones
     */
    public function setDestinatariosSql($destinatariosSql)
    {
        $this->destinatariosSql = $destinatariosSql;
    
        return $this;
    }

    /**
     * Get destinatarioSql
     *
     * @return string
     */
    public function getDestinatariosSql()
    {
        return $this->destinatariosSql;
    }

    /**
     * Set fechaInicio
     *
     * @param \DateTime $fechaInicio
     *
     * @return Publicaciones
     */
    public function setFechaInicio($fechaInicio)
    {
        $this->fechaInicio = $fechaInicio;
    
        return $this;
    }

    /**
     * Get fechaInicio
     *
     * @return \DateTime
     */
    public function getFechaInicio()
    {
        return $this->fechaInicio;
    }

    /**
     * Set fechaFinal
     *
     * @param \DateTime $fechaFinal
     *
     * @return Publicaciones
     */
    public function setFechaFinal($fechaFinal)
    {
        $this->fechaFinal = $fechaFinal;
    
        return $this;
    }

    /**
     * Get fechaFinal
     *
     * @return \DateTime
     */
    public function getFechaFinal()
    {
        return $this->fechaFinal;
    }

    /**
     * Set tipoPublicacion
     *
     * @param integer $tipoPublicacion
     *
     * @return Publicaciones
     */
    public function setTipoPublicacion($tipoPublicacion)
    {
        $this->tipoPublicacion = $tipoPublicacion;
    
        return $this;
    }

    /**
     * Get tipoPublicacion
     *
     * @return integer
     */
    public function getTipoPublicacion()
    {
        return $this->tipoPublicacion;
    }

    /**
     * Set estado
     *
     * @param integer $estado
     *
     * @return Publicaciones
     */
    public function setEstado($estado)
    {
        $this->estado = $estado;
    
        return $this;
    }

    /**
     * Get estado
     *
     * @return integer
     */
    public function getEstado()
    {
        return $this->estado;
    }

    /**
     * Set prioridad
     *
     * @param integer $prioridad
     *
     * @return Publicaciones
     */
    public function setPrioridad($prioridad)
    {
        $this->prioridad = $prioridad;
    
        return $this;
    }

    /**
     * Get prioridad
     *
     * @return integer
     */
    public function getPrioridad()
    {
        return $this->prioridad;
    }

    /**
     * Set fechaCreacion
     *
     * @param \DateTime $fechaCreacion
     *
     * @return Publicaciones
     */
    public function setFechaCreacion($fechaCreacion)
    {
        $this->fechaCreacion = $fechaCreacion;
    
        return $this;
    }

    /**
     * Get fechaCreacion
     *
     * @return \DateTime
     */
    public function getFechaCreacion()
    {
        return $this->fechaCreacion;
    }

    /**
     * Set idProfesor
     *
     * @param integer $idProfesor
     *
     * @return Publicaciones
     */
    public function setIdProfesor($idProfesor)
    {
        $this->idProfesor = $idProfesor;
    
        return $this;
    }

    /**
     * Get idProfesor
     *
     * @return integer
     */
    public function getIdProfesor()
    {
        return $this->idProfesor;
    }

    /**
     * Set createdAt
     *
     * @param \DateTime $createdAt
     *
     * @return Publicaciones
     */
    public function setCreatedAt($createdAt)
    {
        $this->createdAt = $createdAt;
    
        return $this;
    }

    /**
     * Get createdAt
     *
     * @return \DateTime
     */
    public function getCreatedAt()
    {
        return $this->createdAt;
    }

    /**
     * Set updatedAt
     *
     * @param \DateTime $updatedAt
     *
     * @return Publicaciones
     */
    public function setUpdatedAt($updatedAt)
    {
        $this->updatedAt = $updatedAt;
    
        return $this;
    }

    /**
     * Get updatedAt
     *
     * @return \DateTime
     */
    public function getUpdatedAt()
    {
        return $this->updatedAt;
    }
}

