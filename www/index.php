<?php

$container = require('../application/bootstrap.php');

$router = FuzeWorks\Factory::getInstance()->router;
$router->route();