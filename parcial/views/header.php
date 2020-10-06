<?php
  $active = "Home";
  if (isset($_REQUEST['controller'])){
    $active = $_REQUEST['controller'];
  }
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
          <a href="" class="btn <?=($active == "Home") ? "active": ""; ?>">home</a>
          <a href="" class="btn <?=($active == "About") ? "active": ""; ?>">about</a>
          <a href="" class="btn <?=($active == "Contact") ? "active": ""; ?>">contact</a>
          <a href="" class="btn <?=($active == "Component") ? "active": ""; ?>">test</a>
        </div>
      </div>
    </header>
    <div class="container">