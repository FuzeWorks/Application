<?php

require_once('../vendor/autoload.php');

$configurator = new FuzeWorks\Configurator();

//$configurator->setDebugMode('23.75.345.200'); // enable for your remote IP

$configurator->setTimeZone('Europe/Amsterdam');
$configurator->setTempDirectory(dirname(__DIR__) . '/temp');
$configurator->setLogDirectory(dirname(__DIR__). '/log');

$container = $configurator->createContainer();

return $container;