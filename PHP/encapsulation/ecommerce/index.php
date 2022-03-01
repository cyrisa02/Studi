<?php

//Gestion de produits (nom-description) (classe mère)- DD (capacité) (classe finale)- Livres (auteurs) (classe finale)
// Gestion en 10 € ou $10, pbm avec l'héritage

require_once 'PriceFormatter.php';
//require_once 'Book.php';

$hardDrive = new Product('Disque dur', 140.00, new EUFormatter()); // attention mauvais paramétrage, ici 3 champs et dans le fichier il y en a 4!
$UShardDrive = new Product('Hard Drive', 140.00, new USFormatter());

echo $hardDrive->formatPrice();
echo '<br>';
echo $UShardDrive->formatPrice();

//$formatter = new EUFormatter();
//$book = new Book('Mon livre', 10.0, $formatter, 'John', 100);

//echo $book->getFormattedPrice();
