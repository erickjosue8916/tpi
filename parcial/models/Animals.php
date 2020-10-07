<?php

require_once "poo/clases/Mamifero.php";
require_once "poo/clases/Pez.php";
require_once "poo/clases/Reptil.php";
require_once "poo/clases/Ave.php";

class Animals
{
  public function mamiferos()
  {
    $perro = new Mamifero("perro", "Animal de 4 patas normamelnte pequeño, muy fiel a su amo", "perro.mp3");
    $gato = new Mamifero("gato", "Animal de 4 patas pequeño, muy dormilon", "perro.mp3");
    
    return  [$perro, $gato];
  }
  public function aves()
  {
    $pinguino = new Mamifero("pinguino", "Animal de 4 patas normamelnte pequeño, muy fiel a su amo", "perro.mp3");
    
    return [$pinguino];
  }
  public function reptiles()
  {
    $tortuga = new Mamifero("tortuga", "Animal de 4 patas normamelnte pequeño, muy fiel a su amo", "perro.mp3");
    $rana = new Mamifero("rana", "Animal de 4 patas pequeño, muy dormilon", "perro.mp3");
    $anaconda = new Mamifero("anaconda", "Animal de 4 patas pequeño, muy dormilon", "perro.mp3");
    
    return [$tortuga, $rana, $anaconda];
  }
  public function peces()
  {
    $tiburon = new Mamifero("tiburon", "Animal de 4 patas normamelnte pequeño, muy fiel a su amo", "perro.mp3");
    
    return [$tiburon];
  }
}
