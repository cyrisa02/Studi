<?php
$extensions = array('jpg', 'png', 'gif');

if (isset($_FILES['cni']) && !$_FILES['cni']['error']) {
  $fileInfo = pathinfo($_FILES['cni']['name']);

  if ($_FILES['cni']['size'] <= 2000000) {
    if (in_array($fileInfo['extension'], $extensions)) {
      // Scripts à exécuter quand les contrôles sont bons. 
      
      // La dernière étape est l'enregistrement du fichier dans un dossier du serveur.

//Pour cela, il est possible d'utiliser la fonction move_uploaded_file() de PHP. Elle accepte deux paramètres : $_FILES['monFichier']['tmp_name'] et $_FILES['monFichier']['name']
$filename = uniqid ();
move_uploaded_file($_FILES['cni']['tmp_name'], 'cniacreer/'.$filename.'.'.$fileInfo['extension']);
echo 'Le fichier a été envoyé sur le serveur';


// Quand le fichier aura passé tous les contrôles, il sera enregistré dans le répertoire cniacreer/ et le script affichera : Le fichier a été envoyé sur le serveur.
// Il faut créer le repértoire cniacreer/
    } else {
      echo 'Ce type de fichier est interdit';
    }
  } else {
    echo 'Le fichier dépasse la taille autorisée';
  }
} else {
  echo 'Une erreur est survenue lors de l\'envoi du fichier';
}

?>