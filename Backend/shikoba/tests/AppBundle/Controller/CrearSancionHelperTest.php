<?php

use AppBundle\Services\CrearSancionHelper;
use Symfony\Bundle\FrameworkBundle\Test\KernelTestCase;

class CrearSancionHelperTest extends KernelTestCase
{

    private $container;
    /** @var  CrearSancionHelper $crearSancionHelper */
    private $crearSancionHelper;

    public function setUp()
    {
        self::bootKernel();

        $this->container = self::$kernel->getContainer();
        $this->crearSancionHelper = $this->container->get('app.crearSancionHelper');
    }

    public function testIndex()
    {
        $fecha = new DateTime();
        $fecha->setTime(8, 0);
        $this->assertEquals(1, $this->crearSancionHelper->getHoraFromDate($fecha));
        $fecha->setTime(14, 41);
        $this->assertEquals(1, $this->crearSancionHelper->getHoraFromDate($fecha));
        $fecha->setTime(15, 55);
        $this->assertEquals(1, $this->crearSancionHelper->getHoraFromDate($fecha));
        $fecha->setTime(9, 15);
        $this->assertEquals(2, $this->crearSancionHelper->getHoraFromDate($fecha));
        $fecha->setTime(10, 15);
        $this->assertEquals(3, $this->crearSancionHelper->getHoraFromDate($fecha));
        $fecha->setTime(11, 15);
        $this->assertEquals(3, $this->crearSancionHelper->getHoraFromDate($fecha));
        $fecha->setTime(11, 35);
        $this->assertEquals(3, $this->crearSancionHelper->getHoraFromDate($fecha));
        $fecha->setTime(11, 40);
        $this->assertEquals(4, $this->crearSancionHelper->getHoraFromDate($fecha));
        $fecha->setTime(11, 50);
        $this->assertEquals(4, $this->crearSancionHelper->getHoraFromDate($fecha));
        $fecha->setTime(12, 25);
        $this->assertEquals(4, $this->crearSancionHelper->getHoraFromDate($fecha));
        $fecha->setTime(12, 40);
        $this->assertEquals(5, $this->crearSancionHelper->getHoraFromDate($fecha));
        $fecha->setTime(13, 15);
        $this->assertEquals(5, $this->crearSancionHelper->getHoraFromDate($fecha));
        $fecha->setTime(13, 40);
        $this->assertEquals(6, $this->crearSancionHelper->getHoraFromDate($fecha));
        $fecha->setTime(14, 0);
        $this->assertEquals(6, $this->crearSancionHelper->getHoraFromDate($fecha));
        $fecha->setTime(14, 39);
        $this->assertEquals(6, $this->crearSancionHelper->getHoraFromDate($fecha));
        $fecha->setTime(14, 40);
        $this->assertEquals(6, $this->crearSancionHelper->getHoraFromDate($fecha));
        $fecha->setTime(14, 41);
        $this->assertEquals(1, $this->crearSancionHelper->getHoraFromDate($fecha));
    }
}
