<?php

require_once '9heritageSeller.php';

$seller = new Seller('John', 'Doe', 'JD Incorporated');
echo $seller->getDisplayedName(); // Affiche "John Doe", car cette fonction est dans User et ne connait que le nom et le prénom
