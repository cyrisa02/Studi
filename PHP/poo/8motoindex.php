<?php

// fichier index.php
include '8Moto.php';
include '8motoRace.php';

$moto1 = new Moto('Yamaha', 'rouge', 210);
$moto2 = new Moto('Suzuki', 'bleue', 180);

$race = new Race($moto1, $moto2);
echo $race->startRace()->getDescription();
