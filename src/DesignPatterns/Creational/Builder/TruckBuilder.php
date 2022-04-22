<?php

namespace App\DesignPatterns\Creational\Builder;

use App\DesignPatterns\Creational\Builder\Parts\Door;
use App\DesignPatterns\Creational\Builder\Parts\Engine;
use App\DesignPatterns\Creational\Builder\Parts\Truck;
use App\DesignPatterns\Creational\Builder\Parts\Wheel;
use App\DesignPatterns\Creational\Builder\Parts\Vehicule;

class TruckBuilder implements Builder
{

    private Truck $truck;
    public function createVehicle()
    {
        $this->truck = new Truck();
    }

    public function addWheel()
    {
        $this->truck->setPart('wheel1', new Wheel());
        $this->truck->setPart('wheel2', new Wheel());
        $this->truck->setPart('wheel3', new Wheel());
        $this->truck->setPart('wheel4', new Wheel());
        $this->truck->setPart('wheel5', new Wheel());
        $this->truck->setPart('wheel6', new Wheel());
    }

    public function addEngine()
    {
        $this->truck->setPart('truckEngine', new Engine());
    }

    public function addDoors()
    {
       $this->truck->setPart('right', new Door());
    }

    public function getVehicle(): Vehicule
    {
        return $this->truck;
    }
}