<br>
<br>

<div class="card d-block m-auto" style="width: 20rem;">
    <img class="card-img-top" src="<?= $donnees["avatar"] ?>" alt="Photo de l'employé">
  <div class="card-body">
    <h4 class="card-title"><?= ucfirst($donnees["nom"]) . " " . ucfirst($donnees["prenom"]) ?></h4>
    <p class="card-text"><?= ucfirst($donnees["service"]) ?></p>
  </div>
  <ul class="list-group list-group-flush">
    <li class="list-group-item">Sexe : <?= ucfirst($donnees["sexe"]) ?> </li>
    <li class="list-group-item">Date d'embauche : <?= $donnees["dateEmbauche"]?></li>
    <li class="list-group-item">Salaire : <?= $donnees["salaire"] ?></li>
    <li class="list-group-item">Id secteur : <?= $donnees["idSecteur"] ?></li>
  </ul>
</div>
