<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace AppBundle\Entity;

/**
 * Description of Temperature
 *
 * @author mehrez
 */
class Temperature {

    private $service;

    public function __construct($service) {
        $this->service = $service;
    }

    public function average() {
        $total = 0;
        for ($i = 0; $i < 3; $i++) {
            $total += $this->service->readTemp();
        }
        return $total / 3;
    }

}
