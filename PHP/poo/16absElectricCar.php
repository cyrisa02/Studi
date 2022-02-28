<?php

// Fichier ElectricCar.php
require_once '16absCar.php';

class ElectricCar extends Car
{
    public float $batteryAutonomy;

    public function __construct(float $price, string $brand, float $batteryAutonomy)
    {
        parent::__construct($price, $brand);
        $this->batteryAutonomy = $batteryAutonomy;
    }

    public function getCharacteristics(): array
    {
        $characteristics = parent::getCharacteristics();
        $characteristics['batteryAutonomy'] = $this->batteryAutonomy;

        return $characteristics;
    }

    public function getFinalPrice(): float //Etape 2 personalisation de la fonction, etape 3 gasolineCar
    {
        return $this->price - 2500;
    }
}
