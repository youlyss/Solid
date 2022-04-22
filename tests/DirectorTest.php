<?php

namespace App\Tests;

use App\DesignPatterns\Creational\Builder\CarBuilder;
use App\DesignPatterns\Creational\Builder\Director;
use App\DesignPatterns\Creational\Builder\Parts\Car;
use App\DesignPatterns\Creational\Builder\Parts\Truck;
use App\DesignPatterns\Creational\Builder\TruckBuilder;
use PHPUnit\Framework\TestCase;

class DirectorTest extends TestCase
{
    public function testCanBuildTruck()
    {
        $truckBuilder = new TruckBuilder();
        $newVehicule = (new Director())->build($truckBuilder);

        $this->assertInstanceOf(Truck::class, $newVehicule);
    }
    public function testCanBuildCar()
    {
        $carBuilder = new CarBuilder();
        $newVehicule1 = (new Director())->build($carBuilder);

        $this->assertInstanceOf(Car::class, $newVehicule1);
    }

}