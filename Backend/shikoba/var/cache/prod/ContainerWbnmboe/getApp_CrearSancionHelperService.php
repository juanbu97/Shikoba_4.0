<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'app.crearSancionHelper' shared autowired service.

return $this->services['app.crearSancionHelper'] = new \AppBundle\Services\CrearSancionHelper(${($_ = isset($this->services['doctrine.orm.default_entity_manager']) ? $this->services['doctrine.orm.default_entity_manager'] : $this->load(__DIR__.'/getDoctrine_Orm_DefaultEntityManagerService.php')) && false ?: '_'});