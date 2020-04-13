<?php


final class PedestrianWay extends HighWay

{
    /**
     * @var integer
     */
    protected $nbLane = 1;
    /**
     * @var integer
     */
    protected $maxSpeed = 10;

    public function addVehicle(Vehicle $new)
    {
        if ($new instanceof Bicycle) {
            array_push($this->currentVehicles, $new);
        }
    }
}