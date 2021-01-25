<?php


namespace Vehicles;


class Motorcycle extends Vehicle
{
    private $type;
    private $year;

    public function __construct($make, $model, $type, $year)
    {
        parent::__construct($make, $model);

        $this -> type = $type;
        $this->year = $year;
    }

    public function getVehicleData()
    {
        return $vehicleData = [
            $this->make,
            $this->model,
            $this -> type,
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