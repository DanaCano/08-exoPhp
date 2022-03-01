<?php require_once 'init.inc.php';?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Les joueurs PSG</title>

    <!-- CDN CSS BOOTSTRAP -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <!-- STYLE CSS PERSO -->
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="<?= URL ?>accueil.php">PSG</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link" aria-current="page" href="<?php echo URL; ?>accueil.php">Accueil</a>
        </li> 

        <li class="nav-item">
          <a class="nav-link" href="<?php echo URL; ?>ajout_joueur.php">Ajout</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="<?php echo URL; ?>tous_les_joueurs.php">Voir les Joueurs</a>
        </li>
      </ul>
    </div>
  </div>
</nav>


    <div class="container" style="margin-bottom:500px">




