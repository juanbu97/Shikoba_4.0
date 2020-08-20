<?php
/**
 * @User: Guillermo Boquizo Sánchez (GUBS), Rafael García Zurita (RAGZ).
 * @File: AlumnoRepository.php
 * @Updated: 2019
 * @Description: Repositorio de alumno.
 * @license http://opensource.org/licenses/gpl-license.php  GNU Public License
 */
namespace AppBundle\Repository;

use AppBundle\Entity\Alumno;
use AppBundle\Entity\Cursos;
use AppBundle\Entity\Tutores;
use Doctrine\ORM\EntityRepository;

/**
 * Class AlumnoRepository
 * @package AppBundle\Repository
 */
class AlumnoRepository extends EntityRepository
{


    /**
     * Permite obtener un alumno por id de usuario.
     * @param int $userId el id del usuario.
     * @return mixed
     * @throws \Doctrine\ORM\NoResultException
     * @throws \Doctrine\ORM\NonUniqueResultException
     */
    public function getAlumno($userId)
    {
        return $this->getEntityManager()
            ->createQueryBuilder()
            ->select("a")
            ->from("AppBundle:Alumno", "a")
            ->where("a.id = :id")
            ->setParameter("id", $userId)
            ->getQuery()
            ->getSingleResult();
    }

    /**
     * Función que devuelve los alumnos por curso
     * @param Cursos $curso el curso del alumno.
     * @return array un array de resultados.
     */
    public function getAlumnosByCurso(Cursos $curso)
    {
        $query = $this->getEntityManager()->createQuery(
            'SELECT a
           FROM AppBundle\Entity\Alumno a
           WHERE a.idCurso = :curso'
        );

        $query->setParameter('curso', $curso->getId());
        return $query->getResult();
    }

    /**
     * Función que devuelve los alumnos ordenados por puntos
     * @return array un array de resultados.
     */
    public function getAlumnoOrderByPuntos()
    {
        $query = $this->getEntityManager()->createQuery(
            'SELECT a
           FROM AppBundle\Entity\Alumno a
           ORDER BY a.puntos DESC'
        );

        return $query->getResult();
    }

    /**
     * Función que devuelve los alumnos ordenados por puntos, y que coincidan con el parámetro
     * @param string $string la cadena a comprobar.
     * @return array un array de resultados.
     */
    public function getAlumnosLike($string)
    {
        $query = $this->getEntityManager()->createQuery(
            'SELECT a
           FROM AppBundle\Entity\Alumno a
           JOIN a.idCurso as curso
           WHERE a.nombre LIKE :string OR a.apellido1 LIKE :string
           OR a.apellido2 LIKE :string OR a.puntos LIKE :string
           OR curso.grupo LIKE :string
           OR (
           SELECT count(s.sancion) FROM AppBundle\Entity\Sanciones s 
           WHERE s.idAlumno = a.id AND s.sancion LIKE :string
           ) > 0
           ORDER BY a.puntos DESC'
        );
        $query->setParameter('string', '%' . $string . '%');

        return $query->getResult();
    }

    /**
     * Función que devuelve un array con los alumnos que tengas los puntos del parámetro
     * @param int $puntos los puntos del alumno.
     * @param Alumno $alumnos el alumno.
     * @return array un array de resultados
     */
    public function findByPuntosAndAlumnos($puntos, $alumnos)
    {
        $arrAlumnos = [];
        $arrAlumnosFiltrados = [];

        /** @var Alumno $alumno */
        foreach ($alumnos as $alumno) {
            $query = $this->getEntityManager()->createQueryBuilder()
                ->select('a')
                ->from('AppBundle:Alumno', 'a')
                ->where('a.id = :idAlumno')
                ->andWhere('a.puntos = :puntos');
            $query->setParameter('puntos', $puntos);
            $query->setParameter('idAlumno', $alumno->getId());
            $arrAlumnos[] = $query->getQuery()->getResult();
        }
        foreach ($arrAlumnos as $alumnosFiltrados) {
            foreach ($alumnosFiltrados as $alumnoFiltrado)
                $arrAlumnosFiltrados[] = $alumnoFiltrado;
        }

        return $arrAlumnosFiltrados;
    }

    /**
     * Función que devuelve los alumnos de un tutor
     * @param Tutores $tutor los tutores
     * @return array un array de resultados.
     */
    public function getAlumnosByTutor(Tutores $tutor){
        $query = $this->getEntityManager()->createQuery(
            'SELECT a
                 FROM AppBundle\Entity\Alumno a
                 JOIN a.idTutor as tutor
                 WHERE tutor.id = :tutor');

        $query->setParameter('tutor', $tutor->getId());
        return $query->getResult();
    }


    /**
     * Función que devuelve los alumnos por curso y tutor docente
     * @param int $id el id del tutor docente.
     * @return array un array de resultados.
     */
    public function getAlumnosByCursoYTutorD($id)
    {
        $query = $this->getEntityManager()->createQuery(
            'SELECT A FROM AppBundle\Entity\Alumno AS A, 
                    AppBundle\Entity\Cursos AS C, 
                    AppBundle\Entity\Profesores AS P 
                    WHERE P.idUsuario=:tutorD AND P.id=C.idTutor AND C.id=A.idCurso'
        );

        $query->setParameter('tutorD', $id);
        return $query->getResult();
    }
}
