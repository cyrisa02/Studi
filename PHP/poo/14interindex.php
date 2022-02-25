<?php

// Fichier index.php
require_once '14interElectricCar.php';
require_once '14interGasolineCar.php';
require_once '14intercarFunctions.php';
require_once '14interTire.php'; //a ne pas oublier

$tesla = new ElectricCar(50000, 'Tesla', 560);
$renault = new GasolineCar(20000, 'Renault', 100);
$tire = new Tire(205, 55, 32);

displayCharacteristics($tesla);
displayCharacteristics($renault);
displayCharacteristics($tire);
