<?php

function printPostFormValue($key)
{
    if (!isset($_POST[$key])) {
        echo sprintf("La clé %s n\'a pas été definie <br/>", $key);
        return;
    }

    echo sprintf("La valeur de la clé %s est : " . PHP_EOL, $key);
    print_r($_POST[$key]);
    echo '<br/>';
}

printPostFormValue('civilite');
printPostFormValue('name');
printPostFormValue('birthDate');
printPostFormValue('comment');
printPostFormValue('email');
printPostFormValue('languages');
printPostFormValue('tos');
