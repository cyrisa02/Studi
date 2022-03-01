<?php

require_once 'PriceFormatter.php';

class Product
{
    private string $name;
    private float $price;
    // On déclare une propriété de type PriceFormatter
    private PriceFormatter $formatter;

    public function __construct(string $name, float $price, PriceFormatter $formatter)
    {
        $this->name = $name;
        $this->price = $price;
        // On injecte notre PriceFormatter
        $this->formatter = $formatter;
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

    public function formatPrice(): string
    {
        // Nous faisons appel a notre PriceFormatter pour formatter notre prix. Ce n'est plus utile de créer des classes filles.
        return $this->formatter->format($this->getPrice());
    }
}

$hardDrive = new Product('Disque dur', 140.00, new EUFormatter());
$UShardDrive = new Product('Hard Drive', 140.00, new USFormatter());

echo $hardDrive->formatPrice();
echo '<br>';
echo $UShardDrive->formatPrice();


//Nous pouvons maintenant créer nos types de produits sous forme de sous-classes sans problème.

//Il serait possible d'utiliser la composition pour les types de produits : créer une interface ProductType et des sous-classes Book et HardDrive que l'on injecterait dans notre produit. Ainsi, la classe Product resterait sans classe fille (donc serait une classe finale) et toute la logique serait séparée dans d'autres sous-classes plus petites.

//Pour déterminer s'il est préférable d'utiliser la composition ou l'héritage, une solution simple serait de se poser la question : « Est-ce que je suis susceptible d'utiliser ce bout de code dans un autre contexte ? ».

//Dans notre cas, on peut facilement imaginer des cas où on aurait besoin de formater des prix (pour des frais de port, par exemple, qui ne seraient pas des produits à proprement parler), mais moins où on aurait besoin uniquement du nombre de pages et de l'auteur d'un livre.