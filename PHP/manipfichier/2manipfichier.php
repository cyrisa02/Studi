<?php
//
var_dump(is_file('./fichier.txt')); //parcourir une arborescence donnée et d'en explorer les fichiers         de      manière dynamique.Pour cela, il est nécessaire d'utiliser la                                    fonction is_file(), qui prend en paramètre le chemin de la                                  ressource externe et retourne true s'il s'agit d'un fichier.
$result = fopen('fichier.txt', 'r'); //On peut ensuite utiliser la fonction fopen(), qui prend en                                   paramètres le chemin du fichier souhaité et le mode d'ouverture                             voulu, afin d'obtenir une ressource PHP permettant l'accès au fichier.
var_dump($result);

$close = fclose($result);
var_dump($close, $result);//Une fois un fichier ouvert et les traitements souhaités réalisés, il est nécessaire de refermer le fichier pour libérer la référence vers celui-ci.