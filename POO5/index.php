<?php

    require_once 'Bicycle.php';
    require_once 'Car.php';
    require_once 'Truck.php';
    require_once 'HighWay.php';
    require_once 'PedestrianWay.php';
    require_once 'ResidentialWay.php';
    require_once 'MotorWay.php';
    require_once 'LightableInterface.php';
    require_once 'Skateboard.php';


    $truck = new Truck(250,0,'yellow',3);

    $skate = new Skateboard('red',1);

    $bicycle = new Bicycle('blue', 1);
    $cyclette = new Bicycle('yellow',2);

    $car = new Car('green', 4, 'electric');
    $vehicle = new Vehicle('blue', 4);
    $tesla = new Car('black', 4, 'electric');
    $ferrari = new Car('red', 2, 'electric');

    $motorWay = new MotorWay();
    $motorWay->addVehicle($car);
    $motorWay->addVehicle($tesla);

    $pedestrianWay = new PedestrianWay();
    $pedestrianWay->addVehicle($bicycle);

/*
    try {
        $car->start();
    } catch (Exception $e) {
        $car->setHasParkBrake(false);
    }finally {
        echo "Ma voiture roule comme un donut";
    }
*/

   $tesla-> switchOff();
   $cyclette->setCurrentSpeed(12);
   $cyclette-> switchOn();

