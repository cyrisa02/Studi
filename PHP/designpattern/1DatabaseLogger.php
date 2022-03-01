<?php

require_once '1LoggerInterface.php';

class DatabaseLogger implements LoggerInterface
{
    public function log(string $message): void
    {
        file_put_contents('database.log', $message.PHP_EOL, FILE_APPEND); // ce serait la connexion à la BD
    }
}
