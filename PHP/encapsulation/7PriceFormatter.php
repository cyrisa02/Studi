<?php

interface PriceFormatter
{
    // Tous nos PriceFormatter devront implémenter cette méthode. Cela nous permet de l'utiliser dans nos produits.
    public function format(float $price): string;
}

// On remarque l'utilisation de classes finales
final class EUFormatter implements PriceFormatter
{
    public function format(float $price): string
    {
        return $price.' €';
    }
}

final class USFormatter implements PriceFormatter
{
    public function format(float $price): string
    {
        return '$'.$price;
    }
}