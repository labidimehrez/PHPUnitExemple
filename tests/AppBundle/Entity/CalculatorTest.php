<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace Tests\AppBundle\Entity;

use AppBundle\Entity\Calculator;
use PHPUnit\Framework\TestCase;

/**
 * Description of Calculator
 *
 * @author mehrez
 */
class CalculatorTest extends TestCase {

    public function testAdd($a, $b, $expected) {
        $calculator = new Calculator();
        $result = $calculator->add($a, $b);
        $this->assertSame($expected, $result);
    }

    /**
     * @dataProvider additionProvider
     */
    public function additionProvider() {
        return [
            [0, 0, 0],
            [0, 1, 1],
            [1, 0, 1],
            [1, 2, 3]
        ];
    }
}
