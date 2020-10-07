<?php

require_once "poo/interfaces/IAnimalController.php";

class MamiferosController implements IAnimalController
{
    public function showAnimals()
    {
        require_once "models/Animals.php";
        $animals = new Animals();
        $animalList = $animals->mamiferos();
        require_once "views/animals.php";
    }
}