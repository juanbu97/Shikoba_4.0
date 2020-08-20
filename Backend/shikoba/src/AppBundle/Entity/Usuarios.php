<?php
/**
 * @User: Guillermo Boquizo Sánchez (GUBS), Rafael García Zurita (RAGZ).
 * @File: Usuarios.php
 * @Updated: 2019
 * @Description: Entidad para los usuarios.
 *
 * @license http://opensource.org/licenses/gpl-license.php  GNU Public License
 */

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Security\Core\User\UserInterface;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;

//use Symfony\Component\Validator\Constraints as Assert;

/**
 * Class Usuarios.
 *
 * @ORM\Table(name="usuarios")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\UsuariosRepository")
 * @UniqueEntity("usuario")
 */
class Usuarios implements UserInterface
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
     * Usuario.
     * @var string
     *
     * @ORM\Column(name="usuario", type="string", length=30, unique=true)
     */
    private $usuario;

    /**
     * Contraseña.
     * @var string
     *
     * @ORM\Column(name="password", type="string", length=255)
     */
    private $password;

    /**
     * Contraseña en texto plano.
     * @var string
     */
    private $plainPassword;

    /**
     * Roles.
     * @var string
     *
     * @ORM\Column(name="roles", type="array", length=255)
     */
    private $roles;

    /**
     * Alumno.
     * @ORM\OneToMany(targetEntity="Alumno", mappedBy="idUsuario", cascade={"persist", "remove"}, orphanRemoval=true)
     */
    protected $alumno;

    /**
     * Hash.
     * @var string
     *
     * @ORM\Column(name="hash", type="string", length=1000)
     */
    private $hash;

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
     * Establece el idUsuario.
     *
     * @param int $idUsuario
     *
     * @return Usuarios
     */
    public function setIdUsuario($idUsuario)
    {
        $this->idUsuario = $idUsuario;

        return $this;
    }

    /**
     * Obtiene el idUsuario.
     *
     * @return int
     */
    public function getIdUsuario()
    {
        return $this->idUsuario;
    }

    /**
     * Establece el usuario.
     *
     * @param string $usuario
     *
     * @return Usuarios
     */
    public function setUsuario($usuario)
    {
        $this->usuario = $usuario;

        return $this;
    }

    /**
     * Obtiene el usuario.
     *
     * @return string
     */
    public function getUsuario()
    {
        return $this->usuario;
    }

    /**
     * Establece el password.
     *
     * @param string $password
     *
     * @return Usuarios
     */
    public function setPassword($password)
    {
        $this->password = $password;

        return $this;
    }

    /**
     * Obtiene el password.
     *
     * @return string
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * Obtiene el plainPassword.
     *
     * @return mixed
     */
    public function getPlainPassword()
    {
        return $this->plainPassword;
    }

    /**
     * Establece el plainPassword.
     *
     * @param mixed $plainPassword
     */
    public function setPlainPassword($plainPassword)
    {
        $this->plainPassword = $plainPassword;
    }

    /**
     * Devuelve los roles garantizados al usuario.
     *
     * <code>
     * public function getRoles()
     * {
     *     return array('ROLE_USER');
     * }
     * </code>
     *
     * Alternativamente, los roles pueden ser almacenados en una propiedad ``roles`` q
     * que se rellenan en cualquier número de maneras diferentes cuando el objeto usuario es creado.
     *
     * @return mixed user roles
     */
    public function getRoles()
    {
        $roles = $this->roles;
        $roles[] = 'ROLE_USER';
        return $roles;
    }

    /**
     * Establece los roles.
     * @param array $roles
     * @return $this
     */
    public function setRoles(array $roles)
    {
        $this->roles = $roles;
        return $this;
    }

    /**
     * Devuelve la sal  que fue empleada originalmente para codificar la clave.
     *
     * Puede devolver nulo si la password no fue codificada usando sal.
     *
     * @return string|null The salt
     */
    public function getSalt()
    {
        return null;
    }

    /**
     * Devuelve el nombre de usuario empleado para autenticar al usuario.
     *
     * @return string The username
     */
    public function getUsername()
    {
        return $this->usuario;
    }

    /**
     * Elimina datos sensibles del usuario.
     *
     * Esto es importante si, en un momento dado, información sensible como
     * la contraseña de texto plano se almacena en este objeto.
     */
    public function eraseCredentials()
    {
        // TODO: Implement eraseCredentials() method.
    }

    /**
     * Usuarios constructor.
     */
    public function __construct()
    {
        $this->alumno = new ArrayCollection();
    }

    /**
     * Añade un alumno.
     *
     * @param Alumno $alumno
     *
     * @return Usuarios
     */
    public function addAlumno(Alumno $alumno)
    {
        $this->alumno[] = $alumno;

        return $this;
    }

    /**
     * Elimina un alumno.
     *
     * @param Alumno $alumno
     */
    public function removeAlumno(Alumno $alumno)
    {
        $this->alumno->removeElement($alumno);
    }

    /**
     * Obtiene un alumno.
     *
     * @return Collection
     */
    public function getAlumno()
    {
        return $this->alumno;
    }

    /**
     * Establece el hash.
     *
     * @param string $hash
     *
     * @return Usuarios
     */
    public function setHash($hash)
    {
        $this->hash = $hash;

        return $this;
    }

    /**
     * Obtiene el hash.
     *
     * @return
     */
    public function getHash()
    {
        return $this->hash;
    }
}
