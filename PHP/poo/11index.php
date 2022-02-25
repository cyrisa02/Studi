<?php

require_once '11polySeller.php';
require_once '11displayFunctions.php';

$user = new User('John', 'Doe');
$seller = new Seller('Laure', 'Dupond', 'JD Incorporated');

displayUserName($user); // Affiche 'Connecté en tant que : John Doe'
displayUserName($seller); // Affiche 'Connecté en tant que : Laure Dupond' grâce au rajout dans 11polySeller de  public function getDisplayedName on obtient le nom de  la compagnie entre parenthèse, c'est important elles ont le même nom dans la fille et dans la mère pour pouvoir l'appeler dans index.php
