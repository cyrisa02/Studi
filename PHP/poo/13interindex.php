<?php

// Fichier index.php
require_once '13interSeller.php';
require_once '13interCompany.php';
require_once '13interProduct.php';
//require_once '13interUser.php'; n'est pas nécessaire pour que ça fonctionne

require_once '13intertooltip.php'; // Etape4

$user = new User('John', 'Doe');
$company = new Company('JD', 'SARL', 'composants informatiques');
$seller = new Seller('Laure', 'Dupond', $company);
$product = new Product('Carte mère', 'Socket LGA1151');

var_dump($user);
var_dump($company);
var_dump($seller);
var_dump($product);
displayTooltip($company); //Etape 4

// Même chose pour User et Product Etape 5

displayTooltip($user); //Etape 6
displayTooltip($seller); //Etape 6
displayTooltip($product); //Etape 6
