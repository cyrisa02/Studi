<?php

// Fichier Company.php
require_once '13interTooltipable.php'; //Etape3

class Company implements Tooltipable
{
    public string $name;
    public string $type;
    public string $domain;

    public function __construct(string $name, string $type, string $domain)
    {
        $this->name = $name;
        $this->type = $type;
        $this->domain = $domain;
    }

    public function getTitle(): string //Etape3
    {
        return $this->name;
    }

    public function getDescription(): string//Etape3
    {
        return $this->name.' est une '.$this->type.' spécialisée dans '.$this->domain;
    }
}
//Etape 4 modifier le fichier index.php
