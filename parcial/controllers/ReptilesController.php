<?php

require_once "poo/interfaces/IAnimalController.php";

class ReptilesController implements IAnimalController
{
    public function showAnimals()
    {
        require_once "models/Animals.php";
        $animals = new Animals();
        $animalList = $animals->reptiles();
        require_once "views/animals.php";
    }
}