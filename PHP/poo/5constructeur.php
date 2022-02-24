<?php

// Un constructeur est une méthode particulière, toujours nommée __construct. Cette méthode va s'occuper d'initialiser notre objet en renseignant une valeur à chaque propriété -> $this

// méthode magique

class User
{
    public int $id;
    public string $name = 'John';
    public string $surname;

    // On déclare notre constructeur
    public function __construct(string $name, string $surname)
    {
        $this->name = $name; // Initialisation La propriété "name" de l'objet courant prend la valeur du paramètre $name
        $this->surname = $surname; // La propriété "surname" de l'objet courant prend la valeur du paramètre $surname
    }

    public function sayHello(): string
    {
        return 'Bonjour '.$this->name.' '.$this->surname;
    }
}

// ensuite, dans l'autre fichier, on appelle __construc avec new

$laure = new User('Laure', 'Dupond'); // On passe directement nos valeurs dans la "fonction" User, dans le même ordre que celui défini dans le constructeur
$robert = new User('Robert', 'Rondon');
// Nos objets sont instanciés en une seule ligne !

echo $robert->sayHello(); // Affiche bien "Bonjour Robert Rondon"
