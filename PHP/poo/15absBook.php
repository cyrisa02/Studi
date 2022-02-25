<?php

// Fichier Book.php
require_once '15absProduct.php';

class Book extends Product
{
    private const TAX_ON_BOOKS = 5 / 100; //Etape 2
    public string $author;
    public int $pagesNumber;

    public function __construct(float $price, string $title, string $author, int $pagesNumber)
    {
        // Le titre du livre correspond à la propriété "name" de notre produit
        parent::__construct($price, $title);
        $this->author = $author;
        $this->pagesNumber = $pagesNumber;
    }

    public function getTotalPrice(): float // Etape 2
    {
        return $this->price * (1 + TAX_ON_BOOKS);
    }

    // Implémentation de l'interface : on récupère la fonction du 13interTooltipable.php par l'intermediaire de Product, le comportement

    public function getTitle(): string
    {
        return $this->name.', de '.$this->author;
    }

    public function getDescription(): string
    {
        $description = $this->name.' est un livre de '.$this->author.'. ';
        if ($this->pagesNumber < 100) {
            $description .= 'Avec ses '.$this->pagesNumber.' pages, ce livre est idéal pour les lecteurs occasionnels';
        } else {
            $description .= 'Seuls les lecteurs acharnés viendront à bout de ses '.$this->pagesNumber.' pages.';
        }

        return $description;
    }
}

//Mise à jour idenbtique pour les disques durs à 20% de TVA
