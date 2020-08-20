<?php
/**
 * @User: Guillermo Boquizo Sánchez (GUBS), Rafael García Zurita (RAGZ).
 * @File: Cursos.php
 * @Updated: 2019
 * @Description: Entidad para los cursos.
 * @license http://opensource.org/licenses/gpl-license.php  GNU Public License
 */

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Class Cursos.
 * @ORM\Table(name="cursos")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\CursosRepository")
 */
class Cursos
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
     * Curso.
     * @var string
     *
     * @ORM\Column(name="curso", type="string", length=100)
     */
    private $curso;

    /**
     * Grupo.
     * @var string
     *
     * @ORM\Column(name="grupo", type="string", length=100)
     */
    private $grupo;

    /**
     * Aula.
     * @var string
     *
     * @ORM\Column(name="aula", type="string", length=5)
     */
    private $aula;

    /**
     * IdTutor.
     * @var int
     *
     * @ORM\ManyToOne(targetEntity="Profesores")
     * @ORM\JoinColumn(name="idtutor", referencedColumnName="id")
     */
    private $idTutor;

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
     * Permite establecer el curso.
     *
     * @param string $curso el curso
     *
     * @return Cursos
     */
    public function setCurso($curso)
    {
        $this->curso = $curso;

        return $this;
    }

    /**
     * Permite obtener el curso.
     *
     * @return string curso
     */
    public function getCurso()
    {
        return $this->curso;
    }

    /**
     * Permite obtener el aula.
     * @return string aula
     */
    public function getAula()
    {
        return $this->aula;
    }

    /**
     * Permite establecer el aula.
     * @param string $aula el aula
     */
    public function setAula($aula)
    {
        $this->aula = $aula;
    }

    /**
     * Permite obtener el idTutor.
     * @return int idTutor
     */
    public function getIdTutor()
    {
        return $this->idTutor;
    }

    /**
     * Permite establecer el idTutor.
     * @param int $idTutor el idTutor
     */
    public function setIdTutor($idTutor)
    {
        $this->idTutor = $idTutor;
    }

    /**
     * Permite establecer el grupo.
     *
     * @param string $grupo el grupo
     *
     * @return Cursos
     */
    public function setGrupo($grupo)
    {
        $this->grupo = $grupo;

        return $this;
    }

    /**
     * Permite obtener el grupo.
     *
     * @return string grupo
     */
    public function getGrupo()
    {
        return $this->grupo;
    }
}
