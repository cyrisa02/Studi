<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8"/>
</head>
<body>
<section>
    <h1>Administration de votre site</h1>
    <?php
    if (isset($_GET['admin']) && 1 === (int)$_GET['admin']) {
        ?>
        <p class="greetings">
            <?php
            if (isset($_GET['name'])) {
                echo sprintf("Bienvenue sur l'administration de votre site %s", $_GET['name']);
            }
            ?>
        </p>
        <p>
            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et
            dolore
            magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea
            commodo
            consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla
            pariatur
        </p>
        <table>
            <thead>
            <tr>
                <td>Nom</td>
                <td>Prénom</td>
                <td>Action</td>
            </tr>
            </thead>
            <tbody>
            <tr>
                <td>Lorem</td>
                <td>Ipsum</td>
                <td><a href="#">Supprimer</a></td>
            </tr>
            <tr>
                <td>John</td>
                <td>Doe</td>
                <td><a href="#">Supprimer</a></td>
            </tr>
            <tr>
                <td>John</td>
                <td>Doe</td>
                <td><a href="#">Supprimer</a></td>
            </tr>
            </tbody>
        </table>
        <?php
    } else {
        echo "<p>Vous n'êtes pas autorisés à accéder à cette partie du site.</p>";
    }
    ?>
</section>

</body>
<style>
/**
    Attention, ce CSS est là uniquement pour rendre le formulaire "agréable" à la lecture sans que vous n'ayez
    à récupérer deux fichiers distincts.
    Dans un cas d'usage "réel", ces éléments doivent être externalisés
     */
    body {
        font-family: Calibri, serif;
    }

    h1, h2 {
        text-align: center;
    }

    table {
        border-collapse: collapse;
        width: 50%;
        margin: auto;
    }

    table, th, td {
        border: 1px solid black;
    }

    thead {
        background-color: beige;
        font-weight: bold;
        text-align: center;
    }

    p {
        width: 50%;
        margin: auto auto 10px;
    }

    p.greetings {
        background-color: ivory;
        font-weight: bold;
        font-size: 16px;
        padding: 5px;
        border: 1px solid gray;
    }

</style>
</html>
