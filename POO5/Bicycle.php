<?php

require_once 'Vehicle.php';
require_once 'LightableInterface.php';

    class Bicycle extends Vehicle implements LightableInterface
    {
        public function switchOn(): bool
        {
            $currentSpeed = $this -> getCurrentSpeed();
            if ($currentSpeed > 10){
                echo "Les feux de mon vélo sont allumés parce que la vitesse est de  $currentSpeed  km/h".PHP_EOL;
            }
            return true;
        }

        public function switchOff(): bool
        {
            echo "Les feux de mon vélo sont éteints ! ".PHP_EOL;
            return false;
        }


    };







