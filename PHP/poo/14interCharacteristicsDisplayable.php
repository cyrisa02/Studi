<?php

//Créez une interface CharacteristicsDisplayable qui définit les méthodes nécessaires à l'affichage des caractéristiques sous forme de listes à puces.

//Ainsi, la fonction displayCharacteristics ne prendra plus en paramètre un objet de type Car, mais un objet implémentant CharacteristicsDisplayable.

//Effectuez ensuite les modifications nécessaires pour que nos voitures et nos pneus puissent être affichés grâce à la fonction displayCharacteristics.

// Etape1

interface CharacteristicsDisplayable
{
    public function getCharacteristics(): array;
}

// Etape2: aller vers la mère Car.php
