<?php

function updatePassword(string $password): void
{
    if (strlen($password) < 10) {
        throw new Exception('Le mot de passe est trop court');
    }

    if (ctype_alnum($password)) {
        throw new Exception('Le mot de passe doit contenir au moins un caractère spécial');
    }

    //mise à jour dans la BD
}

var_dump(updatePassword('12'));
