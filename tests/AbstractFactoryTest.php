<?php

namespace App\Tests;

use App\DesignPatterns\Creational\AbstractFactory\CsvWriter;
use App\DesignPatterns\Creational\AbstractFactory\JsonWriter;
use App\DesignPatterns\Creational\AbstractFactory\UnixWriterFactory;
use App\DesignPatterns\Creational\AbstractFactory\WriterFactory;
use PHPUnit\Framework\TestCase;

class AbstractFactoryTest extends TestCase
{
    public function provideFactory()
    {
        return [
            [new UnixWriterFactory()]
        ];

    }

    /**
     * @dataProvider provideFactory
     */
    public function testCanCreateCsvWriteOnUnix(WriterFactory $writerFactory)
    {
        $this->assertInstanceOf(JsonWriter::class, $writerFactory->createJsonWriter());
        $this->assertInstanceOf(CsvWriter::class, $writerFactory->createCsvWriter());
    }


}