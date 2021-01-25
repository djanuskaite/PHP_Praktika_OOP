<?php


namespace Vehicles;


class Motorcycle extends Vehicle
{
    private $color;
    private $year;

    public function __construct($brand, $model, $color, $year)
    {
        parent::__construct($brand, $model);

        $this -> color = $color;
        $this->year = $year;
    }

    public function getVehicleData()
    {
        return $vehicleData = [
            $this->brand,
            $this->model,
            $this -> color,
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