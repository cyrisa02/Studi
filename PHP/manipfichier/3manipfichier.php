<?php
$ressource = openFile('fichier-existant');
// Affichera resource(5) of type (stream) par exemple
var_dump($ressource);

$isClosed = closeFile($ressource);
// Affichera bool(true)
var_dump($ressource);

$ressource = openFile('fichier-inexistant');
// Affichera bool(false)
var_dump($ressource);

$isClosed = closeFile($ressource);
// Affichera bool(false)
var_dump($ressource);



function openFile(string $file) {
    if (!is_file($file)) {
        return false;
    }

    return fopen($file, 'r');
}

function closeFile($resource) {
    if (!is_resource($resource)) {
        return false;
    }

    return fclose($resource);
}


//Écrivez les fonctions suivantes :

    //la fonction openFile(), qui prendra en paramètre un nom de fichier, qui ouvrira le fichier en lecture seule et qui retournera une ressource PHP. Si le fichier n'existe pas, elle retournera false.

    //la fonction closeFile(), qui prendra en paramètre une ressource PHP, qui la fermera et retournera un booléen indiquant si elle a réussi à fermer la ressource. Si le paramètre n'est pas une ressource, elle retournera false.