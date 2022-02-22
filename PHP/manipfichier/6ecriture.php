<?php


//Mettez en place une fonction qui prendra en paramètres un nom de fichier, ainsi qu'un tableau d'utilisateurs contenant leur nom et prénom.

//Cette fonction ouvrira le fichier (en prenant soin de le remettre à 0), écrira les données et retournera true. Prenez garde que la fonction fopen()renvoie bien une ressource et, en cas de problème, qu'elle retournera false.

function writeUsersInFile(string $file, array $users): bool {
    $resource = fopen($file, 'w');

    if (!$resource) {
        return false;
    }

    foreach ($users as $user) {
        fwrite($resource, implode(' ', $user).PHP_EOL);
    }

    fclose($resource);

    return true;
}

$users = [
    ['Mathilde', 'Dubois'],
    ['Eric', 'Blanchard'],
    ['Manon', 'Dupont'],
];

writeUsersInFile('ecrire-fichier.txt', $users);