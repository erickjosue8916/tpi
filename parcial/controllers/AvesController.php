<?php

require_once "poo/interfaces/IAnimalController.php";

class AvesController implements IAnimalController
{
    public function showAnimals()
    {
        require_once "models/Animals.php";
        $animals = new Animals();
        $animalList = $animals->aves();
        require_once "views/animals.php";
    }
}