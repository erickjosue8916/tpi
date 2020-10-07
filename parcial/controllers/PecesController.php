<?php

require_once "poo/interfaces/IAnimalController.php";

class PecesController implements IAnimalController
{
    public function showAnimals()
    {
        require_once "models/Animals.php";
        $animals = new Animals();
        $animalList = $animals->peces();
        require_once "views/animals.php";
    }
}