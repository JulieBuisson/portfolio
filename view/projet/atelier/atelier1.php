<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Au pois gourmand</title>
  <link rel="stylesheet" href="css/style.css">
</head>
<body>
  
</body>
</html>

<?php
require_once('header.php');
?>

<div class="row">
<div class="card col-4" style="width: 18rem;">
  <img src="img/rome.jpg" class="card-img-top" alt="rome">
  <div class="card-body">
    <h5 class="card-title">Formule Rome</h5>
    <p class="card-text">Tomates buratta</p>
    <p class="card-text">Rizotto aux asperges</p>
    <p class="card-text">Panna cotta</p>
    <a href="menu.php?titre=<?='menu1'?>&amp;nom=<?='Rome'?>&amp;prix=<?=25?>&amp;photo=<?='img/rome.jpg'?>" class="btn btn-info col-12">Choisir</a>
  </div>
</div>

<div class="card col-4" style="width: 18rem;">
  <img src="img/nyork.jpg" class="card-img-top" alt="new-york">
  <div class="card-body">
    <h5 class="card-title">Formule New-York</h5>
    <p class="card-text">César salade</p>
    <p class="card-text">Cheese burger</p>
    <p class="card-text">Cheesecake</p>
    <a href="menu.php?titre=<?='menu2'?>&amp;nom=<?='New-York'?>&amp;prix=<?=23?>&amp;photo=<?='img/nyork.jpg'?>" class="btn btn-danger col-12">Choisir</a>
  </div>
</div>
</div>

<div class="row">
<div class="card col-4" style="width: 18rem;">
  <img src="img/delhi.jpg" class="card-img-top" alt="delhi">
  <div class="card-body">
    <h5 class="card-title">Formule Delhi</h5>
    <p class="card-text">Poppadoms</p>
    <p class="card-text">Agneau byriani</p>
    <p class="card-text"> Lassi mangue</p>
    <a href="menu.php?titre=<?='menu3'?>&amp; nom=<?='Delhi'?>&amp;prix=<?=24?>&amp;photo=<?='img/delhi.jpg'?>" class="btn btn-warning col-12">Choisir</a>
  </div>
</div>

<div class="card col-4" style="width: 18rem;">
  <img src="img/hanoi.jpg" class="card-img-top" alt="hanoi">
  <div class="card-body">
    <h5 class="card-title">Formule Hanoï</h5>
    <p class="card-text">Nems aux crevettes </p>
    <p class="card-text">Poulet saté</p>
    <p class="card-text">Perles de coco</p>
    <a href="menu.php?titre=<?='menu4'?>&amp;nom=<?='Hanoï'?>&amp;prix=<?=28?>&amp;photo=<?='img/hanoi.jpg'?>" class="btn btn-primary col-12">Choisir</a>
  </div>
</div>
</div>

<?php
require_once('footer.php');
?>