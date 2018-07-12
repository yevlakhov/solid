<?php

require_once 'Car.php';
require_once 'Engine.php';
require_once 'ElectricEngine.php';
require_once 'TeslaEngine.php';

$engine = new TeslaEngine();
$car = new Car($engine);
$car->start();
$car->checkCharge();