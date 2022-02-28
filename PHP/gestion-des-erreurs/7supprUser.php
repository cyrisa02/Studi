<?php

//On considère qu'il n'est pas possible de supprimer un utilisateur s'il est administrateur, auquel cas une exception est levée.

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
        echo $exception->getMessage().PHP_EOL;
    } finally {
        echo 'Utilidateur traité'.PHP_EOL;
    }
}
//getMessage() : permet d'afficher le message associé à l'exception lancée, c'est natif, ce sera "Vous ne pouvez pas supprimer un administrateur", il faudra donc le définir

//getCode autre méthode  comme ceci
//throw new Exception('Vous ne pouvez pas supprimer un administrateur', code 30);

//getFile, getLine, getTrace, uitliser des var-dump

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
