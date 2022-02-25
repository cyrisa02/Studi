<?php
// Fichier Product.php

require_once '13interTooltipable.php'; // Etape 5

class Product implements Tooltipable
{
    public string $title;
    public string $description;

    public function __construct(string $title, string $description)
    {
        $this->title = $title;
        $this->description = $description;
    }
    public function getTitle(): string //Etape5
    {
        return $this->title;
    }

    public function getDescription(): string
    {
        return $this->description;
    }
}

// maintenant User Etape 5
