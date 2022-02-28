<?php

// Afin de pouvoir réutiliser le formatage qui a été mis en place, implémentez une nouvelle exception de type UserAdminException.

//Une méthode displayDetails permettra d'afficher les détails de l'exception de façon formatée

function removeUser(User $user)
{
    if ($user->isAdmin()) {
        throw new UserAdminException('Vous ne pouvez pas supprimer un administrateur');
    } // Ajout de UserAdminException

    // code métier qui supprime un utilisateur
    return true;
}

$user1 = new User('Anthony', [User::ROLE_ADMIN]);
$user2 = new User('Camille', [User::ROLE_USER]);

$usersToRemove = [$user1, $user2];

foreach ($usersToRemove as $user) {
    try {
        removeUser($user);
    } catch (UserAdminException $exception) {
        echo $exception->displayDetails();
        //echo sprintf("[%s] - %s: %s ligne %s", $exception->getCode(), $exception->getMessage(), $exception->getFile(), $exception->getLine());
    } finally {
        echo 'Utilisateur traité'.PHP_EOL;
    }
}

//Nouvelle classe où je récupère min echo sprintf

class UserAdminException extends Exception
{
    public function __construct($message, $code = 0)
    {
        parent::__construct($message, $code);
    }

    public function displayDetails()
    {
        echo sprintf('[%s] - %s: %s ligne %s', $this->getCode(), $this->getMessage(), $this->getFile(), $this->getLine());
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
