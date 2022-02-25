u<?php

// Fichier carFunctions.php Écrivez maintenant une fonction displayCharacteristics prenant en paramètre une voiture, quelle qu'elle soit, et qui affiche la liste de ses caractéristiques dans une liste à puces
require_once '12polyCar.php';

function displayCharacteristics(Car $car): void
{
    echo '<ul>';
    foreach ($car->getCharacteristics() as $name => $value) {
        echo '<li>'.$name.' : '.$value.'</li>';
    }
    echo '</ul>';
}
// affichera le price, la brand, et chacune des caractéristiques propres
