<?php

// Fichier Tooltipable.php (Etape1/6), c''est un comportement "able"
// c'est une liste de méthodes

interface Tooltipable
{
    public function getTitle(): string;

    public function getDescription(): string;
}

//Afin de pouvoir gérer nos infobulles, créons une interface Tooltipable (comprendre "qui peut être tooltipé") possédant deux méthodes : getTitle(), qui retournera le titre de l'infobulle, et getDescription(), qui retournera la description à afficher dans l'infobulle.

//Toutes les classes qui implémenteront cette interface devront implémenter leur propre version de ces deux méthodes, ce qui leur permettra de pouvoir être affichées dans une infobulle.

//Cela nous permet de créer une fonction displayTooltip qui prend en paramètre un Tooltipable.

//Etape 2 créer le tooltip.php
