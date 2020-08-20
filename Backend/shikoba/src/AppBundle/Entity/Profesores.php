<?php

/**
 * @User: Guillermo Boquizo Sánchez (GUBS), Rafael García Zurita (RAGZ).
 * @File: Profesores.php
 * @Updated: 2019
 * @Description: Entidad para los profesores.
 *
 * @license http://opensource.org/licenses/gpl-license.php  GNU Public License
 */

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Class Profesores.
 *
 * @ORM\Table(name="profesores")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\ProfesoresRepository")
 */
class Profesores
{
    /**
     * El id principal.
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
     * @ORM\ManyToOne(targetEntity="Usuarios")
     * @ORM\JoinColumn(name="idUsuario", referencedColumnName="id")
     */
    private $idUsuario;

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
     * @var string
     *
     * @ORM\Column(name="telefono", type="string", length=10)
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
     * Función que devuelve el nombre completo del profesor.
     * @return string
     */
    public function getNombreCompleto()
    {
        return $this->getNombre() . ' ' . $this->getApellido1() . ' ' . $this->getApellido2();
    }

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
     * @return Profesores
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
     * @return Profesores
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
     * @return Profesores
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
     * Establece el telefono.
     *
     * @param string $telefono
     *
     * @return Profesores
     */
    public function setTelefono($telefono)
    {
        $this->telefono = $telefono;

        return $this;
    }

    /**
     * Permite obtener el telefono.
     *
     * @return string
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
     * @return Profesores
     */
    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
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
     * Establece el idUsuario.
     *
     * @param Usuarios $idUsuario
     *
     * @return Profesores
     */
    public function setIdUsuario(Usuarios $idUsuario = null)
    {
        $this->idUsuario = $idUsuario;

        return $this;
    }

    /**
     * Permite obtener el idUsuario.
     *
     * @return int
     */
    public function getIdUsuario()
    {
        return $this->idUsuario;
    }

    public function __toString()
    {
        return (string) $this->getNombreCompleto();
    }

    
    public function toInt()
    {
        return (int) $this->__toString();
    }
}
