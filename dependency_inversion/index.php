<?php

require_once 'Car.php';
require_once 'Engine.php';
require_once 'ElectricEngine.php';
require_once 'TeslaEngine.php';
require_once 'GasEngine.php';
require_once 'FordEngine.php';

$engine = new TeslaEngine();
$car = new Car($engine);
$car->start();
$car->checkCharge();

$engine2 = new FordEngine();
$car2 = new Car($engine2);
$car2->start();