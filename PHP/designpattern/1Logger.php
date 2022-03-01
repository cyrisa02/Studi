<?php

require_once '1LoggerInterface.php';

class Logger implements LoggerInterface // stocke en mémoire ttes les traces de l'execution d'un programme
{
    private static Logger $instance;

    private function __construct() // on a besoin que d'un logger
    {
    }

    public static function getInstance()
    {
        if (!isset(self::$instance)) {
            self::$instance = new Logger();
        }

        return self::$instance;
    }

    public function log(string $message): void
    {
        file_put_contents(date('Y-m-d').'.log', $message.PHP_EOL, FILE_APPEND); //sauvegarde avec nom datedujour.log, dedans y a message,Si le fichier filename n'existe pas, il sera créé. Sinon, le fichier existant sera écrasé, si l'option FILE_APPEND (flag) n'est pas définie.
    }
}
