<?php

require_once 'Car.php';
require_once 'Bike.php';
require_once 'Truck.php';
require_once 'Skateboard.php';

require_once 'HighWay.php';
require_once 'MotorWay.php';
require_once 'PedestrianWay.php';
require_once 'ResidentialWay.php';

require_once 'ElectricBike.php';



/*
$audi = new Car('redwhine', 5, 'fuel');

$audi->switchOn();

$decath = new Bike('black', 1);


var_dump($decath->switchOn());
var_dump($audi->switchOn());
*/

$test = new ElectricBike('black', 2);
var_dump($test);