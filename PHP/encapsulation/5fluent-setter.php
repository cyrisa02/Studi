<?php

//Les fluent setters sont des mutateurs qui retourne l'objet courant : cela permet d’enchaîner les appels.
class User
{
    private int $id;
    private string $username;
    private string $firstName;
    private string $lastName;

    public function __construct(int $id, string $username, string $firstName, string $lastName)
    {
        $this->id = $id;
        $this->username = $username;
        $this->firstName = $firstName;
        $this->lastName = $lastName;
    }

    public function getUsername(): string
    {
        return $this->username;
    }

    public function setUsername(string $username): self // On remarque l'utilisation de self pour définir le type de retour
    {
        if (ctype_alnum($username)) {
            $this->username = $username;
        }

        return $this;
    }

    public function getId(): int
    {
        return $this->id;
    }

    private function setId(int $id): self // On décide de mettre notre mutateur d'identifiant en privé pour éviter qu'il puisse être modifié après la création de l'objet
    {
        $this->id = $id;

        return $this;
    }

    public function getFirstName(): string
    {
        return $this->firstName;
    }

    public function setFirstName(string $firstName): self
    {
        $this->firstName = $firstName;

        return $this;
    }

    public function getLastName(): string
    {
        return $this->lastName;
    }

    public function setLastName(string $lastName): self
    {
        $this->lastName = $lastName;

        return $this;
    }
}

$john = new User(1, 'JohnDoe123', 'John', 'Doe');
// Il est possible de tout mettre sur une ligne, mais, pour des raisons de lisibilité, il est préférable d'utiliser un setter par ligne
$john
    ->setUsername('JohnDoe') // Cette méthode retourne $john, donc on peut enchainer les appels
    ->setFirstName('Johnny')
    ->setLastName('Doe-Dupont')
;

echo $john->getUsername(); // Affiche "JohnDoe". On aurait également pu rajouter cet appel aux précédents, mais cela pourrait nuire à la clarté du code.
