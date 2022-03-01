<?php

// Etape 2, instancier la classe grâce à new
require_once '1File.php';

$file = new File('test.txt');

$file->write('Bonjour le monde !');

$file->close;
