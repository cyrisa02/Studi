<?php

// Fichier index.php
require_once '10ElectricCar.php';
require_once '10GasolineCar.php';

$tesla = new ElectricCar(50000, 'Tesla', 560);
$renault = new GasolineCar(20000, 'Renault', 100);
