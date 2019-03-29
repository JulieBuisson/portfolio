<?php
require_once('header.php');

if(isset($_GET['titre']) && $_GET['titre'] == 'menu1' || $_GET['titre'] == "menu2" || $_GET['titre'] == "menu3" || $_GET['titre'] == "menu4"){
    echo '<div class="card" style="width: 98%;">
        <h5 class="alert alert-success">Merci pour votre commande !</h5>
        <div class="card-body row">
        <div class="col-4">
          <img src="' . $_GET["photo"] . '" class="card-img" style="width: 100%; margin-left: 2%">
        </div>
        <div class="col-7">
            <h5>Votre formule ' . $_GET['nom'] . ' arrive dans quelques instants...<i class="fas fa-kiwi-bird"></i></h5>
            <p class="card-text">Nous vous souhaitons une bonne dégustation.</p>
            <p class="card-text">Un café gourmand vous est proposé pour terminer votre pause gourmande en douceur.</p>
            <p> -- Votre facture sera de ' . $_GET['prix'] . '€</p> 
            <a href="atelier1.php" class="btn btn-success col-12">Choisir un autre menu</a>
        </div>
          </div>
        </div>';
}

?>


<?php
require_once('footer.php');
?>