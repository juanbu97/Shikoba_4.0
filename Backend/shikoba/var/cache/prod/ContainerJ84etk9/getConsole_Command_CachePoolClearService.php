<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'console.command.cache_pool_clear' shared service.

$this->services['console.command.cache_pool_clear'] = $instance = new \Symfony\Bundle\FrameworkBundle\Command\CachePoolClearCommand(${($_ = isset($this->services['cache.global_clearer']) ? $this->services['cache.global_clearer'] : $this->load(__DIR__.'/getCache_GlobalClearerService.php')) && false ?: '_'});

$instance->setName('cache:pool:clear');

return $instance;
