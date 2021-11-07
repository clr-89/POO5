<?php
require_once 'HighWay.php';
final class PedestrianWay extends HighWay
{
    protected int $nbLane= 1;
    protected int $maxSpeed= 10;

    public function addVehicle(Vehicle$Vehicle)
    {
        if ($Vehicle instanceof Bicycle || $Vehicle instanceof Skateboard) {
            $this->currentVehicles[] = $Vehicle;

        }
    }
}