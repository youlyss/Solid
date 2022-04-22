<?php

namespace App\DesignPatterns\Creational\Builder;

use App\DesignPatterns\Creational\Builder\Parts\Car;
use App\DesignPatterns\Creational\Builder\Parts\Door;
use App\DesignPatterns\Creational\Builder\Parts\Engine;
use App\DesignPatterns\Creational\Builder\Parts\Vehicule;
use App\DesignPatterns\Creational\Builder\Parts\Wheel;

class CarBuilder implements Builder
{

    private Car $car;

    public function addDoors()
    {
        $this->car->setPart('rightDoor', new Door());
        $this->car->setPart('leftDoor', new Door());
        $this->car->setPart('trunkLid', new Door());
    }

    public function addEngine()
    {
        $this->car->setPart('engine', new Engine());
    }

    public function addWheel()
    {
        $this->car->setPart('wheelLF', new Wheel());
        $this->car->setPart('wheelRF', new Wheel());
        $this->car->setPart('wheelLR', new Wheel());
        $this->car->setPart('wheelRR', new Wheel());
    }

    public function createVehicle()
    {
        $this->car = new Car();
    }

    public function getVehicle(): Vehicule
    {
        return $this->car;
    }
}