<?php

require_once 'Car.php';

$car = new Car();

//echo $car->getHasParkBrake().'<br>';

try {
    $car->start();
} catch(Exception $e){
    echo $e->getMessage().'<br>';
    $car->setHasParkBrake(false);
} finally{
    echo 'Ma voiture roule comme un donut <br>';
}
