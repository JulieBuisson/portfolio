<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Admin - Portfolio</title>


    <link href="css/style.css" rel="stylesheet">

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">


    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

</head>
<body id="back">

  <nav class="navbar navbar-expand-lg navbar-light bg-info position-fixed w-100" id="nav">
    <a class="navbar-brand" href="#">Espace admin</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse justify-content-center" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link text-light" href="#form">Formations</a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-light" href="#comp">Compétences</a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-light" href="#rea">Réalisations</a>
        </li>
      </ul>
    </div>
    <a class="nav-link text-dark" href="?page=out">Déconnexion</a>
  </nav>

  <br>
  <br>
  <br>
  <br>

  <div class="container" id="contain">
    <div class="jumbotron">
      <h1 class="display-4">Bienvenue <?=$users["prenom"]?></h1>
      <hr>
      <a class="btn btn-info float-right" href="?add" role="button"><i class="fas fa-user-plus"> </i> &nbsp; Ajouter un nouvel utilisateur</a>
      <p class="lead">Informations du profil :</p>
      <br>
      <div class="col-md-10 mx-auto">
        <ul class="list-group">

          <li class="list-group-item list-group-item-info text-center">
            <a href="?page=delete&id=<?= $users[$id] ?>" class="text-dark float-left">
            <i class="fas fa-user-minus"><span>Supprimer l'utilisateur</span></i>
            </a>

            <strong><?=$users["prenom"] . " " . $users["nom"]?></strong>

            <a href="?page=update&id=<?= $users[$id] ?>" class="text-dark float-right">
            <i class="fas fa-user-edit"><span>Modifier l'utilisateur</span></i>
            </a>
          </li>

          <li class="list-group-item list-group-item-info"><em>Age</em> : <?=$users["age"]?> ans</li>

          <li class="list-group-item list-group-item-info"><em>E-mail</em> : <?=$users["email"]?></li>

          <li class="list-group-item list-group-item-info"><em>Ville</em> : <?=$users["ville"]?></li>

          <li class="list-group-item list-group-item-info"><em>Téléphone</em> : 0<?=$users["phone"]?></li>

        </ul>
      </div>
      <br>
      <hr>
      <br>
      <p class="lead"><?=$title?></p>
      <br>
      <a class="btn btn-info btn-lg float-right" href="#" role="button">Messagerie <span class="badge badge-info badge-pill">(1)</span></a>
      <div></div>
    </div>

    <h3 id="form">Formations</h3>
    <table class="table table-bordered text-center table-striped table-dark table-responsive">
      <thead class="thead bg-info"><tr>
        <?php
          foreach($fields as $key => $values):
            echo "<th>" . ucfirst($values['Field']) . "</th>"; 
          endforeach;
        ?>
        <th>Modifier</th>
        <th>Supprimer</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <?php foreach($users as $keys => $infos):

            echo "<td>" . implode("</td><td>",$users) . "</td>";

            echo "<td><a href='?page=update' class='text-light'><i class='fas fa-user-edit'></i></a></td>";

            echo "<td><a href='?page=delete' class='text-light'><i class='fas fa-trash-alt'></i></a></td>";

          endforeach ?>
        </tr>
      </tbody>
    </table>
    <?php var_dump($users) ?>
    <br>
    <br>
  </div>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

</body>
</html>