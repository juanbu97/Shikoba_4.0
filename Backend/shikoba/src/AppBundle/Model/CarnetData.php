<?php

/**
 * @User: Guillermo Boquizo Sánchez (GUBS), Rafael García Zurita (RAGZ).
 * @File: CarnetData.php
 * @Updated: 2019
 * @Description: Modelo de datos para los carnets.
 * @license http://opensource.org/licenses/gpl-license.php  GNU Public License
 */
namespace AppBundle\Model;

use AppBundle\Entity\Alumno;

/**
 * Class CarnetData.
 */
class CarnetData
{
    /**
     * CarnetData constructor de la clase.
     * @param Alumno $alumno el alumno del carnet
     * @param $arraySanciones
     */
    public function __construct(Alumno $alumno, $arraySanciones = null)
    {
        $this->alumno = $alumno;
        $this->arraySanciones = $arraySanciones;
    }

    /**
     * Permite obtener el alumno.
     * @return Alumno el alumno a obtener
     */
    public function getAlumno()
    {
        return $this->alumno;
    }

    /**
     * Permite obtener las sanciones del carnet del alumno.
     * @return null ArraySanciones a obtener
     */
    public function getArraySanciones()
    {
        return $this->arraySanciones;
    }
}
