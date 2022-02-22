<?php

$posts = [
    1 => ['title' => 'Comment sécuriser mon application ?', 'createdAt' => new \DateTime('2020-04-06')],
    ['title' => 'Comment récupérer un paramètre de mon URL ?', 'createdAt' => new \DateTime('2020-03-12')],
    ['title' => 'Comment récupérer le contenu de mon formulaire ?', 'createdAt' => new \DateTime('2020-02-04')],
    ['title' => 'Que se passe-t-il lorsqu\'on fait un <script>alert(\'Raté\')</script> ?', 'createdAt' => new \DateTime('2020-01-31')],
];
?>

<h1>Foire aux questions</h1>

<?php foreach ($posts as $id => $post) : ?>
    <h2> <i> <?= htmlentities($post['title']) ?> </i> publié le <?= $post['createdAt']->format('d/m/Y') ?> </h2>
    <p>La fonction PHP native htmlspecialchars() permet de convertir les caractères HTML spéciaux afin qu'ils ne soient pas directement interprétés par les navigateurs.</p>
    <p>htmlentities() est identique à la fonction htmlspecialchars(), sauf que tous les caractères qui ont des équivalents en entités HTML sont effectivement traduits. </p>
<?php endforeach;