<?php
// index.php
require_once 'Bicycle.php';
require_once 'Car.php';
require_once 'HighWay.php';
require_once 'MotorWay.php';
require_once 'PedestrianWay.php';
require_once 'ResidentialWay.php';

$bike = new Bicycle('bleue',15);
$mustang = new Car('noire',2,'fuel');
$bmw = new Car('blanche',5,'electric');
$bicycle = new Bicycle('blue', 1);

$road66 = new MotorWay();
$road66->addVehicle($bmw);
$road66->addVehicle($bicycle);
echo '<pre>';
var_dump($road66);
echo '</pre>';
