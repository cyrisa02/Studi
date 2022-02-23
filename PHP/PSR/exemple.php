<?php
// Les différents éléments doivent être indentés correctement

// Le nom d'une classe est écrit en PascalCase
class FooBar
{
    // Une constante doit être déclarée en majuscules
    // Les mots réservés sont en minuscules
    public const MY_CONST = 0;

    // le nom d'une fonction doit respecter la casse camelCase, comme les noms de variables
    // Pas d'espace entre le nom d'une fonction et ses paramètres
    public function sampleFunction($sampleVar)
    {
        // Les accolades sont sur une ligne à part
        // On évite aussi les sauts de ligne inutiles
        switch ($sampleVar) {
            case 1:
                echo 'Cas n°1';
                break;
            case 2:
                echo 'Cas n°2';
                break;
            default:
                echo 'Cas par défaut';
                break;
        }
    }
}
