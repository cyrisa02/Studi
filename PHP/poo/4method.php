<?php

// méthode = fonction dans une classe-> $this
// ex: objet le rectangle, propriétés: longueur, largeur, on peut créer une méthode pour avoir le périmètre et la surface

//encapsulation: La POO est un moyen très efficace d'architecturer notre code

// Fichier index.php

require_once 'User.php';

$robert = new User();
$robert->name = 'Robert';
$robert->surname = 'Rondon';

echo $robert->sayHello(); // Affiche "Bonjour Robert Rondon". Lors de l'appel, la variable $this de sayHello contient les valeurs de $robert, puisque c'est cette variable qui appelle la méthode

$laure = new User();
$laure->name = 'Laure';
$laure->surname = 'Dupont';

echo $laure->sayHello(); // Affiche "Bonjour Laure Dupont". Lors de l'appel, la variable $this de sayHello contient les valeurs de $laure, puisque c'est cette variable qui appelle la méthode

// ctrl + clique sur la méthode permet d'aller directement sur le fichier où il y a la méthode, gain de temps!!!!
