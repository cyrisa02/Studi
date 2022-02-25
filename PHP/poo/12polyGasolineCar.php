<?php

// Fichier GasolineCar.php
require_once '12polyCar.php';

class GasolineCar extends Car
{
    public float $co2Emission;

    public function __construct(float $price, string $brand, float $co2Emission)
    {
        parent::__construct($price, $brand);
        $this->co2Emission = $co2Emission;
    }

    public function getCharacterics(): array
    {
        $characteristics = parent::getCharacterics();
        $characteristics['co2Emission'] = $this->co2Emission;

        return $characteristics;
    }
}
