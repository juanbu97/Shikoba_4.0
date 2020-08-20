<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'twig.loader' shared service.

$this->services['twig.loader'] = $instance = new \Symfony\Bundle\TwigBundle\Loader\FilesystemLoader(${($_ = isset($this->services['templating.locator']) ? $this->services['templating.locator'] : $this->load(__DIR__.'/getTemplating_LocatorService.php')) && false ?: '_'}, ${($_ = isset($this->services['templating.name_parser']) ? $this->services['templating.name_parser'] : $this->services['templating.name_parser'] = new \Symfony\Bundle\FrameworkBundle\Templating\TemplateNameParser(${($_ = isset($this->services['kernel']) ? $this->services['kernel'] : $this->get('kernel')) && false ?: '_'})) && false ?: '_'}, $this->targetDirs[3]);

$instance->addPath(($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle/Resources/views'), 'Framework');
$instance->addPath(($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle/Resources/views'), '!Framework');
$instance->addPath(($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\SecurityBundle/Resources/views'), 'Security');
$instance->addPath(($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\SecurityBundle/Resources/views'), '!Security');
$instance->addPath(($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views'), 'Twig');
$instance->addPath(($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views'), '!Twig');
$instance->addPath(($this->targetDirs[3].'\\vendor\\symfony\\swiftmailer-bundle/Resources/views'), 'Swiftmailer');
$instance->addPath(($this->targetDirs[3].'\\vendor\\symfony\\swiftmailer-bundle/Resources/views'), '!Swiftmailer');
$instance->addPath(($this->targetDirs[3].'\\vendor\\doctrine\\doctrine-bundle/Resources/views'), 'Doctrine');
$instance->addPath(($this->targetDirs[3].'\\vendor\\doctrine\\doctrine-bundle/Resources/views'), '!Doctrine');
$instance->addPath(($this->targetDirs[3].'\\vendor\\knplabs\\knp-paginator-bundle/Resources/views'), 'KnpPaginator');
$instance->addPath(($this->targetDirs[3].'\\vendor\\knplabs\\knp-paginator-bundle/Resources/views'), '!KnpPaginator');
$instance->addPath(($this->targetDirs[3].'\\app/Resources/views'));
$instance->addPath(($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Bridge\\Twig/Resources/views/Form'));

return $instance;
