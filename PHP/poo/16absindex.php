<?php

// Fichier index.php
require_once '16absElectricCar.php';
require_once '16absGasolineCar.php';
require_once '16abscarFunctions.php';

$tesla = new ElectricCar(50000, 'Tesla', 560);
$renault = new GasolineCar(20000, 'Renault', 130);

displayPrice($tesla); // affiche 47500(50000)
displayPrice($renault); // affiche 20550 (20000)
