<?php

// Fichier tooltip.php (Etape 2/6)

function displayTooltip(Tooltipable $tooltipable)
{
    echo '<h3>'.$tooltipable->getTitle().'</h3><p>'.$tooltipable->getDescription().'</p>';
}

//Implémentons maintenant cette interface dans notre classe Company : Etape 3
// dans Company.php
