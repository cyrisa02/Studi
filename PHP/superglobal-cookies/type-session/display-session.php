<?php
//display-session.php
session_start();

if (isset($_SESSION['name']) && isset($_SESSION['age']) && isset($_SESSION['favoriteLangages']))
{
  echo sprintf("Je m'appelle %s et j'ai %s ans", $_SESSION['name'], $_SESSION['age']) . PHP_EOL;
  echo sprintf("Mes langages de programmation favoris sont les suivants") . PHP_EOL;
  foreach ($_SESSION['favoriteLangages'] as $langage)
  {
    echo $langage . PHP_EOL;
  }
} else {
  echo "Toutes les variables n'ont pas été définies" . PHP_EOL;
}

session_destroy();

// Dans un second script display-session.php, vous afficherez le message "Bonjour, je m'appelle ... et j'ai ... Mes langages de programmation préférés sont ...", que vous aurez récupéré grâce aux variables de session.

//Vous prendrez soin de supprimer la session à la fin de ce second script.

//Attention, vérifiez que ces variables ont bien été définies avant de les afficher