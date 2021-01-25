<?php


namespace Vehicles;


class Bicycle extends Vehicle
{
    private $pedals;

    public function __construct($brand, $model, $pedals)
    {
        parent::__construct($brand, $model);

        $this->pedals= $pedals;
    }

    public function getVehicleData()
    {
        return $vehicleData = [
            $this->brand,
            $this->model,
            $this -> pedals,
            $this->price,
            $this->weight,
            $this->engine,
            $this->maxSpeed,
            $this->seats,
            $this->description
        ];
    }

}