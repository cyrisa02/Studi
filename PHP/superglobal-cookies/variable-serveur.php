<?php
echo $_SERVER['REQUEST_METHOD'] . PHP_EOL;
echo $_SERVER['REMOTE_ADDR'] . PHP_EOL;
echo $_SERVER['SCRIPT_FILENAME'] . PHP_EOL;
putenv('contexte=developpement');
echo getenv('contexte');
?>

Affichez les variables serveur suivantes :

    La méthode de requête utilisée pour accéder à la page courante

    L'adresse IP de l'utilisateur qui demande la page courante

    Le chemin absolu vers le fichier correspondant à la page courante

    Définissez une variable d'environnement que vous appellerez contexte et dont la valeur sera developpement. Affichez cette variable, une fois définie.