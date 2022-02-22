<?php


// métadonnées d'un fichier représentent les propriétés qui lui sont liées

var_dump(date('c', filectime('fichier.txt')));// dernière date de modification  des propriétés 
var_dump(date('c', filemtime('fichier.txt')));// date de dernière modification des données 
var_dump(date('c', fileatime('fichier.txt')));// la date du dernier accès


//



var_dump('Propriétaire : ', posix_getpwuid(fileowner('fichier.txt')));//  récupérer le propriétaire 
var_dump('Groupe : ', posix_getgrgid(filegroup('fichier.txt'))); // lire le groupe
var_dump('Droits : ', substr(sprintf('%o', fileperms('fichier.txt')), -4)); // %o permet d'afficher la notation octale, obtenir les droits d'accès 

//



var_dump('Taille : ', filesize('fichier.txt').' octets');// récupérer la taille

//Écrivez une fonction qui listera les fichiers et répertoires d'un répertoire passé en paramètre, et qui affichera pour chacun sa date de création et de dernière modification

function listFilesAndDirectories(string $path): void {
    $path = realpath($path).DIRECTORY_SEPARATOR; // La fonction realpath() permet de retourner le chemin absolu d'un fichier ou d'un dossier.
    $elements = scandir($path); //Liste les fichiers et dossiers dans un dossier 

    foreach ($elements as $element) {
        echo $element;
        echo ' a été créé le '.date('d/m/Y à H:i:s', filectime($path.$element));// dernière date de modification  des propriétés 
        echo ' et modifié le '.date('d/m/Y à H:i:s', filemtime($path.$element));// date de dernière modification des données 
        echo PHP_EOL;
    }
}