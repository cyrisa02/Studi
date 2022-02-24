<?php
// avec fopen ou unset

class DestroyMe {
    function __destruct() {
        echo 'Je suis mort !';
    }
}

$destroyMe1 = new DestroyMe();
unset($destroyMe1); // Affiche "Je suis mort !"

$destroyMe2 = new DestroyMe();

$destroyMe3 = new DestroyMe();
$destroyMe3 = null; // Affiche "Je suis mort !"



//Affiche "Je suis mort !" car le script est terminé, donc l'objet $destroyMe2 est détruit automatiquement