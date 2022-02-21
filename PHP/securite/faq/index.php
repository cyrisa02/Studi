<?php

$posts = [
    1 => ['title' => 'Comment sécuriser mon application ?', 'createdAt' => new \DateTime('2020-04-06')],
    ['title' => 'Comment récupérer un paramètre de mon URL ?', 'createdAt' => new \DateTime('2020-03-12')],
    ['title' => 'Comment récupérer le contenu de mon formulaire ?', 'createdAt' => new \DateTime('2020-02-04')],
];
?>
<h1>Foire aux questions</h1>

<?php foreach ($posts as $id => $post) : ?>
    <h2>&laquo; <?= $post['title'] ?> &raquo; publié le <?= $post['createdAt']->format('d/m/Y') ?></h2>
    <!-- 1 -->
    <p><a href="supprimer.php?id=<?= $id ?>">Supprimer</a></p>
<?php endforeach;