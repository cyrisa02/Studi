<?php

interface PriceFormatter
{
    // Tous nos PriceFormatter devront implémenter cette méthode. Cela nous permet de l'utiliser dans nos produits.
    public function format(float $price): string;
}

// On remarque l'utilisation de classes finales, on implémente la méthode format
final class EUFormatter implements PriceFormatter
{
    public function format(float $price): string// et oui, c'est un string puisqu'on a l'unité  € ou $
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

// La règle: vu qu'on implémente une interface (PriceFormatter)  il est d'usage et fortement conseillé d'utiliser "final class" et jamais abstract class!!!

//après les € et les $ il ne peut pas y avoir de filles, par contre sur Book on peut avoir (romans, magazines, etc..) et pour HD (SSD, clé USB et c...)

//le priceformater pourra aussi gérer les frais de port
