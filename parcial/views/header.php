<?php
  $active = "Mamiferos";
  if (isset($_REQUEST['controller'])){
    $active = $_REQUEST['controller'];
  }
  echo "<script> const baseDir = '" . BASE_DIR . "'; </script>"
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@1,300&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/3e11f034b2.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="<?= BASE_DIR; ?>assets/css/style.css">
    
    <title>TPI -render con OOP-</title>
</head>
<body>
    <header class="navbar">
      <div class="navbar__brand is_jcontent_c is_acontent_c">
        <h1>Parcial</h1> 
      </div>
  
      <div class="navbar__menu is_jitems_r is_acontent_c">
        <div>
          <a href="<?=BASE_DIR?>Mamiferos/showAnimals" class="btn <?=($active == "Mamiferos") ? "active": ""; ?>">Mamiferos</a>
          <a href="<?=BASE_DIR?>Aves/showAnimals" class="btn <?=($active == "Aves") ? "active": ""; ?>">Aves</a>
          <a href="<?=BASE_DIR?>Reptiles/showAnimals" class="btn <?=($active == "Reptiles") ? "active": ""; ?>">Reptiles</a>
          <a href="<?=BASE_DIR?>Peces/showAnimals" class="btn <?=($active == "Peces") ? "active": ""; ?>">Peces</a>
        </div>
      </div>
    </header>
