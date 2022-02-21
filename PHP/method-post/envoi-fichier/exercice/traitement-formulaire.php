<?php

function printPostFormValue($key)
{
    if (!isset($_POST[$key])) {
        echo sprintf("La clé %s n/'a pas été definie <br/>", $key);
        return;
    }

    echo sprintf("La valeur de la clé %s est : " . PHP_EOL, $key);
    print_r($_POST[$key]);
    echo '<br/>';
}


function manageFile($key)
{
    $extensions = array('jpg', 'png', 'gif', 'pdf');

    if (isset($_FILES[$key]) && !$_FILES[$key]['error']) {
        $fileInfo = pathinfo($_FILES[$key]['name']);
        if ($_FILES[$key]['size'] <= 2000000) {
            if (in_array($fileInfo['extension'], $extensions)) {
                if (!is_dir($key)) {
                    try {
                        mkdir($key);
                        echo 'Le répertoire a été créé ';
                    } catch (Exception $e) {
                        echo 'Une erreur est survenue : ' . $e->getMessage();
                    }
                }

                try {
                    move_uploaded_file($_FILES[$key]['tmp_name'], $key . '/' . $_FILES[$key]['name']);
                    echo 'Le fichier a été envoyé sur le serveur';
                } catch (Exception $e) {
                    echo 'Une erreur est survenue : ' . $e->getMessage();
                }
            } else {
                echo 'Ce type de fichier est interdit';
            }
        } else {
            echo 'Le fichier dépasse la taille autorisée';
        }
    } else {
        echo 'Une erreur est survenue lors de l\'envoi du fichier';
    }
}

printPostFormValue('civilite');
printPostFormValue('name');
printPostFormValue('tos');
manageFile('picture');
manageFile('cardId');
