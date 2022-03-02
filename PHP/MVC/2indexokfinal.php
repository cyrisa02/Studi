<?php

//c'est le contrôleur
require_once 'modeles/Photos.php'; //appelle le modèle
$photos = new Photos(); // charge les données
$photos = $photos->listerPhotos();
require_once 'vues/liste-photos.php'; //appelle à la vue qui affiche les données, c'est du html
