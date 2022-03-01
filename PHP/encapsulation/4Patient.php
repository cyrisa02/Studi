<?php

//Un hôpital vous demande d'améliorer le code de son application de gestion de patients pour éviter au maximum que les données des utilisateurs soient mal manipulées.

//Protégez cette classe en effectuant les modifications suivantes :

    //La propriété id ne doit pouvoir être manipulée que par notre classe : on ne doit pas pouvoir modifier l'id sous peine de modifier un autre patient que celui que l'on a chargé.->private

    //Les propriétés firstName et lastName ne doivent jamais être récupérées directement par les scripts externes, mais toujours via la méthode getFullName(). En revanche, elles peuvent être manipulées par les classes filles.->protected

    //La méthode loadPatient()ne doit pouvoir être appelée que par notre classe. Un objet représentant un patient, on ne doit pas pouvoir appeler cette méthode ailleurs que dans le constructeur de notre classe.->private

class Patient
{
    private int $id;
    protected string $firstName;
    protected string $lastName;

    public function __construct(int $id)
    {
        $this->loadPatient($id);
    }

    private function loadPatient(int $id)
    {
        // Nous simulons l'appel à une base de données en créant un tableau en dur
        $data = [
            'id' => $id,
            'firstName' => 'John',
            'lastName' => 'Doe',
        ];

        $this->id = $data['id'];
        $this->firstName = $data['firstName'];
        $this->lastName = $data['lastName'];
    }

    public function getFullName()
    {
        return $this->firstName.' '.$this->lastName;
    }
}
