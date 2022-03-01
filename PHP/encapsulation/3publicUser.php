<?php
//La visibilité se définit indépendamment au niveau de chaque élément de notre classe.
class User
{
    public string $username; // Cette propriété est publique

    public function __construct(string $username)
    {
        $this->username = $username;
    }

    public function getName(): string // Cette méthode est publique
    {
        return $this->username;
    }
}

$john = new User('John');

$john->username = 'Johnny'; // Je peux donner une valeur à cette propriété parce qu'elle est publique
echo $john->username.PHP_EOL; // Je peux afficher cette propriété parce qu'elle est publique
echo $john->getName(); // Je peux appeler cette méthode parce qu'elle est publique