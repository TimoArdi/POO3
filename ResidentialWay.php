<?php


final class ResidentialWay extends HighWay
{
    /**
     * @var integer
     */
    protected $nbLane = 2;
    /**
     * @var integer
     */
    protected $maxSpeed = 50;

    public function addVehicle(Vehicle $new)
    {
        array_push($this->currentVehicles, $new);
    }
}