<?php

//Un restaurant souhaiterait avoir une application permettant de gérer les plats commandés par ses clients.

//Un plat possède les caractéristiques suivantes :

//Un nom, qui est une chaîne de caractères. Il doit être défini dans le constructeur, être accessible depuis l’extérieur en lecture, mais ne doit pas être modifiable.->private+setName+getName

//Une liste d'ingrédients en supplément, qui est un tableau de chaînes de caractères. Ce sont les ingrédients que les utilisateurs veulent rajouter dans leur plat. Ils doivent être modifiables et accessibles depuis l’extérieur de notre classe.->private

//Un prix, qui est un nombre à virgule. Il doit être défini dans le constructeur et ne doit pas être modifiable. On doit pouvoir cependant récupérer le prix à l’extérieur de la classe, mais en prenant en compte la majoration de 1 € par ingrédient supplémentaire. Il doit être manipulable directement par les classes filles.-> private+setPrice

//Créez une classe permettant de gérer ces contraintes.

class Meal
{
    private string $name;
    private array $ingredients;
    private float $price;

    public function __construct(string $name, float $price)
    {
        $this->setName($name);
        $this->ingredients = [];
        $this->setPrice($price);
    }

    public function getName(): string
    {
        return $this->name;
    }

    private function setName(string $name): void
    {
        $this->name = $name;
    }

    public function getIngredients(): array
    {
        return $this->ingredients;
    }

    public function setIngredients(array $ingredients): void
    {
        $this->ingredients = $ingredients;
    }

    public function getPrice(): float
    {
        return $this->price + count($this->ingredients);
    }

    private function setPrice(float $price): void
    {
        $this->price = $price;
    }
}

$meal = new Meal('Salade Caesar', 10.50);
$meal->setIngredients(['Olives', 'Cheddar']);
echo $meal->getPrice(); // Affiche 12.5
