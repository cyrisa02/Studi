<?php

// fichier créer sur le dossier parent 2022-02-28.log

require_once '1User.php';
require_once '1DatabaseLogger.php';

$databaseLogger = new DatabaseLogger();

echo User::$count.PHP_EOL;
$john = new User('John', $databaseLogger);
echo User::$count.PHP_EOL;
$laure = new User('Laure', $databaseLogger);
echo User::$count.PHP_EOL;
echo $john->sayHello();
echo '<br>';
echo $laure->sayHello();
$samantha = new User('Samanhta', $databaseLogger);
echo User::$count.PHP_EOL;
