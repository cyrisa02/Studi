<?php

// instancier un objet c'est créer la liaison entre la class-propriété (=structure) et ses valeurs

require_once '2class.php'; // Si notre classe est dans un fichier à part, il faut l'inclure, attention
// le nom du fichier n'est pas ok, j'aurais dû l'appeler User.php du nom de la classe, créer un répertoire classes/

$user = new User(); // On remarque le mot-clé "new" suivi de l'appel à la fonction correspondant à notre classe

echo $user->name; // renvoie John en console grâce à ->

// Assigner des valeurs

$robert = new User(); // On crée une instance de User qu'on assigne à la variable $robert
$robert->name = 'Robert'; // Le champ "name" de la variable $robert contient maintenant "Robert", écrasant la valeur par défaut "John".

$laure = new User(); // On crée une deuxième instance de User qu'on assigne à la variable $laure
$laure->name = 'Laure'; // Le champ "name" de la variable $laure contient maintenant "Laure", écrasant la valeur par défaut "John".
$laure->surname = 'Dupond'; // Le champ "surname" de la variable $laure contient maintenant "Dupond"

echo $laure->name.' '.$laure->surname; // Affiche "Laure Dupont"
echo $robert->name; // Affiche "Robert"

// Avec le même "moule", on a créé deux objets : Laure et Robert !

$cyril = new User();
$cyril->name = 'Cyril';
$cyril->surname = 'Gourdon';

$alice = new User();
$alice->name = 'Alice';

echo $alice->name;
