<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8"/>
</head>
<body>
<section>

</section>
<?php
if (!empty($_POST)) {
    $message = buildContactMessage();
    writeInContactFile($message);
    ?>
    <h1>Merci d'avoir pris contact</h1>

    <p><?php echo $message; ?></p>
    <?php
} else {
    if (isset($_GET['admin']) && (int)$_GET['admin'] === 1) {
        ?>
        <h1>Voici la liste des messages reçus</h1>

        <p><?php echo readContactFile(); ?></p>
        <?php
    } else {
        ?>
        <h1>Erreur</h1>

        <p>Vous n'avez pas accès à cette page</p>
        <?php
    }
}
?>
</body>
<style>
    body {
        font-family: Calibri, serif;
    }
</style>
</html>

<?php
function writeInContactFile($message)
{
    $file = 'contact.txt';

    if (!is_file($file)) {
        $current = '';
    } else {
        $current = file_get_contents($file);
    }

    $current .= $message;
    $current .= PHP_EOL;

    file_put_contents($file, $current);
}

function readContactFile()
{
    $file = 'contact.txt';

    if (!is_file($file)) {
        return null;
    }
    return file_get_contents($file);
}

function buildContactMessage()
{
    $message = 'Date de création : ' . date('d/m/y H:i:s') . '<br/>' . PHP_EOL;

    if (isset($_POST['name'])) {
        $message .= 'Nom : ' . $_POST['name'] . '<br/>' . PHP_EOL;
    }

    if (isset($_POST['email'])) {
        $message .= 'Email : ' . $_POST['email'] . '<br/>' . PHP_EOL;
    }

    if (isset($_POST['message'])) {
        $message .= 'Message : ' . $_POST['message'] . '<br/>' . PHP_EOL;
    }

    return $message;
}

?>