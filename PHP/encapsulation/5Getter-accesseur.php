<?php
//Un accesseur, appelé getter, est une méthode permettant d'accéder à la valeur d'une propriété. Le nom d'un accesseur est toujours préfixé par get, suivi du nom de la propriété

class User
{
    private string $username; // La propriété est privée pour éviter de la manipuler directement

    public function __construct(string $username)
    {
        $this->username = $username;
    }

    public function getUsername(): string // L'accesseur est public : nous avons le droit d'accéder à la valeur de notre propriété
    {
        return $this->username;
    }
}

$john = new User('John');


echo $john->getUsername(); // Pour afficher le nom de l'utilisateur, nous passons par son accesseur