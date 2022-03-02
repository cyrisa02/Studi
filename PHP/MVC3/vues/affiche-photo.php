<?php
//Etape 6
$titre = 'Une photo de mon book';
if (is_null($photo)):
    $contenu = "Cette photo n'existe pas.";
else:
    ob_start();
?>
        <article>
            <img src="photos/<?= $photo->fichier ?>" width="500" />
            <h2><?= $photo->titre ?></h2>
        </article>
<?php
    $contenu = ob_get_clean();
endif;
require_once('layout.php');