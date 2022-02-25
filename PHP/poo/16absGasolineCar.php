<?php

// Fichier GasolineCar.php
require_once '16absCar.php';

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

    //En revanche, pour les voitures à essence, un malus de 50 € par taux d'émission au-delà de 119 g/km sera ajouté au prix original. Personalisation de la fonction pour la fille

    public function getFinalPrice(): float
    {
        $exessiveEmissions = $this->co2Emission - 119;
        if ($exessiveEmissions <= 0) {
            return $this->price;
        }

        return $this->price + 50 * $exessiveEmissions;
    }
}

//Etape 4 mise à jour de carFunctions.php avec la nouvelle focntion getFinalPrice

