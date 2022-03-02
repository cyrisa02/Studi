<?php
//etape 10, commun à tous les modèles, c'est une classe transversale à tous nos modèle, à utiliser avec use Modele dans la classe concernée pour nous Photo et Photos
trait Modele
{
    private $pdo = null;

    public function __construct()
    {
        try {
            $this->pdo = new PDO('mysql:host=localhost;dbname=book;charset=utf8', 'root', 'root');
        } catch (PDOException $e) {
            exit('Erreur : '.$e->getMessage());
        }
    }
}