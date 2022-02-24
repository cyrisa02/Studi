<?php

// deuxième niveau après être USer, Seller -> require + extends , une seule mère en PHP
// dans le constructeur mettre les propriétés qui viennent de la mère

// la classe mère ne change pas

// dans les fichiers 10 notion de parent  parent::__construct($price, $brand); il ne repètent pas les propriétés

require_once '9heritageUser.php';
class Seller extends User
{
    public string $company;

    public function __construct(string $name, string $surname, string $company)
    {
        $this->name = $name;
        $this->surname = $surname;
        $this->company = $company;
    }
}
