<?php
//c'est le modele
class Photos
{
    private $pdo = null;

    public function __construct()//chargement
    {
        try {
            $this->pdo = new PDO('mysql:host=localhost;dbname=book;charset=utf8', 'root', 'root');
        } catch (PDOException $e) {
            exit('Erreur : '.$e->getMessage());
        }
    }

    public function listerPhotos()//récupère les données un getPhotosList aurait été mieux
    {
        if (!is_null($this->pdo)) {
            $stmt = $this->pdo->query('SELECT * FROM photo');
        }
        $photos = [];
        while ($photo = $stmt->fetchObject()) {
            $photos[] = $photo;
        }

        return $photos;
    }
}