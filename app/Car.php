<?php


namespace Vehicles;


class Car extends Vehicle
{
    private $drivenWheels;
    private $year;

    public function __construct($make, $model, $drivenWheels, $year)
    {
        parent::__construct($make, $model);

        $this->drivenWheels = $drivenWheels;
        $this->year = $year;
    }

    public function getVehicleData()
    {
        return $vehicleData = [
            $this->make,
            $this->model,
            $this -> drivenWheels,
            $this -> year,
            $this->price,
            $this->weight,
            $this->engine,
            $this->maxSpeed,
            $this->seats,
            $this->description
        ];
    }
}