<?php
$titre = 'Mes séries';
ob_start();
?>
    <article>
        <?php foreach($series as $serie): ?>
            <h2><?= $serie->getTitre() ?></h2>
            <p><?= $serie->getDescription() ?></p>
        <?php endforeach; ?>
    </article>
<?php
$contenu = ob_get_clean();
require_once('layout.php');