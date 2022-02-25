<?php

// Fichier Car.php
class Car
{
    public float $price;
    public string $brand;

    public function __construct(float $price, string $brand)
    {
        $this->price = $price;
        $this->brand = $brand;
    }

    public function getCharacteristics(): array//créer une fonction qui retourne un tableau associatif ayant pour clé le nom de la caractéristique et pour valeur la valeur de caractéristique.
    {
        return [
        'price' => $this->price,
        'brand' => $this->brand,
    ];
    }
}
