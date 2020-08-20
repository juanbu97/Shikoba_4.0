<?php
/**
 * @User: Guillermo Boquizo Sánchez (GUBS), Rafael García Zurita (RAGZ).
 * @File: ImportHelper.php
 * @Updated: 2019
 * @Description: Servicio para la gestión de la importación.
 * @license http://opensource.org/licenses/gpl-license.php  GNU Public License
 */

namespace AppBundle\Services;

use AppBundle\Entity\Alumno;
use AppBundle\Entity\Cursos;
use AppBundle\Entity\Profesores;
use AppBundle\Entity\Usuarios;
use AppBundle\Repository\CursosRepository;
use AppBundle\Repository\UsuariosRepository;
use Doctrine\ORM\EntityManager;
use Symfony\Component\HttpFoundation\File\File;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoder;
use Exception;

/**
 * Class ImportHelper.
 */
class ImportHelper
{
    const ARRAY_MAYUS = array('Á' => 'A', 'É' => 'E', 'Í' => 'I', 'Ó' => 'O', 'Ú' => 'U', 'Ñ' => 'N');
    const ARRAY_MINUS = array('á' => 'a', 'é' => 'e', 'í' => 'e', 'ó' => 'o', 'ú' => 'u', 'ñ' => ',');

    /**
     * ImportHelper constructor.
     * @param EntityManager $em
     * @param $securityEncoder
     */
    public function __construct(EntityManager $em, UserPasswordEncoder $securityEncoder)
    {
        $this->em = $em;
        $this->securityEncoder = $securityEncoder;
    }

    /**
     * Función que importa los alumnos a través de un fichero CSV.
     * @param File $file
     * @throws Exception
     */
    public function importarAlumnos(File $file)
    {
        ini_set('max_execution_time', 3600);
        /** @var CursosRepository $repositoryCurso */
        $repositoryCurso = $this->em->getRepository('AppBundle:Cursos');
        /** @var UsuariosRepository $repositoryUsuarios */
        $repositoryUsuarios = $this->em->getRepository('AppBundle:Usuarios');
        $contadorLineas = 0;
        if (false !== ($handle = fopen($file->getRealPath(), 'r'))) {
            while ((false !== $row = fgetcsv($handle))) {
                if (count($row) > 1) {
                    if ($contadorLineas <= 0) {
                        $contadorLineas++;
                    } else {
                        $alumno = new Alumno();

                        $alumno->setNombre($row[0]);
                        $alumno->setApellido1($row[1]);
                        $alumno->setApellido2($row[2]);

                        /** @var Cursos $curso */
                        $curso = $repositoryCurso->findOneByGrupo($row[3]);
                        if (null != $curso) {
                            $alumno->setIdCurso($curso);
                        }
                        $alumno->setTelefono($row[4]);
                        $alumno->setEmail($row[5]);
                        $alumno->setNie($row[6]);
                        $alumno->setDireccion($row[7]);
                        $alumno->setCodigoPostal($row[8]);
                        $alumno->setTutorL1($row[9]." ".$row[10]." ".$row[11]);
                        $alumno->setTutorL2($row[12]." ".$row[13]." ".$row[14]);
                        $alumno->setTelefonoTL1($row[15]);
                        $alumno->setTelefonoTL2($row[16]);
                        $alumno->setMsgTL1(1);
                        $alumno->setMsgTL2(1);
                        $alumno->setPuntos(0);
                        $alumno->setFoto('');
                        $alumno->setPuntosIniciales(0);
                        $user = new Usuarios();
                        $userNombre = mb_substr($alumno->getNombre(), 0, 2)
                            .mb_substr($alumno->getApellido1(), 0, 2)
                            .mb_substr($alumno->getApellido2(), 0, 2);
                        $userNombre = strtr($userNombre, self::ARRAY_MAYUS);
                        $userNombre = strtr($userNombre, self::ARRAY_MINUS);
                        $user->setUsuario(mb_strtolower($userNombre));
                        $contador = 1;
                        while ($repositoryUsuarios->findOneByUsuario($user->getUsuario())) {
                            $user->setUsuario(mb_strtolower($userNombre.''.$contador));
                            $contador++;
                        }
                        $password = $this->securityEncoder->encodePassword($user, 'usuario');
                        $user->setPassword($password);
                        $user->setRoles(['ROLE_USER']);
                        $this->setHashUser($user);
                        $this->em->persist($user);
                        $alumno->setIdUsuario($user);
                        $this->em->persist($alumno);
                        $this->em->flush();
                    }
                }
            }
        }
    }

    /**
     * Función que importa los profesores a través de un fichero CSV.
     * @param File $file
     * @throws Exception
     */
    public function importarProfesor(File $file)
    {
        ini_set('max_execution_time', 300);
        /** @var UsuariosRepository $repositoryUsuarios */
        $repositoryUsuarios = $this->em->getRepository('AppBundle:Usuarios');
        $contadorLineas = 0;
        if (false !== ($handle = fopen($file->getRealPath(), 'r'))) {
            while (false !== ($row = fgetcsv($handle))) {
                if (count($row) > 1) {
                    if ($contadorLineas <= 0) {
                        $contadorLineas++;
                    } else {
                        $profesor = new Profesores();

                        $profesor->setNombre($row[0]);
                        $profesor->setApellido1($row[1]);
                        $profesor->setApellido2($row[2]);
                        $profesor->setTelefono($row[3]);
                        $profesor->setEmail($row[4]);
                        $user = new Usuarios();
                        $user->setUsuario($row[5]);
                        /*
                        $userNombre = mb_substr($profesor->getNombre(), 0, 2)
                            .mb_substr($profesor->getApellido1(), 0, 2)
                            .mb_substr($profesor->getApellido2(), 0, 2);
                        $userNombre = strtr($userNombre, self::ARRAY_MAYUS);
                        $userNombre = strtr($userNombre, self::ARRAY_MINUS);
                        $user->setUsuario(mb_strtolower($userNombre));
                        $contador = 1;
                        while ($repositoryUsuarios->findOneByUsuario(null != $user->getUsuario())) {
                            $user->setUsuario(mb_strtolower($userNombre.''.$contador));
                            $contador++;
                        }*/
                        $password = $this->securityEncoder->encodePassword($user, 'profesor');
                        $user->setPassword($password);
                        $user->setRoles(['ROLE_PROFESOR']);
                        $this->setHashUser($user);
                        $this->em->persist($user);
                        $profesor->setIdUsuario($user);
                        $this->em->persist($profesor);
                        $this->em->flush();
                    }
                }
            }
        }
    }

    /**
     * Función que crea el hash del usuario.
     * @param Usuarios $user
     */
    public function setHashUser(Usuarios $user)
    {
        $hash = $this->securityEncoder->encodePassword($user, $user->getUsername().$user->getId());
        $user->setHash($hash);
    }
}
