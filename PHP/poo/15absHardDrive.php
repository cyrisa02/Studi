<?php

// Fichier HardDrive.php
require_once '15absProduct.php';

class HardDrive extends Product
{
    private const TAX_ON_HARD_DRIVES = 20 / 100; //Etape 3
    public int $capacity;
    public string $brand;

    public function __construct(float $price, string $name, int $capacity, string $brand)
    {
        parent::__construct($price, $name);
        $this->capacity = $capacity;
        $this->brand = $brand;
    }

    public function getTotalPrice(): float
    {
        return $this->price * (1 + self::TAX_ON_HARD_DRIVES);
    }

    // Implémentation de l'interface :on récupère la fonction du 13interTooltipable.php par l'intermediaire de Product, le comportement
    public function getTitle(): string
    {
        return $this->name.' - '.$this->capacity.' Go';
    }

    public function getDescription(): string
    {
        return 'Disque dur '.$this->name.' de la marque '.$this->brand.' ayant une capacité de stockage de '.$this->capacity.' Go';
    }
}

//Etape 6 mise à jour de index.php
