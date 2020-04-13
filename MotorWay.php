<?php


final class MotorWay extends HighWay
{

    /**
     * @var integer
     */
    protected $nbLane = 4;
    /**
     * @var integer
     */
    protected $maxSpeed = 130;
    /**
     * @var array
     */
    public function addVehicle(Vehicle $new)
    {
        if ($new instanceof Car) {
            array_push($this->currentVehicles, $new);
        }
    }
}