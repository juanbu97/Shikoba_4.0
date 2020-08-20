<?php
/**
 * @User: Guillermo Boquizo Sánchez (GUBS), Rafael García Zurita (RAGZ), maze.
 * @File: DiarioData.php
 * @Date: 25/05/17
 * @Time: 20:01
 * @Updated: 2019
 * @Description: Modelo de datos para los usuarios.
 *
 * @license http://opensource.org/licenses/gpl-license.php  GNU Public License
 */

namespace AppBundle\Model;

use AppBundle\Entity\Alumno;
use Exception;
use DateTime;

/**
 * Class UserData.
 */
class UserData
{
    /**
     * UserData constructor de la clase.
     *
     * @param Alumno $alumno el alumno
     * @param $numPartes
     * @param $numSanciones
     * @param $numVisitasConvivencia
     * @param $numPartesMeses
     * @param $numSancionesMeses
     * @param $sanciones
     * @param $partes
     */
    public function __construct(
        Alumno $alumno,
        $numPartes,
        $numSanciones,
        $numVisitasConvivencia,
        $numPartesMeses,
        $numSancionesMeses,
        $sanciones,
        $partes
    ) {
        $this->alumno = $alumno;
        $this->numPartes = $numPartes;
        $this->numSanciones = $numSanciones;
        $this->numVisitasConvivencia = $numVisitasConvivencia;
        $this->numPartesMeses = $numPartesMeses;
        $this->numSancionesMeses = $numSancionesMeses;
        $this->sanciones = $sanciones;
        $this->partes = $partes;
    }

    /**
     * Permite obtener el alumno.
     *
     * @return Alumno el alumno
     */
    public function getAlumno()
    {
        return $this->alumno;
    }

    /**
     * Permite obtener el número de partes.
     *
     * @return mixed
     */
    public function getNumPartes()
    {
        return $this->numPartes;
    }

    /**
     * Permite obtener el número de sanciones.
     *
     * @return mixed
     */
    public function getNumSanciones()
    {
        return $this->numSanciones;
    }

    /**
     * Permite obtener el número de visitas al aula de convivencia.
     *
     * @return mixed
     */
    public function getNumVisitasConvivencia()
    {
        return $this->numVisitasConvivencia;
    }

    /**
     * Permite obtener el número de partes por meses.
     *
     * @return mixed
     */
    public function getNumPartesMeses()
    {
        return $this->numPartesMeses;
    }

    /**
     * Permite obtener el número de sanciones por meses.
     *
     * @return mixed
     */
    public function getNumSancionesMeses()
    {
        return $this->numSancionesMeses;
    }

    /**
     * Permite obtener el año.
     *
     * @return string
     *
     * @throws Exception
     */
    public function getYear()
    {
        $fecha = new DateTime();

        return $fecha->format('Y');
    }

    /**
     * Permite obtener los partes.
     *
     * @return mixed
     */
    public function getPartes()
    {
        return $this->partes;
    }

    /**
     * Permite obtener las sanciones.
     *
     * @return mixed
     */
    public function getSanciones()
    {
        return $this->sanciones;
    }
}
