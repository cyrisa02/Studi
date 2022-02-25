<?php

// Fichier index.php Etape 6

require_once '13intertooltip.php';
require_once '15absBook.php';
require_once '15absHardDrive.php';

$mobyDick = new Book(19.99, 'Moby Dick', 'Herman Melville', 752);
$hardDrive = new HardDrive(49.90, 'BarraCuda', 1000, 'Seagate');
displayTooltip($mobyDick);
displayTooltip($hardDrive);
