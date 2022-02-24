<?php
// Zoo-animaux-> regarder ce qu'ils ont en commun-> classe Animal puis personaliser -> lion, tigre etc... pour ne pas répeter

class User
{
    public string $name;
    public string $surname;

    public function __construct(string $name, string $surname)
    {
        $this->name = $name;
        $this->surname = $surname;
    }

    public function getDisplayedName(): string
    {
        return $this->name.' '.$this->surname;
    }
}