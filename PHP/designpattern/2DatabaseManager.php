<?php

//Mettez en place une classe DatabaseManager qui implémente les éléments essentiels de ce design pattern, à savoir :

    //Une propriété instance permettant de stocker l'instance

    //Un constructeur et une méthode de clonage privée

    //Une méthode statique getInstance permettant d'instancier ou de retourner cette instance

    //Une méthode métier connect

//Vérifiez que votre classe ne peut être instanciée qu'une seule fois.

class DatabaseManager
{
    private static $instance; //Une propriété instance permettant de stocker l'instance

    private function __construct() //Un constructeur et une méthode de clonage privée
    {
    }

    private function __clone() //Un constructeur et une méthode de clonage privée
    {
    }

    public static function getInstance(): self //Une méthode statique getInstance permettant d'instancier ou de retourner cette instance
    {
        if (!isset(static::$instance)) {
            static::$instance = new static();
        }

        return static::$instance;
    }

    public function connect(): void  //Une méthode métier connect
    {
        // do stuff
    }
}

$firstInstance = DatabaseManager::getInstance();
$secondInstance = DatabaseManager::getInstance();

if ($firstInstance === $secondInstance) {
    echo "Il s'agit de la même instance";
}
