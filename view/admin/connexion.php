<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="">
  <meta name="author" content="Julie Buisson MXC">

  <title>Portfolio - Julie Buisson</title>

  <!-- CSS -->
  <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css">
  <link href="css/style.css" rel="stylesheet">

  <link href="https://cdnjs.cloudflare.com/ajax/libs/flag-icon-css/3.1.0/css/flag-icon.min.css" rel="stylesheet">

</head>

<body>

    <section id="connexion">
        <div class="banner">
            <?php if(isset($errors)) echo "<h3 class=\"text-center text-danger\">".$errors."</h3>";?>
            <h1 class="text-center text-info">Connexion Admin</h1>
        </div>
        <div id="langue">
        <a class="text-info" href="?lang=fr">Retour au site</a>
        </div>
    </section>

    <br>

    <form class="text-center" action="" method="post">
        <div class="container">
            <div class="form-group col-md-6">
                <label for="InputEmail">Adresse E-mail</label>
                <input type="email" name="email" class="form-control" placeholder="Adresse E-mail">
            </div>
            <div class="form-group col-md-6">
                <label for="InputPassword">Mot de passe</label>
                <input type="password" name="password" class="form-control" placeholder="Mot de passe">
            </div>
        </div>
        <br>
        <input type="submit" class="btn btn-info" value="Se connecter"> 

        <br>
        <br>
        <br>
    
    </form>

</body>