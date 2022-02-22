<?php

$posts = [
	1 => ['title' => 'Comment sécuriser mon application ?', 'createdAt' => new \DateTime('2020-04-06')],
	['title' => 'Comment récupérer un paramètre de mon URL ?', 'createdAt' => new \DateTime('2020-03-12')],
	['title' => 'Comment récupérer le contenu de mon formulaire ?', 'createdAt' => new \DateTime('2020-02-04')],
];

// 1
if (!ctype_digit($_GET['id']) || $_GET['id'] <= 0) {
    die('Une erreur est survenue. Merci de réessayer.');
}

$id = (int) $_GET['id'];

// 2
if (!isset($posts[$id])) {
    die('Une erreur est survenue. Merci de réessayer.');
}

$post = $posts[$id];

echo 'L\'article "'.$post['title'].'" a été publié le '.$post['createdAt']->format('d/m/Y').'.';


//Faisons en sorte de sécuriser cette page selon les règles suivantes :

//La valeur de id doit être un entier strictement supérieur à 0.

//L'article doit exister.

//Dans ces deux cas, on affichera un simple message Une erreur est survenue. Merci de réessayer..