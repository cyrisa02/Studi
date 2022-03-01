<?php

require_once 'Product.php';

class Book extends Product
{
    protected string $author;
    protected int $pagesCount;

    public function __construct(string $name, float $price, PriceFormatter $formatter, string $author, int $pagesCount)
    {
        parent::__construct($price, $name, $formatter);
        $this->author = $author;
        $this->pagesCount = $pagesCount;
    }

    public function getAuthor(): string
    {
        return $this->author;
    }

    public function setAuthor(string $author): Book
    {
        $this->author = $author;

        return $this;
    }

    public function getPagesCount(): int
    {
        return $this->pagesCount;
    }

    public function setPagesCount(string $author): Book
    {
        $this->pagesCount = $pagesCount;

        return $this;
    }
}
