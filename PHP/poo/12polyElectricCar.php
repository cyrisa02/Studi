<?php

// Fichier ElectricCar.php
require_once '12polyCar.php';

class ElectricCar extends Car
{
    public float $batteryAutonomy;

    public function __construct(float $price, string $brand, float $batteryAutonomy)
    {
        parent::__construct($price, $brand);
        $this->batteryAutonomy = $batteryAutonomy;
    }

    public function getCharacteristics(): array //Créez une fonction getCharacteristics retournant les caractéristiques de chaque type de voiture. Pour une voiture électrique, nous aurons besoin de son prix, sa marque et l'autonomie de sa batterie ; et pour une voiture à essence, son prix, sa marque et la quantité d’émission de CO2.
    {
        $characteristics = parent::getCharacteristics();
        $characteristics['batteryAutonomy'] = $this->batteryAutonomy;

        return $characteristics;
    }
}
