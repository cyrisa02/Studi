<?php

require_once '1Logger.php';
class User
{
    public string $username;
    public LoggerInterface $logger;
    public static int $count = 0; // on veut un compteur de user, il n'est pas dépendant du username mais est transversal donc utiliser static et self::, l'objet  n'est pas instancié, pas dépendant de username

    public function __construct(string $username, LoggerInterface $logger)
    {
        $this->username = $username;
        ++self::$count;
        //$this->logger = Logger::getInstance(); // on instancie l'objet Logger avec new mais on change avec le singleton
        $this->logger =$logger;// couplage faible
        $this->logger->log('Utilisateur'.$this->username.' créé');
    }

    public function sayHello(): string
    {
        $this->logger->log($this->username.' dit bonjour'); // à enlever à cause du compteur static

        return 'Bonjour '.$this->username;
    }
}
