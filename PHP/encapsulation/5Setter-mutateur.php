<?php

//Un mutateur, appelé setter, est une méthode permettant de modifier la valeur d'une propriété. Un mutateur permet également de contrôler la validité des données que l'on essaie de faire passer à notre propriété.
class User
{
    private string $username;

    public function __construct(string $username)
    {
        $this->username = $username;
    }

    public function getUsername(): string
    {
        return $this->username;
    }

    public function setUsername(string $username): void // Le mutateur est public : nous avons le droit de modifier la valeur de notre propriété
    {
        if (ctype_alnum($username)) { // On vérifie que notre nom d'utilisateur soit bien alphanumérique
            $this->username = $username;
        }
    }
}

$john = new User('John');
$john->setUsername('JohnDoe'); //Pour modifier le nom de l'utilisateur, nous passons par son mutateur

echo $john->getUsername(); // Affiche "JohnDoe"
