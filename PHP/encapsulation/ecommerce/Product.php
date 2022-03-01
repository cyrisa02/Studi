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
        $this->setPrice($price);
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
        if ($price > 0) {
            $this->price = $price;
        }
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
