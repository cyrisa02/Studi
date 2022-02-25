<?php
// Fichier carFunctions.php, mise à jour avec la nouvelle focntion getFinalPrice

require_once '16absCar.php';

function displayPrice(Car $car): void
{
    echo $car->getFinalPrice().' ('.$car->price.')';


}

// Etape 5 mise à jour de index.php

