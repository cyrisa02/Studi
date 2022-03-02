<?php
// premier template
$titre = 'Un article de mon blog';
if (is_null($post)):
    $content = "Cet article n'existe pas.";
else:
    ob_start();
    ?>
    <article>
        <img src="images/<?= $post->getImage() ?>" width="500" />
        <h2><?= $post->getTitle() ?></h2>
    </article>
    <?php
    $content = ob_get_clean();
endif;
require_once('layout.php');