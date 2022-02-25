
<?php
// Fichier Seller.php
require_once '11polyUser.php';

class Seller extends User
{
    public string $company;

    public function __construct(string $name, string $surname, string $company)
    {
        $this->name = $name;
        $this->surname = $surname;
        $this->company = $company;
    }

    public function getDisplayedName(): string // Nous recréons une nouvelle méthode "getDisplayedName" qui va remplacer celle de la classe mère
    {
        return $this->name.' '.$this->surname.' ('.$this->company.')';
        //return $this->company.' - '.parent:: getDisplayedName(); //possibilité de mettre cette ligne avec parent::
    }
}
