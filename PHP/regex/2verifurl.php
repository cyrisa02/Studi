<?php

//Grâce à la fonction PHP adéquate, vérifiez que toutes ces URL sont correctes 



$urls = [
    'www.google.fr',
    'http://www.google.fr',
    'https://www.google.fr',
    'https://www.google.fr:8080',
    'https://www.google.fr:8080/',
    'localhost',
    'google.fr',
    '://www.google.fr',
    'https://www.google.fr:',
];

foreach ($urls as $url) {
    if (preg_match('/^([a-z]+:\/\/)?[a-z]*(\.[a-z]*){2}(:\d+)?\/?$/i', $url)) {
        echo "$url est au bon format.".PHP_EOL;
    } else {
        echo "$url n'est pas au bon format.".PHP_EOL;
    }
}