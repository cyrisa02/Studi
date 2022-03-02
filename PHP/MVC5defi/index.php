<?php

require_once('controleurs/Controleur.php');
require_once('modeles/Modele.php');
require_once('modeles/Photo.php');
require_once('modeles/Photos.php');
require_once('modeles/Serie.php');
require_once('modeles/Series.php');
$controleur = new Controleur();
if (isset($_GET['page']) && 'photo' === $_GET['page']) {
    $controleur->afficherPhoto();
} elseif (isset($_GET['page']) && 'series' === $_GET['page']) {
    $controleur->listerSeries();
} else {
    $controleur->listerPhotos();
}