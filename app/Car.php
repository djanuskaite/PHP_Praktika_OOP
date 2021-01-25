<?php


namespace Vehicles;


class Car extends Vehicle
{
    private $gearbox;
    private $year;

    public function __construct($brand, $model, $gearbox, $year)
    {
        parent::__construct($brand, $model);

        $this->gearbox = $gearbox;
        $this->year = $year;
    }

    public function getVehicleData()
    {
        return $vehicleData = [
            $this->brand,
            $this->model,
            $this -> gearbox,
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