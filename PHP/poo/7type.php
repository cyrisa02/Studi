<?php

class Couple
{
    // Un couple est composé de deux utilisateurs :
    public User $user1;
    public User $user2;

    public function __construct(User $user1, User $user2)
    {
        $this->user1 = $user1;
        $this->user2 = $user2;
    }
}

$laure = new User('Laure', 'Dupont');
$robert = new User('Robert', 'Durand');

$couple = new Couple($laure, $robert); // normalement dans un autre fichier voir 3instance avec require

var_dump($couple->user1->name); // donnera le nom du user1  avec require_once 'classes/User.php'
// en mémoire, c'est l'identifiant, passage par référence

