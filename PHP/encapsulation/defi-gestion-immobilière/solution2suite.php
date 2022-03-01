<?php

//Chaque bien immobilier peut être associé à une annexe, mais ce n'est pas obligatoire. Il existe plusieurs types d'annexes : les jardins, et les places de parking. Les deux possèdent une surface qui ne doit pas être modifiable, mais seule celle des jardins doit être comprise dans la surface habitable. Les jardins possèdent également une caractéristique permettant de définir si une piscine est présente ou non, tandis que les stationnements ont un numéro de place.

//Pour dire qu'un type peut être null, il faut utilise le symbole "?" devant le nom du type. Par exemple, ?int signifie : "un entier ou null".

//Il est possible de spécifier une valeur par défaut dans la signature de fonction en utilisant le symbole "=" suivi de la valeur.

abstract class RealEstate
{
    private string $address;
    private float $price;
    private float $surface;
    private ?Annex $annex;

    public function __construct(string $address, float $price, float $surface, ?Annex $annex = null)
    {
        $this->setAddress($address);
        $this->setPrice($price);
        $this->setSurface($surface);
        $this->setAnnex($annex);
    }

    public function getAddress(): string
    {
        return $this->address;
    }

    private function setAddress(string $address): void
    {
        $this->address = $address;
    }

    public function getPrice(): float
    {
        return $this->price;
    }

    public function setPrice(float $price): void
    {
        $this->price = $price;
    }

    public function getSurface(): float
    {
        if ($this->annex !== null) {
            return $this->surface + $this->annex->getAdditionalSurface();
        }

        return $this->surface;
    }

    private function setSurface(float $surface): void
    {
        $this->surface = $surface;
    }

    public function getAnnex(): ?Annex
    {
        return $this->annex;
    }

    public function setAnnex(?Annex $annex): void
    {
        $this->annex = $annex;
    }
}

final class House extends RealEstate
{
    private int $levelCount;

    public function __construct(string $address, float $price, float $surface, int $levelCount, ?Annex $annex = null)
    {
        parent::__construct($address, $price, $surface, $annex);
        $this->setLevelCount($levelCount);
    }

    public function getLevelCount(): int
    {
        return $this->levelCount;
    }

    public function setLevelCount(int $levelCount): void
    {
        if ($levelCount > 0) {
            $this->levelCount = $levelCount;
        } else {
            $this->levelCount = 1;
        }
    }
}

final class Flat extends RealEstate
{
    private int $floor;

    public function __construct(string $address, float $price, float $surface, int $floor, ?Annex $annex = null)
    {
        parent::__construct($address, $price, $surface, $annex);
        $this->setFloor($floor);
    }

    public function getFloor(): int
    {
        return $this->floor;
    }

    public function setFloor(int $floor): void
    {
        $this->floor = $floor;
    }
}

interface AnnexInterface
{
    public function getAdditionalSurface(): float;
}

abstract class Annex implements AnnexInterface
{
    private float $surface;

    public function __construct(float $surface)
    {
        $this->setSurface($surface);
    }

    public function getSurface(): float
    {
        return $this->surface;
    }

    private function setSurface(float $surface): void
    {
        $this->surface = $surface;
    }
}

final class Garden extends Annex
{
    private bool $hasPool;

    public function __construct(float $surface, bool $hasPool)
    {
        parent::__construct($surface);
        $this->setPool($hasPool);
    }

    public function hasPool(): bool
    {
        return $this->hasPool;
    }

    public function setPool(bool $hasPool): void
    {
        $this->hasPool = $hasPool;
    }

    public function getAdditionalSurface(): float
    {
        return $this->getSurface();
    }
}

final class Parking extends Annex
{
    private int $number;

    public function __construct(float $surface, int $number)
    {
        parent::__construct($surface);
        $this->setNumber($number);
    }

    public function getNumber(): int
    {
        return $this->number;
    }

    public function setNumber(int $number): void
    {
        $this->number = $number;
    }

    public function getAdditionalSurface(): float
    {
        return 0;
    }
}

$garden = new Garden(20, true);
$parking = new Parking(6, 2);
$house = new House('102 rue des noyers', 350000.00, 120, 2);
echo $house->getSurface().'<br>'; // Affiche 120, car il n'y a pas d'annexe
$house->setAnnex($garden);
echo $house->getSurface().'<br>'; // Affiche 140 car le jardin est compris dans l'annexe
$flat = new Flat('45 rue de la république', 150000, 30, 3, $parking);
echo $flat->getSurface().'<br>'; // Affiche 30 car le parking n'est pas compris dans le calcul
