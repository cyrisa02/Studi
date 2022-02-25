<?php
// Fichier GasolineCar.php
require_once '14interCar.php';

class GasolineCar extends Car
{
    public float $co2Emission;

    public function __construct(float $price, string $brand, float $co2Emission)
    {
        parent::__construct($price, $brand);
        $this->co2Emission = $co2Emission;
    }

    public function getCharacteristics(): array
    {
        $characteristics = parent::getCharacteristics();
        $characteristics['co2Emission'] = $this->co2Emission;

        return $characteristics;
    }
}
