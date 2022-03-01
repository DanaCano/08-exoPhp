<?php require_once 'inc/header.inc.php'; //inclusion du fichier 'header.inc.php' ?>
<?php
//AFFICHAGE DES joueurs :

//Je récupère les différentes joueurs de la table 'player'

$r = execute_requete(" SELECT * FROM player LIMIT 5;");
$content .= "<div class='row'>";

  //Affichage des joueurs :
$content .= "<div class='col-3'>";

    while( $player = $r->fetch( PDO::FETCH_ASSOC)){
        $content .= "<div class='list-group-item'>";
          //debug( $categorie );
        $content .= "$player[nom]<br> $player[prenom] <br>  $player[age] <br>  $player[poste] <br> $player[presentation] <br> $player[message]";
        $content .= "</div>";
      } 
  
$content .= "</div>";
$content .= "</div>";


//----------------------------------------------

?>

<h1>Les joueurs de l'équipe du PSG</h1><br>

<?php echo $content; ?>

<?php require_once 'inc/footer.inc.php'; //inclusion du fichier 'header.inc.php' ?>
