<?php

function readContactFile()
{
    $file = 'contact.txt';

    if (!is_file($file)) {
        return null;
    }
    return file_get_contents($file);
}

function writeInContactFile($message)
{
    $file = 'contact.txt';

    if (!is_file($file)) {
        $current = '';
    } else {
        $current = file_get_contents($file);
    }

    $current .= $message;
    $current .= PHP_EOL;

    file_put_contents($file, $current);
}