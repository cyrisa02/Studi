<?php

//une classe Logger qui va permettre d'insérer des messages dans des fichiers textes. Chaque fichier de log aura pour nom la date du jour (au format AAAA-MM-JJ) avec, pour extension, .log.

//Voici un exemple de fichier log attendu (2020-03-06.log) 


class Logger
{
    public $file;

    public function __construct()
    {
        $this->file = fopen(date('Y-m-d').'.log', 'a');// 'a' ouvre en écriture seule
        $this->log('Ouverture des logs');
    }

    //La classe Logger devra donc créer le fichier s'il n'existe pas et proposer une méthode log() permettant d'écrire une ligne dans ce fichier : le message sera passé en paramètre, mais la date devra être ajoutée à la volée.

    public function log(string $message)
    {
        fwrite($this->file, '['.date('Y-m-d H:i:s').'] '.$message.PHP_EOL);
    }

    public function __destruct()
    {
        $this->log('Fermeture des logs');
        fclose($this->file);
    }
}

$logger = new Logger();
$logger->log('test');


//Lorsque le Logger est créé, il doit créer automatiquement un message "Ouverture des logs", et un message "Fermeture des logs" doit être créé à la fin du script : cela permet de séparer les appels d'une même journée.

//Une fois votre Logger créé, instanciez-le et créez un message de log de test. Assurez-vous qu'il soit bien placé entre les deux messages d'ouverture et de fermeture.