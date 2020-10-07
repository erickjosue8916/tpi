<?php

require_once "poo/abstracts/Animal.php";

class Reptil extends Animal {
    public function __construct($name, $description, $audio)
    {
        parent::__construct($name, $description, $audio);
    }
}