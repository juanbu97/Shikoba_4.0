<?php
/**
 * @User: Guillermo Boquizo Sánchez (GUBS), Rafael García Zurita (RAGZ).
 * @File: DiarioData.php
 * @Updated: 2019
 * @Description: Modelo de datos para los diarios.
 * @license http://opensource.org/licenses/gpl-license.php  GNU Public License
 */

namespace AppBundle\Model;

use Exception;
use DateTime;

/**
 * Class DiarioData.
 */
class DiarioData
{
    /**
     * DiarioData constructor.
     * @param $diariosAula
     * @param $horas
     * @param $horasElegidas
     * @param DateTime|null $fecha
     */
    public function __construct($diariosAula, $horas, $horasElegidas, DateTime $fecha = null)
    {
        $this->diariosAula = $diariosAula;
        $this->horas = $horas;
        $this->horasElegidas = $horasElegidas;
        $this->fecha = $fecha;
    }

    /**
     * Permite obtener los diarios del aula.
     * @return mixed
     */
    public function getDiariosAula()
    {
        return $this->diariosAula;
    }

    /**
     * Permite obtener la fecha.
     * @return DateTime
     * @throws Exception
     */
    public function getFecha()
    {
        if (null == $this->fecha) {
            return new Datetime();
        }
        return $this->fecha;
    }

    /**
     * Permite obtener las horas elegidas.
     * @return mixed
     */
    public function getHorasElegidas()
    {
        return $this->horasElegidas;
    }

    /**
     * Permite obtener las horas.
     * @return mixed
     */
    public function getHoras()
    {
        return $this->horas;
    }
}
