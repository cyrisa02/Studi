<?php
//etape 5
$titre = 'Mon book';
ob_start();//tout ce qui va être affiché, tu l'affiches pas mais tu le récupères
?>
    <article>
        <?php foreach ($photos as $photo): ?>
            <a href="photo.php?id=<?= $photo->id ?>">
                <img src="photos/<?= $photo->fichier ?>" width="250" />
            </a>
            <h2><?= $photo->titre ?></h2>
        <?php endforeach; ?>
    </article>
<?php
$contenu = ob_get_clean();// suite de ob_start, tout le php "article" va être exécuté, mais pas affiché, il est stocké en string dans $content puis injecté dans le layout.php
require_once('layout.php');