<!DOCTYPE html>
<html lang="fr">
<head>
    <title><?= $titre ?></title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
<header>
    <h1>Mon book</h1>
</header>
<section>
    <nav>
        <ul>
            <li><a href="/">Accueil</a></li>
            <li><a href="?page=series">Séries</a></li>
        </ul>
    </nav>
    <?= $contenu ?>
</section>
<footer>
    <p>Mon book - Tous droits réservés</p>
</footer>
</body>
</html>