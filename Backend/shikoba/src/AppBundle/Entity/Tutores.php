<?php
/**
 * @User: Guillermo Boquizo Sánchez (GUBS), Rafael García Zurita (RAGZ).
 * @File: Tutores.php
 * @Updated: 2019
 * @Description: Entidad para los tutores (por definir).
 *
 * @license http://opensource.org/licenses/gpl-license.php  GNU Public License
 */

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * Class Tutores.
 *
 * @ORM\Table(name="tutores")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\TutoresRepository")
 */
class Tutores
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
     * idUsuario.
     * @var int
     *
     * @ORM\ManyToOne(targetEntity="Usuarios")
     * @ORM\JoinColumn(name="idUsuario", referencedColumnName="id")
     */
    private $idUsuario;

    /**
     * idAlumno.
     * @var int
     * @ORM\ManyToMany(targetEntity="Alumno")
     * @ORM\JoinColumn(name="idAlumno", referencedColumnName="id")
     */
    private $idAlumno;

    /**
     * Nombre.
     * @var string
     *
     * @ORM\Column(name="nombre", type="string", length=255)
     */
    private $nombre;

    /**
     * Primer apellido.
     * @var string
     *
     * @ORM\Column(name="apellido1", type="string", length=255)
     */
    private $apellido1;

    /**
     * Segundo apellido.
     * @var string
     *
     * @ORM\Column(name="apellido2", type="string", length=255)
     */
    private $apellido2;

    /**
     * Teléfono.
     * @var int
     *
     * @ORM\Column(name="telefono", type="integer", unique=true)
     */
    private $telefono;

    /**
     * Email.
     * @var string
     *
     * @ORM\Column(name="email", type="string", length=50)
     */
    private $email;

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
     * Establece el nombre.
     *
     * @param string $nombre
     *
     * @return Tutores
     */
    public function setNombre($nombre)
    {
        $this->nombre = $nombre;

        return $this;
    }

    /**
     * Permite obtener el nombre.
     *
     * @return string
     */
    public function getNombre()
    {
        return $this->nombre;
    }

    /**
     * Establece el apellido1.
     *
     * @param string $apellido1
     *
     * @return Tutores
     */
    public function setApellido1($apellido1)
    {
        $this->apellido1 = $apellido1;

        return $this;
    }

    /**
     * Permite obtener el apellido1.
     *
     * @return string
     */
    public function getApellido1()
    {
        return $this->apellido1;
    }

    /**
     * Establece el apellido2.
     *
     * @param string $apellido2
     *
     * @return Tutores
     */
    public function setApellido2($apellido2)
    {
        $this->apellido2 = $apellido2;

        return $this;
    }

    /**
     * Permite obtener el apellido2.
     *
     * @return string
     */
    public function getApellido2()
    {
        return $this->apellido2;
    }

    /**
     * Establece el teléfono.
     *
     * @param int $telefono
     *
     * @return Tutores
     */
    public function setTelefono($telefono)
    {
        $this->telefono = $telefono;

        return $this;
    }

    /**
     * Permite obtener el telefono.
     *
     * @return int
     */
    public function getTelefono()
    {
        return $this->telefono;
    }

    /**
     * Establece el email.
     *
     * @param string $email
     *
     * @return Tutores
     */
    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
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
     */
    public function setIdAlumno($idAlumno)
    {
        $this->idAlumno = $idAlumno;
    }

    /**
     * Permite obtener el email.
     *
     * @return string
     */
    public function getEmail()
    {
        return $this->email;
    }
    /**
     * Constructor.
     */
    public function __construct()
    {
        $this->idAlumno = new ArrayCollection();
    }

    /**
     * Set idUsuario.
     *
     * @param Usuarios $idUsuario
     *
     * @return Tutores
     */
    public function setIdUsuario(Usuarios $idUsuario = null)
    {
        $this->idUsuario = $idUsuario;

        return $this;
    }

    /**
     * Get idUsuario.
     *
     * @return int
     */
    public function getIdUsuario()
    {
        return $this->idUsuario;
    }

    /**
     * Add idAlumno.
     *
     * @param Alumno $idAlumno
     *
     * @return Tutores
     */
    public function addIdAlumno(Alumno $idAlumno)
    {
        $this->idAlumno[] = $idAlumno;

        return $this;
    }

    /**
     * Remove idAlumno.
     *
     * @param \AppBundle\Entity\Alumno $idAlumno
     */
    public function removeIdAlumno(Alumno $idAlumno)
    {
        $this->idAlumno->removeElement($idAlumno);
    }
}
