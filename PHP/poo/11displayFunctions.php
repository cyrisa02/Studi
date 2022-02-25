<?php

// Fichier "displayFunctions.php", centralise une méthode
require_once '11polyUser.php';

function displayUserName(User $user): void
{
    echo 'Connecté en tant que : '.$user->getDisplayedName();
}
