<?php

/**
 * @User: Guillermo Boquizo Sánchez (GUBS), Rafael García Zurita (RAGZ), Josema.
 * @File: CopiaSeguridadController.php
 * @Date: 05/10/2017
 * @Time: 20:40
 * @Updated: 2019
 * @Description: Controlador de las copias de seguridad (por definir).
 * @license http://opensource.org/licenses/gpl-license.php  GNU Public License
 */
namespace AppBundle\Controller;

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Output\OutputInterface;

/**
 * Class CopiaSeguridadController.
 */
class CopiaSeguridadController extends Command
{
    protected function configure()
    {
        $this
            ->setName('demo:greet')
            ->setDescription('Greet someone')
            ->addArgument(
                'name',
                InputArgument::OPTIONAL,
                'Who do you want to greet?'
            )
            ->addOption(
                'yell',
                null,
                InputOption::VALUE_NONE,
                'If set, the task will yell in uppercase letters'
            );
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $name = $input->getArgument('name');
        if ($name) {
            $text = 'Hello '.$name;
        } else {
            $text = 'Hello';
        }

        if ($input->getOption('yell')) {
            $text = strtoupper($text);
        }

        $output->writeln($text);
    }
}
