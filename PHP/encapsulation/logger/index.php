<?php

// Etape 2, instancier la classe grâce à new
require_once 'LogFile.php';

$file = new LogFile('log3.txt');

$file->write('Bonjour le monde !');
//$file->setUsername('John');sans fluent setter
//$file->setIpAdress('1.2.3.4');
//$file->write('Bonjour John');

$file->setUsername('John')
->setIpAdress('1.2.3.4')
->write('Bonjour John'); //avec fluent setter

$file->close();
