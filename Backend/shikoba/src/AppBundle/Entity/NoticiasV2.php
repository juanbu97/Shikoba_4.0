<?php

namespace AppBundle\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;

/**
 * NoticiasV2
 *
 * @ORM\Table(name="noticiasV2")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\NoticiasV2Repository")
 */
class NoticiasV2
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    protected $eventos;

    /**
     * @var string
     *
     * @ORM\Column(name="titulo", type="string", length=200)
     */
    private $titulo;

    /**
     * @var string
     *
     * @ORM\Column(name="descripcion", type="string", length=200)
     */
    private $descripcion;

    /**
     * @var string
     *
     * @ORM\Column(name="codigo_embebido", type="text")
     */
    private $codigoEmbebido;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fecha_primera_publicacion", type="datetime")
     */
    private $fechaPrimeraPublicacion;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fecha_ultima_publicacion", type="datetime")
     */
    private $fechaUltimaPublicacion;

    /**
     * @var int
     *
     * @ORM\Column(name="numero_publicaciones", type="integer")
     */
    private $numeroPublicaciones;

    /**
     * @var string
     *
     * @ORM\Column(name="tag_parametrizacion_valores", type="string", length=534)
     */
    private $tagParametrizacionValores;

    /**
     * @var string
     *
     * @ORM\Column(name="tag_parametrizacion_cursos", type="string", length=534)
     */
    private $tagParametrizacionCursos;

    /**
     * @var string
     *
     * @ORM\Column(name="tag_parametrizacion_categorias", type="string", length=534)
     */
    private $tagParametrizacionCategorias;

    /**
     * @var string
     *
     * @ORM\Column(name="tag_parametrizacion_puntos", type="string", length=255)
     */
    private $tagParametrizacionPuntos;


    /**
     * @var string
     * 
     * @ORM\Column(name="tag_parametrizacion_grupos", type="string", length=534)
     * 
     */
    private $tagParametrizacionGrupos;

    /**
     * @var int
     *
     * @ORM\Column(name="id_profesor", type="integer")
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

   public function setEventos($eventos){
        $this->eventos=$eventos;
   }

    /**
     * Get eventos
     */
    public function getEvento(){
        return $this->eventos;
    }

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
     * Set titulo
     *
     * @param string $titulo
     *
     * @return Post
     */
    public function setTitulo($titulo)
    {
        $this->titulo = $titulo;

        return $this;
    }

    /**
     * Get titulo
     *
     * @return string
     */
    public function getTitulo()
    {
        return $this->titulo;
    }

    /**
     * Set descripcion
     *
     * @param string $descripcion
     *
     * @return Post
     */
    public function setDescripcion($descripcion)
    {
        $this->descripcion = $descripcion;

        return $this;
    }

    /**
     * Get descripcion
     *
     * @return string
     */
    public function getDescripcion()
    {
        return $this->descripcion;
    }

    /**
     * Set codigoEmbebido
     *
     * @param string $codigoEmbebido
     *
     * @return Post
     */
    public function setCodigoEmbebido($codigoEmbebido)
    {
        $this->codigoEmbebido = $codigoEmbebido;

        return $this;
    }

    /**
     * Get codigoEmbebido
     *
     * @return string
     */
    public function getCodigoEmbebido()
    {
        return $this->codigoEmbebido;
    }

    /**
     * Set fechaPrimeraPublicacion
     *
     * @param \DateTime $fechaPrimeraPublicacion
     *
     * @return Post
     */
    public function setFechaPrimeraPublicacion($fechaPrimeraPublicacion)
    {
        $this->fechaPrimeraPublicacion = $fechaPrimeraPublicacion;

        return $this;
    }

    /**
     * Get fechaPrimeraPublicacion
     *
     * @return \DateTime
     */
    public function getFechaPrimeraPublicacion()
    {
        return $this->fechaPrimeraPublicacion;
    }

    /**
     * Set fechaUltimaPublicacion
     *
     * @param \DateTime $fechaUltimaPublicacion
     *
     * @return Post
     */
    public function setFechaUltimaPublicacion($fechaUltimaPublicacion)
    {
        $this->fechaUltimaPublicacion = $fechaUltimaPublicacion;

        return $this;
    }

    /**
     * Get fechaUltimaPublicacion
     *
     * @return \DateTime
     */
    public function getFechaUltimaPublicacion()
    {
        return $this->fechaUltimaPublicacion;
    }

    /**
     * Set numeroPublicaciones
     *
     * @param integer $numeroPublicaciones
     *
     * @return Post
     */
    public function setNumeroPublicaciones($numeroPublicaciones)
    {
        $this->numeroPublicaciones = $numeroPublicaciones;

        return $this;
    }

    /**
     * Get numeroPublicaciones
     *
     * @return integer
     */
    public function getNumeroPublicaciones()
    {
        return $this->numeroPublicaciones;
    }

    /**
     * Set tagParametrizacionValores
     *
     * @param string $tagParametrizacionValores
     *
     * @return Post
     */
    public function setTagParametrizacionValores($tagParametrizacionValores)
    {
        $this->tagParametrizacionValores = $tagParametrizacionValores;

        return $this;
    }

    /**
     * Get tagParametrizacionValores
     *
     * @return string
     */
    public function getTagParametrizacionValores()
    {
        return $this->tagParametrizacionValores;
    }

    /**
     * Set tagParametrizacionCursos
     *
     * @param string $tagParametrizacionCursos
     *
     * @return Post
     */
    public function setTagParametrizacionCursos($tagParametrizacionCursos)
    {
        $this->tagParametrizacionCursos = $tagParametrizacionCursos;

        return $this;
    }

    /**
     * Get tagParametrizacionCursos
     *
     * @return string
     */
    public function getTagParametrizacionCursos()
    {
        return $this->tagParametrizacionCursos;
    }

    /**
     * Set tagParametrizacionCategorias
     *
     * @param string $tagParametrizacionCategorias
     *
     * @return Post
     */
    public function setTagParametrizacionCategorias($tagParametrizacionCategorias)
    {
        $this->tagParametrizacionCategorias = $tagParametrizacionCategorias;

        return $this;
    }

    /**
     * Get tagParametrizacionCategorias
     *
     * @return string
     */
    public function getTagParametrizacionCategorias()
    {
        return $this->tagParametrizacionCategorias;
    }

    /**
     * Set tagParametrizacionPuntos
     *
     * @param string $tagParametrizacionPuntos
     *
     * @return Post
     */
    public function setTagParametrizacionPuntos($tagParametrizacionPuntos)
    {
        $this->tagParametrizacionPuntos = $tagParametrizacionPuntos;

        return $this;
    }


    /**
     * Get tagParametrizacionPuntos
     *
     * @return string
     */
    public function getTagParametrizacionPuntos()
    {
        return $this->tagParametrizacionPuntos;
    }


    /**
     * Set tagParametrizacionGrupos
     * 
     * @param string $tagParametrizacionGrupos
     * 
     * @return Post
     */
    public function setTagParametrizacionGrupos($tagParametrizacionGrupos){
        $this->tagParametrizacionGrupos = $tagParametrizacionGrupos;
        return $this;
    }

    /**
     * Get tagParametrizacionGrupos
     * 
     * @return string
     */
    public function getTagParametrizacionGrupos(){
        return $this->tagParametrizacionGrupos;
    }


    /**
     * Set idProfesor
     *
     * @param int $idProfesor
     *
     * @return Post
     */
    public function setIdProfesor($idProfesor)
    {
        $this->idProfesor = $idProfesor;

        return $this;
    }

    /**
     * Get idProfesor
     *
     * @return int
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
     * @return Post
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
     * @return Post
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



    public function __toString()
    {
        return (string) $this->getTitulo();
    }
}
