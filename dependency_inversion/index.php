<?php

require_once 'Car.php';
require_once 'Engine.php';

$engine = new Engine();
$car = new Car($engine);
$car->start();