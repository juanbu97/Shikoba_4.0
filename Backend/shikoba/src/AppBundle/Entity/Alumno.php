<?php
/**
 * @User: Guillermo Boquizo Sánchez (GUBS), Rafael García Zurita (RAGZ).
 * @File: Alumno.php
 * @Updated: 2019
 * @Description: Entidad para el alumno.
 *
 * @license http://opensource.org/licenses/gpl-license.php  GNU Public License
 */

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * Class Alumno.
 *
 * @ORM\Table(name="alumno")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\AlumnoRepository")
 */
class Alumno
{
    /**
     * Id principal de la clase.
     *
     * @var int
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * Nombre del alumno.
     *
     * @var string
     * @ORM\Column(name="nombre", type="string", length=255)
     * @Assert\NotBlank()
     */
    private $nombre;

    /**
     * IdUsuario del alumno.
     *
     * @var int
     * @ORM\ManyToOne(targetEntity="Usuarios", inversedBy="alumno")
     * @ORM\JoinColumn(name="idUsuario", referencedColumnName="id", onDelete="CASCADE")
     */
    private $idUsuario;

    /**
     * idTutor del alumno.
     *
     * @var int
     * @ORM\ManyToMany(targetEntity="Tutores")
     * @ORM\JoinColumn(name="idTutor", referencedColumnName="id")
     */
    private $idTutor;

    /**
     * Primer apellido del alumno.
     *
     * @var string
     * @ORM\Column(name="apellido1", type="string", length=255)
     * @Assert\NotBlank()
     */
    private $apellido1;

    /**
     * Segundo apellido del alumno.
     *
     * @var string
     * @ORM\Column(name="apellido2", type="string", length=255)
     * @Assert\NotBlank()
     */
    private $apellido2;

    /**
     * Nie del alumno.
     *
     * @var int
     * @ORM\Column(name="nie", type="integer", nullable=true)
     * @Assert\NotBlank()
     */
    private $nie;

    /**
     * IdCurso del alumno.
     *
     * @var string
     * @ORM\ManyToOne(targetEntity="Cursos")
     * @ORM\JoinColumn(name="idCurso", referencedColumnName="id")
     */
    private $idCurso;

    /**
     * Teléfono del alumno.
     *
     * @var string
     * @ORM\Column(name="telefono", type="string", length=70)
     * @Assert\NotBlank()
     */
    private $telefono;

    /**
     * Email del alumno.
     *
     * @var string
     * @ORM\Column(name="email", type="string", length=150)
     * @Assert\Email(
     *      message = "The email '{{ value }}' is not a valid email.",
     *      checkMX = true
     * )
     */
    private $email;

    /**
     * Dirección del alumno.
     *
     * @var string
     * @ORM\Column(name="direccion", type="string", length=100)
     * @Assert\NotBlank()
     */
    private $direccion;

    /**
     * Código postal del alumno.
     *
     * @var string
     * @ORM\Column(name="codpostal", type="string", length=5)
     * @Assert\NotBlank()
     */
    private $codigoPostal;

    /**
     * Foto del alumno.
     *
     * @var string
     * @ORM\Column(name="foto", type="string", length=255, nullable=true)
     */
    private $foto;

    /**
     * Puntos del alumno.
     *
     * @var int
     * @ORM\Column(name="puntos", type="integer")
     */
    private $puntos;

    /**
     * Puntos iniciales del alumno.
     *
     * @var int
     * @ORM\Column(name="puntosIniciales", type="integer")
     */
    private $puntosIniciales;

    /**
     * Nombre del primer tutor legal del alumno.
     *
     * @var string
     * @ORM\Column(name="tutorL1", type="string", length=60)
     */
    private $tutorL1;

    /**
     * Nombre del segundo tutor legal del alumno.
     *
     * @var string
     * @ORM\Column(name="tutorL2", type="string", length=60)
     */
    private $tutorL2;

    /**
     * Teléfono del primer tutor legal del alumno.
     *
     * @var int
     * @ORM\Column(name="telefonoTL1", type="integer")
     */
    private $telefonoTL1;

    /**
     * Teléfono del segundo tutor legal del alumno.
     *
     * @var int
     * @ORM\Column(name="telefonoTL2", type="integer")
     */
    private $telefonoTL2;

    /**
     * Permitir envío de sms al primer tutor legal del alumno.
     *
     * @var bool
     * @ORM\Column(name="msgTL1", type="boolean")
     */
    private $msgTL1;

    /**
     * Permitir envío de sms al segundo tutor legal del alumno.
     *
     * @var bool
     * @ORM\Column(name="msgTL2", type="boolean")
     */
    private $msgTL2;

    /**
     * Función que devuelve el nombre completo del alumno.
     *
     * @return string nombre completo del alumno
     */
    public function getNombreCompleto()
    {
        return $this->getNombre().' '.$this->getApellido1().' '.$this->getApellido2();
    }

    /**
     * Función que devuelve el nombre completo y curso del alumno.
     *
     * @return string el nombre completo y curso del alumno
     */
    public function getNombreCompletoYCurso()
    {
        if (null != $this->getIdCurso() && $this->getIdCurso()->getGrupo()) {
            return $this->getNombre().' '.$this->getApellido1().' '.
                $this->getApellido2().' - '.$this->getIdCurso()->getGrupo();
        } else {
            return $this->getNombreCompleto();
        }
    }

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
     * Permite establecer el nombre.
     *
     * @param string $nombre el nombre
     *
     * @return Alumno
     */
    public function setNombre($nombre)
    {
        $this->nombre = $nombre;

        return $this;
    }

    /**
     * Permite obtener el nombre.
     *
     * @return string el nombre
     */
    public function getNombre()
    {
        return $this->nombre;
    }

    /**
     * Permite establecer el apellido1.
     *
     * @param string $apellido1 el primer apellido
     *
     * @return Alumno
     */
    public function setApellido1($apellido1)
    {
        $this->apellido1 = $apellido1;

        return $this;
    }

    /**
     * Permite obtener el apellido1.
     *
     * @return string apellido1
     */
    public function getApellido1()
    {
        return $this->apellido1;
    }

    /**.
     * Permite establecer el apellido2
     * @param string $apellido2 el segundo apellido
     * @return Alumno
     */
    public function setApellido2($apellido2)
    {
        $this->apellido2 = $apellido2;

        return $this;
    }

    /**
     * Permite obtener el apellido2.
     *
     * @return string apellido2
     */
    public function getApellido2()
    {
        return $this->apellido2;
    }

    /**
     * Permite establecer el nie.
     *
     * @param int $nie
     *
     * @return Alumno
     */
    public function setNie($nie)
    {
        $this->nie = $nie;

        return $this;
    }

    /**
     * Permite obtener el nie.
     *
     * @return int nie
     */
    public function getNie()
    {
        return $this->nie;
    }

    /**
     * Permite establecer el idCurso.
     * @param string $idCurso el id del curso
     * @return Alumno
     */
    public function setIdCurso($idCurso)
    {
        $this->idCurso = $idCurso;

        return $this;
    }

    /**
     * Permite obtener el idCurso.
     * @return string idCurso
     */
    public function getIdCurso()
    {
        return $this->idCurso;
    }

    /**
     * Permite obtener el idTutor.
     *
     * @return int idTutor
     */
    public function getIdTutor()
    {
        return $this->idTutor;
    }

    /**
     * Permite establecer el idTutor.
     * @param int $idTutor
     */
    public function setIdTutor($idTutor)
    {
        $this->idTutor = $idTutor;
    }

    /**
     * Permite establecer el telefono.
     * @param string $telefono el teléfono
     * @return Alumno
     */
    public function setTelefono($telefono)
    {
        $this->telefono = $telefono;

        return $this;
    }

    /**
     * Permite obtener el telefono.
     * @return string telefono
     */
    public function getTelefono()
    {
        return $this->telefono;
    }

    /**
     * Permite establecer el email.
     * @param string $email el email
     * @return Alumno
     */
    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }

    /**
     * Permite obtener el email.
     * @return string email
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Permite establecer la dirección.
     * @param string $direccion la dirección
     * @return Alumno
     */
    public function setDireccion($direccion)
    {
        $this->direccion = $direccion;

        return $this;
    }

    /**
     * Permite obtener la dirección.
     * @return string direccion
     */
    public function getDireccion()
    {
        return $this->direccion;
    }

    /**
     * Permite establecer los puntos.
     * @param int $puntos los puntos
     * @return Alumno
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
     * Permite establecer el idUsuario.
     * @param Usuarios $idUsuario el idUsuario
     * @return Alumno
     */
    public function setIdUsuario(Usuarios $idUsuario = null)
    {
        $this->idUsuario = $idUsuario;

        return $this;
    }

    /**
     * Permite obtener el idUsuario.
     * @return int idUsuario
     */
    public function getIdUsuario()
    {
        return $this->idUsuario;
    }

    /**
     * Permite obtener el código postal.
     * @return string codigoPostal
     */
    public function getCodigoPostal()
    {
        return $this->codigoPostal;
    }

    /**
     * Permite establecer el código postal.
     * @param string $codigoPostal el código postal
     */
    public function setCodigoPostal($codigoPostal)
    {
        $this->codigoPostal = $codigoPostal;
    }

    /**
     * Permite obtener la foto.
     * @return string foto
     */
    public function getFoto()
    {
        return $this->foto;
    }

    /**
     * Permite establecer la foto.
     * @param string $foto la foto
     */
    public function setFoto($foto)
    {
        $this->foto = $foto;
    }

    /**
     * Permite obtener el teléfono de TL1.
     * @return int telefonoTL1
     */
    public function getTelefonoTL1()
    {
        return $this->telefonoTL1;
    }

    /**
     * Permite establecer el teléfono de TL1.
     * @param int $telefonoTL1 el teléfono de TL1
     * @return Alumno
     */
    public function setTelefonoTL1($telefonoTL1)
    {
        $this->telefonoTL1 = $telefonoTL1;

        return $this;
    }

    /**
     * Permite obtener el teléfono de TL2.
     * @return int telefonoTL2
     */
    public function getTelefonoTL2()
    {
        return $this->telefonoTL2;
    }

    /**
     * Permite establecer el teléfono de TL2.
     * @param int $telefonoTL2 el teléfono de TL2
     * @return Alumno
     */
    public function setTelefonoTL2($telefonoTL2)
    {
        $this->telefonoTL2 = $telefonoTL2;

        return $this;
    }

    /**
     * Permite obtener la comprobación del envío de sms al TL1.
     * @return bool true si está activo, false en caso contrario
     */
    public function getMsgTL1()
    {
        return $this->msgTL1;
    }

    /**
     * Permite establecer la comprobación del envío de sms al TL1.
     * @param bool $msgTL1
     * @return Alumno
     */
    public function setMsgTL1($msgTL1)
    {
        $this->msgTL1 = $msgTL1;

        return $this;
    }

    /**
     * Permite obtener la comprobación del envío de sms al TL2.
     * @return bool true si está activo, false en caso contrario
     */
    public function getMsgTL2()
    {
        return $this->msgTL2;
    }

    /**
     * Permite establecer la comprobación del envío de sms al TL2.
     * @param bool $msgTL2
     * @return Alumno
     */
    public function setMsgTL2($msgTL2)
    {
        $this->msgTL2 = $msgTL2;

        return $this;
    }

    /**
     * Permite obtener el nombre del TL1.
     * @return string tutorL1
     */
    public function getTutorL1()
    {
        return $this->tutorL1;
    }

    /**
     * Permite establecer el nombre del TL1.
     * @param string $tutorL1 el nombre del TL1
     * @return Alumno
     */
    public function setTutorL1($tutorL1)
    {
        $this->tutorL1 = $tutorL1;

        return $this;
    }

    /**
     * Permite obtener el nombre del TL2.
     * @return string tutorL1
     */
    public function getTutorL2()
    {
        return $this->tutorL2;
    }

    /**
     * Permite establecer el nombre del TL2.
     * @param string $tutorL2 el nombre del TL2
     * @return Alumno
     */
    public function setTutorL2($tutorL2)
    {
        $this->tutorL2 = $tutorL2;

        return $this;
    }

    /**
     * Permite establecer los puntosIniciales.
     * @param int $puntosIniciales puntos iniciales
     * @return Alumno
     */
    public function setPuntosIniciales($puntosIniciales)
    {
        $this->puntosIniciales = $puntosIniciales;

        return $this;
    }

    /**
     * Permite obtener los puntos iniciales.
     * @return int puntosIniciales
     */
    public function getPuntosIniciales()
    {
        return $this->puntosIniciales;
    }

    /**
     * Constructor.
     */
    public function __construct()
    {
        $this->idTutor = new ArrayCollection();
    }

    /**
     * Añade un idTutor.
     *
     * @param Tutores $idTutor
     *
     * @return Alumno
     */
    public function addIdTutor(Tutores $idTutor)
    {
        $this->idTutor[] = $idTutor;

        return $this;
    }

    /**
     * Elimina un idTutor.
     *
     * @param Tutores $idTutor
     */
    public function removeIdTutor(Tutores $idTutor)
    {
        $this->idTutor->removeElement($idTutor);
    }
}
