<?php

$resource = fopen('fichier.txt', 'c+'); // créer une ressource

if ($resource) {
    while (($buffer = fgets($resource)) !== false) {  // lire la ressource-$buffer stocke la ligne du fichier.txt, buffer=tampon
        echo $buffer;
    }

    fclose($resource); // fermeture de la ressource
}

//code présenté crée, s'il n'existe pas, le fichier fichier.txt, puis l'ouvre en lecture-écriture. vérifie ensuite que la ressource a bien été créée avant de boucler sur le contenu du fichier, en récupérant une nouvelle ligne à chaque passage tant que la récupération de données n'est pas terminée, puis fermeture


// par section, file_get_contents() se charge de réaliser l'ouverture et la fermeture du fichier. pas de boucle avec cette fonction à cause des ouvertures/fermetures répétées



$section = file_get_contents('fichier.txt');
var_dump($section);

////

// Vous pourrez vérifier que tout est en ordre en effectuant, par exemple, l'appel de fonction suivant :
// dans le fichier texte j'ai Mathilde, Eric et Manon etc..


    var_dump(getUsersFromFile('fichier.txt'));
    
    /*
    array(3) {
      [0]=>
      string(15) "Mathilde Dubois"
      [1]=>
      string(14) "Eric Blanchard"
      [2]=>
      string(12) "Manon Dupont"
    */
//Écrivez la fonction getUsersFromFile(), qui prendra en paramètre un nom de fichier, ouvrira le fichier, le lira et renverra un tableau contenant les utilisateurs qui y sont stockés. Prenez garde à vérifier que le fichier existe et que la fonction fopen() renvoie bien une ressource et, en cas de problème, qu'elle retournera null


function getUsersFromFile(string $file): ?array {
    $users = [];

    if (!is_file($file)) {
        return null;
    }

    $resource = fopen($file, 'r');

    if (!$resource) {
        return null;
    }

    while (($user = fgets($resource)) !== false) {
        $users[] = trim($user);
    }

    fclose($resource);

    return $users;
}

//La fonction trim() vous permettra de vous débarrasser des retours à la ligne en trop en début et en fin de chaîne de caractères