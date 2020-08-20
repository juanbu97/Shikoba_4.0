<?php
/**
 * @User: Guillermo Boquizo Sánchez (GUBS), Rafael García Zurita (RAGZ).
 * @File: CursosRepository.php
 * @Updated: 2019
 * @Description: Repositorio para la gestión de los cursos.
 *
 * @license http://opensource.org/licenses/gpl-license.php  GNU Public License
 */

namespace AppBundle\Repository;

use Doctrine\ORM\EntityRepository;

/**
 * Class CursosRepository.
 */
class CursosRepository extends EntityRepository
{
    /**
     * Función que devuelve los cursos agrupados por curso.
     *
     * @return array
     */
    public function getCursosGroupByCursos()
    {
        $qb = $this->getEntityManager()->createQuery(
            'SELECT c.curso
           FROM AppBundle\Entity\Cursos c
           GROUP BY c.curso'
        );

        return $qb->getResult();
    }

    /**
     * Función que devuelve los cursos agrupados por curso.
     *
     * @param $idprofesor
     * @param $grupo
     *
     * @return array
     */
    public function updateProfesorCurso($idprofesor, $grupo)
    {
        $query = $this->getEntityManager()->createQuery(
            'UPDATE AppBundle\Entity\cursos C set C.idTutor =:idprofesor where C.grupo = :grupo'
        );

        $query->setParameter('idprofesor', $idprofesor);
        $query->setParameter('grupo', $grupo);

        return $query->getResult();
    }

    /**
     * Función que devuelve los cursos agrupados por curso.
     *
     * @param $idprofesor
     *
     * @return array
     */
    public function consultarGrupoTutor($idprofesor)
    {
        $query = $this->getEntityManager()->createQuery(
            'SELECT C.curso FROM AppBundle\Entity\cursos C WHERE C.idTutor=:idprofesor'
        );
        $query->setParameter('idprofesor', $idprofesor);

        return $query->getResult();
    }

    /**
     * Función que borrar los tutores de un curso.
     *
     * @return array
     */
    public function borrarTutores($grupo)
    {
        $query = $this->getEntityManager()->createQuery(
            'UPDATE AppBundle\Entity\cursos C set C.idTutor =null where C.grupo = :grupo'
        );

        $query->setParameter('grupo', $grupo);

        return $query->getResult();
    }

    /**
     * Función que devuelve los cursos agrupados por curso.
     *
     * @return array
     */
    public function getCursosGroupByCursos2()
    {
        $qb = $this->getEntityManager()->createQuery(
            'SELECT c
           FROM AppBundle\Entity\Cursos c
           order BY c.curso'
        );

        return $qb->getResult();
    }

    /**
     * Función que devuelve los cursos que contengan el curso del parámetro.
     *
     * @param $curso
     *
     * @return array
     */
    public function getCursosByCurso($curso)
    {
        $qb = $this->getEntityManager()->createQuery(
            'SELECT c
             FROM AppBundle\Entity\Cursos c,AppBundle\Entity\Alumno al
             WHERE al.idCurso = :curso and al.idCurso = c.id'
        );

        $qb->setParameter('curso', $curso);

        return $qb->getResult();
    }

    /**
     * Función que devuelve los cursos que contengan el curso del parámetro.
     *
     * @param $curso
     *
     * @return array
     */
    public function getCursoById($curso)
    {
        $qb = $this->getEntityManager()->createQuery(
            'SELECT c
             FROM AppBundle\Entity\Cursos c,AppBundle\Entity\Alumno al
             WHERE c.id = al.idCurso and al.id = :curso'
        );

        $qb->setParameter('curso', $curso);

        return $qb->getResult();
    }

    /**
     * Función que devuelve los cursos que contengan el curso del parámetro.
     *
     * @return array
     */
    public function verTutores()
    {
        $qb = $this->getEntityManager()->createQuery(
            'SELECT c.grupo, p.nombre, p.apellido1, p.apellido2 
                    FROM AppBundle\Entity\cursos c, AppBundle\Entity\Profesores p 
                    WHERE c.idTutor is not null and c.idTutor = p.id '
        );

        return $qb->getResult();
    }

    /**
     * Función que permite filtrar los cursos que no tienen tutor asignado.
     *
     * @return array
     */
    public function cursosSinTutor()
    {
        $qb = $this->getEntityManager()->createQuery(
            'SELECT c.grupo FROM AppBundle\Entity\cursos c WHERE c.idTutor is NULL ORDER BY c.grupo ASC'
        );

        return $qb->getResult();
    }
}
