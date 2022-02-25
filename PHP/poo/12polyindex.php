<?php

// Fichier index.php
require_once '12polyElectricCar.php';
require_once '12polyGasolineCar.php';
require_once '12carFunctions.php';

$tesla = new ElectricCar(50000, 'Tesla', 560);
$renault = new GasolineCar(20000, 'Renault', 100);

echo 'Je suis là';
//var_dump($tesla->getCharacteristics());
//var_dump($renault->getCharacteristics());

displayCharacteristics($tesla);
displayCharacteristics($renault); // vient du fichier carFunctions.php
