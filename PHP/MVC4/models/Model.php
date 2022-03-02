<?php

//Etape 1, création du trait transversal
trait Model
{
    private $pdo = null;

    public function __construct()
    {
        try {
            $this->pdo = new PDO('mysql:host=localhost;dbname=blog;charset=utf8', 'root', 'root');
        } catch (PDOException $e) {
            exit('Erreur : '.$e->getMessage());
        }
    }
}
