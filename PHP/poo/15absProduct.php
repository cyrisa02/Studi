<?php

// Fichier Product.php // mère Etape 1
require_once '13interTooltipable.php'; //on peut prendre ce comportement, même si cette classe est abstraite
abstract class Product implements Tooltipable // Nous déclarons la classe comme abstraite
{
    public float $price;
    public string $name;

    public function __construct(float $price, string $name)
    {
        $this->price = $price;
        $this->name = $name;
    }

    // Quels que soient nos produits, nous allons devoir afficher leur prix total. Cependant, la méthode de calcul de chaque article sera différente : les livres ont une TVA à 5,5 %, tandis que les disques durs ont une TVA à 20 %.

    //Nous pouvons donc déclarer une méthode abstraite getTotalPrice() dans notre classe Product pour nous assurer que la méthode de calcul sera bien définie dans les classes filles.

    abstract public function getTotalPrice(): float;

    //Méthode abstraite Etape 1 la fonction getTotalPrice est dans Book et HardDrive parce que les TVA sont différentes
}

//Etape 2 modifier book.php
