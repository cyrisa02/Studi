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

try {
    updatePassword('coucou');
} catch (Exception $exception) {
    echo 'Merci de resaisir votre mot de passe'; // l'erreur est proprement géré. on peut aussi envoyer un mail à l'admistrateur

    //throw $exception; //bloque le code, on peut supprimer cette ligne
} finally {
    echo 'Il y aura toujours un message même en cas derreur'; // pour fermer une BD avec le finally
}

echo 'Bonjour';
