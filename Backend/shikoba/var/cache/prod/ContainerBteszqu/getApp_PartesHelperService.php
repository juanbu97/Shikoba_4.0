<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'app.partesHelper' shared autowired service.

return $this->services['app.partesHelper'] = new \AppBundle\Services\PartesHelper(${($_ = isset($this->services['doctrine.orm.default_entity_manager']) ? $this->services['doctrine.orm.default_entity_manager'] : $this->load(__DIR__.'/getDoctrine_Orm_DefaultEntityManagerService.php')) && false ?: '_'}, ${($_ = isset($this->services['app.crearSancionHelper']) ? $this->services['app.crearSancionHelper'] : $this->load(__DIR__.'/getApp_CrearSancionHelperService.php')) && false ?: '_'});
