<?php

$users = ['mathilde', 'nicolas', 'frank'];

foreach ($users as $user) {
    if (!is_dir($user)) {
        mkdir(strtolower($user));
    }
}

$directories = scandir('.');

foreach ($directories as $directory) {
    if ($directory !== '.' && $directory !== '..' && is_dir($directory) && !in_array($directory, $users)) {
        rmdir($directory);
    }
}

//En partant des données suivantes, écrivez un code qui créera un répertoire pour chaque utilisateur dans le répertoire courant de votre script et supprimera les répertoires inutiles.