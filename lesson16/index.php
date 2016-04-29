<?php
ini_set('display_errors');
//include 'init.php';
include 'classes/Transport.php';
include 'classes/Car.php';

$transport = new Transport(100, 'km/h', 5, 5);
var_dump($transport);
$car1 = new Car(100, 'km/h', 5, 2, 'sedan');
$car2 = new Car(100, 'km/h', 5, 2, 'hatchback');

$ship = new Ship(34, 15, 30, 100);

var_dump($car1);
echo '<br>';

echo $car1->getFormatSpeed().'<br>';
echo $ship->getFormatSpeed().'<br>';
echo '<hr>';
//echo phpinfo();
echo $car1->body_type.'<br>';
//
//$car1->wheel = 'ddd';
//echo $car1->body_type.'<br>';
echo '<hr>';
$car1->new_prop = '3333';
echo $car1->new_prop."<br>";

$car1->getDistance(1,2,3,4,5);
echo $car1;
echo '<hr>';