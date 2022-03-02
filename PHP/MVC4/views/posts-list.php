<?php
//Etape5 deuxième template
$titre = 'Mon blog';
ob_start();
?>
    <article>
        <?php foreach ($posts as $post): ?>
            <a href="?id=<?= $post->getId() ?>">
                <img src="images/<?= $post->getImage() ?>" width="250" />
            </a>
            <h2><?= $post->getTitle() ?></h2>
        <?php endforeach; ?>
    </article>
<?php
$content = ob_get_clean();
require_once('layout.php');