<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace Tests\AppBundle\Entity;
use PHPUnit\Framework\TestCase;
use AppBundle\Entity\Temperature;
use Mockery;

class TemperatureTest extends  TestCase
{
    public function tearDown()
    {
        Mockery::close();
    }

    public function testGetsAverageTemperatureFromThreeServiceReadings()
    {
        $service = Mockery::mock('service');
        $service->shouldReceive('readTemp')
            ->times(3)
            ->andReturn(10, 12, 14);

        $temperature = new Temperature($service);

        $this->assertEquals(12, $temperature->average());
    }
}