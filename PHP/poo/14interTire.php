<?php

//Un pneu possède certaines caractéristiques, comme sa largeur, sa hauteur et son diamètre.

require_once '14interCharacteristicsDisplayable.php'; //etape 3

class Tire implements CharacteristicsDisplayable
{
    public int $width;
    public int $hight;
    public int $diameter;

    public function __construct(int $width, int $hight, int $diameter)
    {
        $this->width = $width;
        $this->hight = $hight;
        $this->diameter = $diameter;
    }

    public function getCharacteristics(): array
    {
        return [
            'width' => $this->width,
            'height' => $this->height,
            'diameter' => $this->diameter,
        ];
    }
}

// Etape 4 fichier carFunctions
