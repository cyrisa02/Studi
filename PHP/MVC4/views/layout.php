<!DOCTYPE html>
<html lang="fr">
<head>
    <title><?= $titre; ?></title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
<header>
    <h1>Mon blog</h1>
    <p>Etape 8 avec le $content</p>
</header>
<section>
    <nav>
        <ul>
            <li><a href="/">Accueil</a></li>
        </ul>
    </nav>
    <?= $content; ?>
</section>
<footer>
    <p>Mon blog - Tous droits réservés</p>
</footer>
</body>
</html>