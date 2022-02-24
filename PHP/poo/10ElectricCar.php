<?php

// Fichier ElectricCar.php
require_once '10Car.php';

class ElectricCar extends Car
{
    public float $batteryAutonomy;

    public function __construct(float $price, string $brand, float $batteryAutonomy)
    {
        parent::__construct($price, $brand);
        $this->batteryAutonomy = $batteryAutonomy;
    }
}
