<?php
/**
 * @User: Guillermo Boquizo Sánchez (GUBS), Rafael García Zurita (RAGZ).
 * @File: PartesRepository.php
 * @Updated: 2019
 * @Description: Repositorio para la gestión de los partes.
 *
 * @license http://opensource.org/licenses/gpl-license.php  GNU Public License
 */

namespace AppBundle\Repository;

use AppBundle\Entity\Alumno;
use AppBundle\Entity\Profesores;
use AppBundle\Entity\Cursos;
use Doctrine\ORM\EntityRepository;
use Exception;

//use AppBundle\AppBundle;
//use AppBundle\Entity\Partes;
//use Doctrine\ORM\Tools\Pagination\Paginator;
//use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;

/**
 * Class PartesRepository.
 */
class PartesRepository extends EntityRepository
{
    /**
     * Función que devuelve los partes que estan en estado Comunicado, pueden ser ordenados por fecha.
     *
     * @param $estado
     * @param $sortDate
     *
     * @return array
     */
    public function getPartesByEstado($estado = 'Comunicado', $sortDate = true)
    {
        if (!$sortDate) {
            $query = $this->getEntityManager()->createQuery(
                'SELECT p 
             FROM AppBundle\Entity\Partes p
             WHERE p.idEstado IN 
             (SELECT e.id 
             FROM AppBundle\Entity\EstadosParte e
             WHERE e.estado = :estado)'
            );
        } else {
            $query = $this->getEntityManager()->createQuery(
                'SELECT p 
             FROM AppBundle\Entity\Partes p
             WHERE p.idEstado IN 
             (SELECT e.id   
             FROM AppBundle\Entity\EstadosParte e
             WHERE e.estado = :estado)
             ORDER BY p.fecha DESC'
            );
        }
        $query->setParameter('estado', $estado);

        return $query->getResult();
    }

    /**
     * Función que devuelve los partes de un alumno ordenados por fecha.
     *
     * @param Alumno $alumno
     * @param $orderDesc
     *
     * @return array
     */
    public function getPartesByAlumnoOrdenado(Alumno $alumno, $orderDesc = false)
    {
        $query = $this->getEntityManager()->createQueryBuilder()
            ->select('p')
            ->from('AppBundle:Partes', 'p')
            ->where('p.idAlumno = :alumno');

        if (!$orderDesc) {
            $query->orderBy('p.fecha');
        } else {
            $query->orderBy('p.fecha', 'DESC');
        }
        $query->setParameter('alumno', $alumno);

        return $query->getQuery()->getResult();
    }

    /**
     * Función que devuelve los partes de un profesor.
     *
     * @param Profesores $profesor
     *
     * @return array
     */
    public function getPartesByProfesor(Profesores $profesor)
    {
        $query = $this->getEntityManager()->createQueryBuilder()
            ->select('p')
            ->from('AppBundle:Partes', 'p')
            ->where('p.idProfesor = :profesor');
        $query->orderBy('p.fecha');

        $query->setParameter('profesor', $profesor);

        return $query->getQuery()->getResult();
    }

    /**
     * Función que devuelve los partes de un curso.
     *
     * @param Cursos $curso
     *
     * @return array
     */
    public function getPartesByCurso(Cursos $curso)
    {
        $query = $this->getEntityManager()->createQueryBuilder()
            ->select('p')
            ->from('AppBundle:Partes', 'p')
            ->where('p.grupo = :curso');
        $query->orderBy('p.fecha');

        $query->setParameter('curso', $curso);

        return $query->getQuery()->getResult();
    }

    /**
     * Función que devuelve todos los partes ordenados por fecha.
     *
     * @param bool $historico
     *
     * @return array
     */
    public function getPartesOrdenados($historico = false)
    {
        if (!$historico) {
            $query = $this->createQueryBuilder('partes');
            $query->select('partes');
            $query->join('partes.idEstado', 'estado');
        // $query->where('estado.estado != 'Caducado' ');
        } else {
            $query = $this->createQueryBuilder('partes');
            $query->select('partes');
        }
        $query->orderBy('partes.fecha', 'DESC');
        $query->addOrderBy('partes.id', 'DESC');
        $query = $query->getQuery();

        return $query->getResult();

//        return $query->getResult();
    }

    /**
     * Función que devuelve un parte por id.
     *
     * @param $id
     * @throws Exception
     * @return mixed
     */
    public function getParteById($id)
    {
        return $this->getEntityManager()
            ->createQueryBuilder()
            ->select('p')
            ->from('AppBundle:Partes', 'p')
            ->where('p.id = :id')
            ->setParameter('id', $id)
            ->getQuery()
            ->getSingleResult();
    }

    /**
     * Función que devuelve los partes que contienen la cadena pasada por parámetro.
     *
     * @param $string
     * @param bool $historico
     *
     * @return array
     */
    public function getPartesLike($string, $historico = false)
    {
        if ('' == $string) {
            return $this->getPartesOrdenados($historico);
        }
        if (!$historico) {
            $query = $this->getEntityManager()->createQuery(
                "SELECT p
             FROM AppBundle\Entity\Partes p
             JOIN p.idAlumno as alumno
             JOIN p.idProfesor as profesor
             JOIN p.idTipo as tipo
             JOIN p.idEstado as estado
             JOIN alumno.idCurso as curso
             WHERE ((YEAR(p.fecha) = :stringFecha2 AND MONTH(p.fecha) = :stringFecha1
             AND DAY(p.fecha) = :stringFecha0) OR alumno.nombre LIKE :string
             OR profesor.nombre LIKE :string OR tipo.tipo LIKE :string
             OR curso.grupo LIKE :string OR estado.estado LIKE :string)
             AND estado.estado != 'Caducado'
             ORDER BY p.fecha DESC, p.id DESC"
            );
        } else {
            $query = $this->getEntityManager()->createQuery(
                "SELECT p
             FROM AppBundle\Entity\Partes p
             JOIN p.idAlumno as alumno
             JOIN p.idProfesor as profesor
             JOIN p.idTipo as tipo
             JOIN p.idEstado as estado
             JOIN alumno.idCurso as curso
             WHERE ((YEAR(p.fecha) = :stringFecha2 AND MONTH(p.fecha) = :stringFecha1
             AND DAY(p.fecha) = :stringFecha0) OR alumno.nombre LIKE :string
             OR profesor.nombre LIKE :string OR tipo.tipo LIKE :string
             OR curso.grupo LIKE :string OR estado.estado LIKE :string)
             ORDER BY p.fecha DESC, p.id DESC"
            );
        }
        $query->setParameter('string', '%'.$string.'%');

        $fecha = explode('/', $string);
        for ($i = 0; $i < 3; ++$i) {
            if (count($fecha) >= ($i + 1)) {
                $query->setParameter('stringFecha'.$i, $fecha[$i]);
            } else {
                $query->setParameter('stringFecha'.$i, '');
            }
        }

        return $query->getResult();
    }

    /**
     * Función que devuelve los partes a exportar.
     *
     * @param $fechas
     * @param $alumnos
     * @param $profesores
     *
     * @return array
     */
    public function getPartesExportar($fechas, $alumnos, $profesores, $curso)
    {
        $partesAlumno = [];
        foreach ($alumnos as $alumno) {
            $partesAlumno[] = $this->getPartesByAlumnoOrdenado($alumno);
        }
        $partesProfesor = [];
        foreach ($profesores as $profesor) {
            $partesProfesor[] = $this->getPartesByProfesor($profesor);
        }
        $partesCurso = [];
        foreach ($curso as $cur) {
            $partesCurso[] = $this->getPartesByCurso($cur);
        }
        $fecha = explode(' a ', $fechas);
        $fechaIni = $fecha[0];
        $fechaFin = $fecha[1];

        $fechaIni = date_create_from_format('d/m/Y', $fechaIni);
        date_sub($fechaIni, date_interval_create_from_date_string('1 day'));
        $fechaFin = date_create_from_format('d/m/Y', $fechaFin);

        $query = $this->getEntityManager()->createQuery(
            "SELECT p
             FROM AppBundle\Entity\Partes p
             WHERE (p.fecha BETWEEN :fechaIni AND :fechaFin)"
        );
        $query->setParameter(':fechaIni', $fechaIni);
        $query->setParameter(':fechaFin', $fechaFin);
        $partesFecha = $query->getResult();
        $partesExportar = [];
        $partesExportar2 = [];
        $partesExportarFinal = [];
        $partesExportarFinal2 = [];

        $partesAlumnosSelec = [];
        $partesProfesorSelec = [];
        $partesCursosSelec = [];
        foreach ($partesAlumno as $parteAlumno) {
            foreach ($parteAlumno as $value) {
                $partesAlumnosSelec[] = $value;
            }
        }

        foreach ($partesProfesor as $parteProfesor) {
            foreach ($parteProfesor as $value) {
                $partesProfesorSelec[] = $value;
            }
        }

        foreach ($partesCurso as $parteCurso) {
            foreach ($parteCurso as $value) {
                $partesCursosSelec[] = $value;
            }
        }

        foreach ($partesAlumnosSelec as $parteAlumno) {
            foreach ($partesProfesorSelec as $parteProfesor) {
                if ($parteAlumno->getId() == $parteProfesor->getId()) {
                    $partesExportar[] = $parteAlumno;
                }
            }
        }

        foreach ($partesAlumnosSelec as $parteAlumno) {
            foreach ($partesFecha as $parteFecha) {
                if ($parteAlumno->getId() == $parteFecha->getId()) {
                    $partesExportar2[] = $parteAlumno;
                }
            }
        }

        foreach ($partesExportar as $parteExportar) {
            foreach ($partesExportar2 as $parteExportar2) {
                if ($parteExportar->getId() == $parteExportar2->getId()) {
                    $partesExportarFinal[] = $parteExportar;
                }
            }
        }

        foreach ($partesExportarFinal as $parteExportarFinal) {
            foreach ($partesCursosSelec as $parteCursoSelec) {
                if ($parteExportarFinal->getId() == $parteCursoSelec->getId()) {
                    $partesExportarFinal2[] = $parteExportarFinal;
                }
            }
        }

        return $partesExportarFinal2;
    }

    /**
     * Función que devuelve el informe de partes de los alumnos.
     *
     * @param $fechaInicial, la fecha inicial
     * @param $fechaFinal, la fecha final
     *
     * @return array $result, el resultado del informe
     *
     * @throws
     */
    public function getInformePartesAlumnos($fechaInicial, $fechaFinal)
    {
        $stmt = $this->getEntityManager()
            ->getConnection()
            ->prepare('CALL `estPartesAlumnado`(:fechaInicial, :fechaFinal);');
        $stmt->bindParam(':fechaInicial', $fechaInicial);
        $stmt->bindParam(':fechaFinal', $fechaFinal);
        $stmt->execute();

        return $stmt->fetchAll();
    }

    /**
     * Función que devuelve el informe de partes de los profesores.
     *
     * @param $fechaInicial, la fecha inicial
     * @param $fechaFinal, la fecha final
     *
     * @return array $query, el resultado del informe
     *
     * @throws
     */
    public function getInformePartesProfesorado($fechaInicial, $fechaFinal)
    {
        $query = $this->getEntityManager()
            ->getConnection()
            ->prepare('CALL estPartesProfesorado(:fecha1,:fecha2)');
        $query->bindParam(':fecha1', $fechaInicial);
        $query->bindParam(':fecha2', $fechaFinal);
        $query->execute();

        return $query->fetchAll();
    }

    /**
     * Función que devuelve el informe de partes de los grupos.
     *
     * @param $fechaInicial, la fecha inicial
     * @param $fechaFinal, la fecha final
     *
     * @return array $query, el resultado del informe
     *
     * @throws
     */
    public function getInformePartesGrupo($fechaInicial, $fechaFinal)
    {
        $query = $this->getEntityManager()
            ->getConnection()
            ->prepare('CALL estPartesGrupos(:fecha1,:fecha2)');
        $query->bindParam(':fecha1', $fechaInicial);
        $query->bindParam(':fecha2', $fechaFinal);
        $query->execute();

        return $query->fetchAll();
    }
}
