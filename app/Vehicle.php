<?php

namespace Vehicles;
class Vehicle
{
    protected $brand;
    protected $model;
    protected $price;
    protected $weight;
    protected $engine;
    protected $maxSpeed;
    protected $seats;
    protected $description;


    public function __construct($brand, $model)
    {
        $this->brand = $brand;
        $this->model = $model;
    }

    public function getVehicleData()
    {
        return $vehicleData = [
            $this->brand,
            $this->model,
            $this->price,
            $this->weight,
            $this->engine,
            $this->maxSpeed,
            $this->seats,
            $this->description

        ];
    }

    public function addOtherVehicleData($price, $weight, $engine, $maxSpeed, $seats, $description)
    {
        $this->price = $price;
        $this->weight = $weight;
        $this->engine = $engine;
        $this->maxSpeed = $maxSpeed;
        $this->seats = $seats;
        $this->description = $description;

    }

}
