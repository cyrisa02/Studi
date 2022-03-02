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
    <p>Etape 4, on prend tout ce qui est commun: header, footer, nav, mais pas l'article $contenu et aussi le $titre qui sont dans liste-photos étape 5</p>
</header>
<section>
    <nav>
        <ul>
            <li><a href="/">Accueil</a></li>
        </ul>
    </nav>
    <?= $contenu ?>
</section>
<footer>
    <p>Mon book - Tous droits réservés</p>
</footer>
</body>
</html>