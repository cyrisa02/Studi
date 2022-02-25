<?php

// Fichier carFunctions.php
//require_once '14interCar.php'; on peut supprimer puisqu'on a l'autre require
require_once '14interCharacteristicsDisplayable.php'; //Etape 4 on change le type Car

//function displayCharacteristics(Car $car): void  ancienne instruction
//nouvlle instruction
function displayCharacteristics(CharacteristicsDisplayable $characteristicsDisplayable): void
{
    echo '<ul>';
    foreach ($characteristicsDisplayable->getCharacteristics() as $name => $value) {
        echo '<li>'.$name.' : '.$value.'</li>';
    }
    echo '</ul>';
}

// Etape 6, mise à jour du fichier index.php
