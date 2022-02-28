<?php

//Le code suivant doit permettre de supprimer un objet de type User.

//On considère qu'il n'est pas possible de supprimer un utilisateur s'il est administrateur, auquel cas une exception est levée.

//Lorsqu'une exception est levée, on souhaite afficher :

    //Le message de l'exception

    //Le code erreur

    //Le fichier et la ligne concernée

    //La stack trace

function removeUser(User $user)
{
    if ($user->isAdmin()) {
        throw new Exception('Vous ne pouvez pas supprimer un administrateur');
    }

    // code métier qui supprime un utilisateur
    return true;
}

$user1 = new User('Anthony', [User::ROLE_ADMIN]);
$user2 = new User('Camille', [User::ROLE_USER]);

$usersToRemove = [$user1, $user2];

foreach ($usersToRemove as $user) {
    try {
        removeUser($user);
    } catch (Exception $exception) {
        echo sprintf('[%s] - %s: %s ligne %s', $exception->getCode(), $exception->getMessage(), $exception->getFile(), $exception->getLine()); //Sous la forme :

        //"[Code] - Message : Fichier ligne"

        //Stack trace
        echo '<pre>';
        foreach ($exception->getTrace() as $item) {
            var_dump($item);
        }
    } finally {
        echo 'Utilisateur traité'.PHP_EOL;
    }
}

class User
{
    public $name;

    public $roles = [];

    public const ROLE_ADMIN = 'ROLE_ADMIN';
    public const ROLE_USER = 'ROLE_USER';

    public function __construct(string $name, array $roles)
    {
        $this->name = $name;
        $this->roles = $roles;
    }

    public function isAdmin()
    {
        return in_array(self::ROLE_ADMIN, $this->roles);
    }
}
