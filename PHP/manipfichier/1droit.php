<?php

// tous les droits https://www.php.net/manual/fr/function.fopen.php


$oldPermissions = umask(0); // Affecte la valeur actuelle des limitations de droits de fichier dans la variable $oldPermissions et autorise l'utilisation de n'importe quel niveau de permission grâce à la valeur 0.
mkdir('repertoireAvecUmask', 0777); // Crée un répertoire dans le répertoire courant avec des droits de lecture, écriture et exécution pour tous.
umask($oldPermissions ); // Réaffecte l'ancienne valeur  des limitations de droits de fichier pour les cas où le script continue.

///////////////////

mkdir('repertoireAvecChmod', 0777); // Crée un répertoire dans le répertoire courant avec des droits de lecture, écriture et exécution pour tous si la valeur par défaut de restriction des droits de PHP l'autorise.
chmod('repertoireAvecChmod', 0777); // Change les droits du répertoire pour correspondre à ceux souhaités quelles que soient les restrictions de PHP.

//suppression d'un repertoire

rmdir('exemple/repertoire/recursif');


// Parcourir un repertoire



mkdir('repertoire');
mkdir('exemple/repertoire/recursif', 0755, true);

$results = scandir ('./');
foreach($results as $value) {
  echo $value.' ';
}

echo PHP_EOL;

$results = scandir('exemple/repertoire');
foreach($results as $value) {
  echo $value.' ';
}

// existence d'un repertoire

mkdir('repertoire');
mkdir('exemple/repertoire/recursif', 0755, true);

$results = scandir ('./');
foreach($results as $value) {
  if (is_dir($value)) {
    echo $value." est un répertoire \n";
  } else {
    echo $value." n'est pas un répertoire \n";
  }
}