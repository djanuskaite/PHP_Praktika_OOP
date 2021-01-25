<?php


namespace Vehicles;


class Bicycle extends Vehicle
{
    private $numberOfGears;

    public function __construct($make, $model, $numberOfGears)
    {
        parent::__construct($make, $model);

        $this->numberOfGears= $numberOfGears;
    }

    public function getVehicleData()
    {
        return $vehicleData = [
            $this->make,
            $this->model,
            $this -> numberOfGears,
            $this->price,
            $this->weight,
            $this->engine,
            $this->maxSpeed,
            $this->seats,
            $this->description
        ];
    }

}