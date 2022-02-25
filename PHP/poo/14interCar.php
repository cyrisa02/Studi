<?php

// Fichier Car.php, la mère
require_once '14interCharacteristicsDisplayable.php';

class Car implements CharacteristicsDisplayable
{
    public float $price;
    public string $brand;

    public function __construct(float $price, string $brand)
    {
        $this->price = $price;
        $this->brand = $brand;
    }

    public function getCharacteristics(): array
    {
        return [
            'price' => $this->price,
            'brand' => $this->brand,
        ];
    }
}

// Etape 3 fichier Tyre
