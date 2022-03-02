<?php
//Etape 9, qd on affiche qu'une seule photo, cela vient de la BD id primaire, un fichier, un titre
class Photo
{
    use Modele;

    private $id;

    private $fichier;

    private $titre;

    public function afficherPhoto($id)
    {
        if (!is_null($this->pdo)) {
            $stmt = $this->pdo->prepare('SELECT * FROM photo WHERE id = ?');
        }
        $photo = null;
        if ($stmt->execute([$id])) {
            $photo = $stmt->fetchObject('Photo');// on doit mettre la classe Photo, crée un objet photo
            if(!is_object($photo)) {
                $photo = null;
            }
        }

        return $photo;
    }

    public function getId()
    {
        return $this->id;
    }

    public function getFichier()
    {
        return $this->fichier;
    }

    public function getTitre()
    {
        return $this->titre;
    }
}