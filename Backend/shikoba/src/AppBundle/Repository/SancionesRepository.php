<?php
/**
 * @User: Guillermo Boquizo Sánchez (GUBS), Rafael García Zurita (RAGZ).
 * @File: SancionesRepository.php
 * @Updated: 2019
 * @Description: Repositorio para la gestión de las sanciones.
 *
 * @license http://opensource.org/licenses/gpl-license.php  GNU Public License
 */

namespace AppBundle\Repository;

use AppBundle\Entity\Alumno;
use AppBundle\Entity\Partes;
use AppBundle\Entity\TipoSancion;
use Doctrine\ORM\EntityRepository;
use Exception;

/**
 * Class SancionesRepository.
 */
class SancionesRepository extends EntityRepository
{
    /**
     * Función que devuelve las Sanciones por estado.
     *
     * @param string $estado
     * @param $sortDate
     *
     * @return array
     */
    public function getSancionesPorEstado($estado = 'Iniciada', $sortDate = true)
    {
        if ($sortDate) {
            $query = $this->getEntityManager()->createQuery(
                'SELECT s
                 FROM AppBundle\Entity\Sanciones s
                 WHERE s.idEstado in 
                 (SELECT e.id
                  FROM AppBundle\Entity\EstadosSancion e
                  WHERE e.estado = :estado)
                 ORDER BY s.fecha DESC'
            );
        } else {
            $query = $this->getEntityManager()->createQuery(
                'SELECT s
               FROM AppBundle\Entity\Sanciones s
               WHERE s.idEstado in 
               (SELECT e.id
                FROM AppBundle\Entity\EstadosSancion e
                WHERE e.estado = :estado)'
            );
        }
        $query->setParameter('estado', $estado);

        return $query->getResult();
    }

    /**
     * Función que devuelve las sanciones ordenadas por fecha.
     *
     * @return array
     */
    public function getSancionesOrdenadas($historico = false)
    {
        if (!$historico) {
            $query = $this->getEntityManager()->createQuery(
                /*"SELECT s
                 FROM AppBundle\Entity\Sanciones s
                 JOIN s.idEstado as estado
                 WHERE estado.estado != 'Finalizada'
                 ORDER BY s.fecha DESC, s.id DESC"*/
                "SELECT s
                 FROM AppBundle\Entity\Sanciones s
                 JOIN s.idEstado as estado
                 ORDER BY s.fecha DESC, s.id DESC"
            );
        } else {
            $query = $this->getEntityManager()->createQuery(
                'SELECT s
                 FROM AppBundle\Entity\Sanciones s
                 ORDER BY s.fecha DESC, s.id DESC'
            );
        }

        return $query->getResult();
    }

    /**
     * Función que devuelve las sanciones de un alumno ordenados por fecha.
     *
     * @param Alumno $alumno
     * @param $orderDesc
     *
     * @return array
     */
    public function getSancionesByAlumnoOrdenado(Alumno $alumno, $orderDesc = false)
    {
        $query = $this->getEntityManager()
            ->createQueryBuilder()
            ->select('s')
            ->from('AppBundle:Sanciones', 's')
            ->where('s.idAlumno = :alumno');

        if (!$orderDesc) {
            $query->orderBy('s.fecha');
        } else {
            $query->orderBy('s.fecha', 'DESC');
        }

        $query->setParameter('alumno', $alumno);

        return $query->getQuery()->getResult();
    }

    /**
     * Función que devuelve las sanciones de un tipo ordenadas por fecha.
     *
     * @param TipoSancion $tipo
     *
     * @return array
     */
    public function getSancionesByTipo(TipoSancion $tipo)
    {
        $query = $this->getEntityManager()->createQueryBuilder()
            ->select('s')
            ->from('AppBundle:Sanciones', 's')
            ->where('s.idTipo = :tipo');
        $query->orderBy('s.fecha');

        $query->setParameter('tipo', $tipo);

        return $query->getQuery()->getResult();
    }

    /**
     * Función que devuelve las sanciones que contienen la cadena pasada por parámetro.
     *
     * @param $string
     * @param $historico
     *
     * @return array
     */
    public function getSancionesLike($string, $historico = false)
    {
        if ('' == $string) {
            return $this->getSancionesOrdenadas($historico);
        }
        if (!$historico) {
            $query = $this->getEntityManager()->createQuery(
                "SELECT s
             FROM AppBundle\Entity\Sanciones s
             JOIN s.idAlumno as alumno
             JOIN s.idTipo as tipo
             JOIN s.idEstado as estado
             WHERE ((YEAR(s.fecha) = :stringFecha2 AND MONTH(s.fecha) = :stringFecha1
             AND DAY(s.fecha) = :stringFecha0) OR alumno.nombre LIKE :string
             OR tipo.tipo LIKE :string OR estado.estado LIKE :string)
             AND estado.estado = 'Finalizada'
             ORDER BY s.fecha DESC, s.id DESC"
            );
        } else {
            $query = $this->getEntityManager()->createQuery(
                "SELECT s
             FROM AppBundle\Entity\Sanciones s
             JOIN s.idAlumno as alumno
             JOIN s.idTipo as tipo
             JOIN s.idEstado as estado
             WHERE ((YEAR(s.fecha) = :stringFecha2 AND MONTH(s.fecha) = :stringFecha1
             AND DAY(s.fecha) = :stringFecha0) OR alumno.nombre LIKE :string
             OR tipo.tipo LIKE :string OR estado.estado LIKE :string)
             ORDER BY s.fecha DESC, s.id DESC"
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
     * Función que devuelve las sanciones no finalizadas de un alumno.
     *
     * @param Alumno $alumno
     *
     * @return array
     */
    public function getSancionesNoFinalizadas(Alumno $alumno)
    {
        $query = $this->getEntityManager()->createQuery(
            'SELECT s
                 FROM AppBundle\Entity\Sanciones s
                 WHERE s.idAlumno = :alumno AND s.idEstado IN
                  (SELECT e.id
                FROM AppBundle\Entity\EstadosSancion e
                WHERE e.estado != :estadoFinalizado)'
        );
        $query->setParameter('alumno', $alumno->getId());
        $query->setParameter('estadoFinalizado', 'Finalizada');

        return $query->getResult();
    }

    public function getSancionesByPartes(Partes $parte)
    {
        $query = $this->getEntityManager()->createQuery('SELECT s
                 FROM AppBundle\Entity\Sanciones s
                 JOIN s.idParte as parte
                 WHERE parte.id = :parte');

        $query->setParameter('parte', $parte->getId());

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
    public function getSancionesExportar($fechas, $alumnos, $tipos)
    {
        $sancionesAlumno = [];
        foreach ($alumnos as $alumno) {
            $sancionesAlumno[] = $this->getSancionesByAlumnoOrdenado($alumno);
        }
        $sancionesTipo = [];
        foreach ($tipos as $tipo) {
            $sancionesTipo[] = $this->getSancionesByTipo($tipo);
        }
        $fecha = explode(' a ', $fechas);
        $fechaIni = $fecha[0];
        $fechaFin = $fecha[1];

        $fechaIni = date_create_from_format('d/m/Y', $fechaIni);
        date_sub($fechaIni, date_interval_create_from_date_string('1 day'));
        $fechaFin = date_create_from_format('d/m/Y', $fechaFin);

        $query = $this->getEntityManager()->createQuery(
            "SELECT s
             FROM AppBundle\Entity\Sanciones s
             WHERE (s.fecha BETWEEN :fechaIni AND :fechaFin)"
        );
        $query->setParameter(':fechaIni', $fechaIni);
        $query->setParameter(':fechaFin', $fechaFin);
        $sancionesFecha = $query->getResult();
        $sancionesExportar = [];
        $sancionesExportar2 = [];
        $sancionesExportarFinal = [];
        $sancionesAlumnosSelec = [];
        $sancionesTipoSelec = [];
        foreach ($sancionesAlumno as $sancionAlumno) {
            foreach ($sancionAlumno as $value) {
                $sancionesAlumnosSelec[] = $value;
            }
        }

        foreach ($sancionesTipo as $sancionTipo) {
            foreach ($sancionTipo as $value) {
                $sancionesTipoSelec[] = $value;
            }
        }

        foreach ($sancionesAlumnosSelec as $sancionAlumno) {
            foreach ($sancionesTipoSelec as $sancionTipo) {
                if ($sancionAlumno->getId() == $sancionTipo->getId()) {
                    $sancionesExportar[] = $sancionAlumno;
                }
            }
        }

        foreach ($sancionesAlumnosSelec as $sancionAlumno) {
            foreach ($sancionesFecha as $sancionFecha) {
                if ($sancionAlumno->getId() == $sancionFecha->getId()) {
                    $sancionesExportar2[] = $sancionAlumno;
                }
            }
        }

        foreach ($sancionesExportar as $sancionExportar) {
            foreach ($sancionesExportar2 as $sancionExportar2) {
                if ($sancionExportar->getId() == $sancionExportar2->getId()) {
                    $sancionesExportarFinal[] = $sancionExportar;
                }
            }
        }

        return $sancionesExportarFinal;
    }

    /**
     * Función que devuelve el informe de las sanciones de la alumnos.
     *
     * @param $fechaInicial , la fecha inicial
     * @param $fechaFinal , la fecha final
     *
     * @throws Exception
     *
     * @return array, el resultado del informe
     */
    public function getInformeSancionesAlumnos($fechaInicial, $fechaFinal)
    {
        $query = $this->getEntityManager()
            ->getConnection()
            ->prepare('CALL estSancionesAlumnadoGrupo(:fecha1,:fecha2)');
        $query->bindParam(':fecha1', $fechaInicial);
        $query->bindParam(':fecha2', $fechaFinal);
        $query->execute();

        return $query->fetchAll();
    }
}
