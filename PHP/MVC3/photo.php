<?php

//on charge la photo, n'est plus nécessaire car cela faisiat 2 contrôleurs index et lui
require_once 'modeles/Photos.php';
$photos = new Photos(); // on instancie
$photo = null;
if (isset($_GET['id']) && is_numeric($_GET['id'])) {
    $photo = $photos->afficherPhoto($_GET['id']);
}
require_once 'vues/affiche-photo.php'; // si l'id existe et est numérique on appelle affiche la photo
