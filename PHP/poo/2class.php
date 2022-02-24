<?php
// class = moule -> propriétés ne pas oublier un id -> valeur
//avoir un fichier par classe et utiliser le nom de la classe comme nom du fichier est une bonne pratique



class User
{
    public int $id; // Cet attribut n'a pas de valeur par défaut
    public string $name = 'John'; // Le prénom par défaut de nos utilisateurs est "John"
    public string $surname = 'Doe'; // Le nom par défaut de nos utilisateurs est "Doe"
}



class MaClasse
{
    public int $propriete1;
    public string $propriete2 = 'Valeur par défaut';
}