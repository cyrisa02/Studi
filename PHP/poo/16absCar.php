<?php

// Fichier Car.php,mère La classe Car ne sert que de base aux autres voitures, donc peut être abstraite.
require_once '16absCharacteristicsDisplayable.php';

abstract class Car implements CharacteristicsDisplayable
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

    abstract public function getFinalPrice(): float;

    // complément suite à la demande Etape 1 -> Etape 2 modif de ElectricCar
}

//Pour les voitures électriques, une prime de conversion de 2500 € est déduite du prix original afin d'encourager les gens à passer à l'électrique. En revanche, pour les voitures à essence, un malus de 50 € par taux d'émission au-delà de 119 g/km sera ajouté au prix original.

//Créez une méthode getFinalPrice()permettant de calculer le prix final de toutes nos voitures. Créez également une fonction displayPrice()qui prend en paramètre un objet de type Car et qui affiche son prix final, suivi de son prix original entre parenthèses.
