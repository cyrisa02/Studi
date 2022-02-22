<?php

$resource = fopen('fichier.txt', 'w'); // crée et édite

fwrite($resource, 'Hello');
fwrite($resource, 'world');
fwrite($resource, '!');

fclose($resource);

var_dump(file_get_contents('fichier.txt'));

// chaîne de caractères, d'un tableau ou d'une ressource. PAS DE BOUCLE

file_put_contents('fichier.txt', 'Hello world !'.PHP_EOL);
file_put_contents('fichier.txt', ['Texte', 'supplémentaire'], FILE_APPEND); // à la fin du fichier grâce FILE_APPEND

var_dump(file_get_contents('fichier.txt'));