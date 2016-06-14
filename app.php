<?php

require __DIR__.'/vendor/autoload.php';

use AppBundle\Console\Command\GreetCommand;
use AppBundle\Console\Command\FooCommand;
use Symfony\Component\Console\Application;

$application = new Application();
$application->add(new GreetCommand());
$application->add(new FooCommand());
$application->run();
