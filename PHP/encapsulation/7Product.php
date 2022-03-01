<?php
//MAUVAIS car Le problème principal vient du fait que nous avons intégré à la classe Product une logique qui ne la concernait pas directement : le formatage du prix.

//Cela fonctionne bien, mais ajoutons une autre contrainte et considérons que chaque type de produit possède ses propres caractéristiques : un disque dur possède une marque et une capacité, un livre possède un nombre de pages et un nom d'auteur, etc.

//Nous devrions donc créer une classe fille par type de produit, mais nous ne voulons pas perdre le formatage apporté par les classes EUProduct et USProduct.

//Pour un type de produit, nous serions donc obligés de créer une classe par formatage. Nous aurions ainsi un EUBook et un EUHardDrive (qui héritent de EUProduct), et un USBook et un USHardDrive (qui héritent de USProduct), chaque classe de type étant un duplicata des autres.

//Cela complexifierait inutilement le code et créerait de la duplication, qui rendrait l'application très difficile à maintenir et à faire évoluer.



abstract class Product
{
    private string $name;
    private float $price;

    public function __construct(string $name, float $price)
    {
        $this->name = $name;
        $this->price = $price;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function setName(string $name): void
    {
        $this->name = $name;
    }

    protected function getPrice(): float
    {
        return $this->price;
    }

    public function setPrice(float $price): void
    {
        $this->price = $price;
    }

    public abstract function formatPrice(): string;
}

class EUProduct extends Product
{
    public function formatPrice(): string
    {
        return $this->getPrice().' €';
    }
}

class USProduct extends Product
{
    public function formatPrice(): string
    {
        return '$'.$this->getPrice();
    }
}

$hardDrive = new EUProduct('Disque dur', 140.00);
$UShardDrive = new USProduct('Hard Drive', 140.00);

echo $hardDrive->formatPrice(); // Affiche 140.00 €
echo '<br>';
echo $UShardDrive->formatPrice(); // Affiche $140.00