<?php

// fichier Race.php, c'est une nouvelle classe comme 8Moto

class Race
{
    public Moto $moto1;
    public Moto $moto2;

    public function __construct(Moto $moto1, Moto $moto2)
    {
        $this->moto1 = $moto1;
        $this->moto2 = $moto2;
    }

    public function startRace(): Moto
    {
        if ($this->moto1->maxSpeed > $this->moto2->maxSpeed) {
            return $this->moto1;
        }

        return $this->moto2;
    }
}
