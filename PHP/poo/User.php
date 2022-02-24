<?php

// Fichier User.php

class User
{
    public int $id;
    public string $name = 'John';
    public string $surname;

    public function sayHello(): string
    {
        return 'Bonjour '.$this->name.' '.$this->surname.PHP_EOL; // Nous utilisons $this pour récupérer le nom et le prénom de l'objet appelant.
    }
}
