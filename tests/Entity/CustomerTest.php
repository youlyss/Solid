<?php

namespace App\Tests\Entity;

use App\Entity\Customer;
use PHPUnit\Framework\TestCase;

class CustomerTest extends TestCase
{
    public function testSettingCustomerFirstName()
    {
        $customer = new Customer();
        $firstName = "John";
        $customer->setFirstName($firstName);
        $this->assertEquals($firstName, $customer->getFirstName());
    }
    public function testSettingCustomerLastName()
    {
        $customer = new Customer();
        $lastName = "Doe";

        $customer->setLastName($lastName);

        $this->assertEquals($lastName, $customer->getLastName());
    }
    public function testReturnsCustomerFullName()
    {
        $customer = new Customer();

        $customer->setFirstName("John");
        $customer->setLastName("Doe");
        $fullName = $customer->getFirstName()." ".$customer->getLastName();
        $this->assertSame($fullName, $customer->getCustomerFullName());
    }

}