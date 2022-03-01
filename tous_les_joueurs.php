<?php require_once 'inc/header.inc.php'; //inclusion du fichier 'header.inc.php' ?>

<?php
//AFFICHAGE de la table 'player' avec tout les joueurs

$r = execute_requete(" SELECT * FROM player");
$content .= "<div class='row'>";

  //Affichage des joueurs :
$content .= "<div class='col-3'>";

    while( $player = $r->fetch( PDO::FETCH_ASSOC)){
        $content .= "<div class='list-group-item'>";
          //debug( $player );
        $content .= "<a href='fiche_joueur.php?id_player=$player[id_player]'> 
        $player[nom]<br> $player[prenom] </a>
        ";


        if (!empty($player['message'])){
                $content .= "pas libre";
        }
        else{
            $content .= "libre";
        }


        $content .= "</div>";
      } 
  
$content .= "</div>";
$content .= "</div>";


?>

<h1>TOUS LES JOUEURS PSG</h1><br>

<?php echo $content; ?>


<?php require_once 'inc/footer.inc.php'; //inclusion du fichier 'header.inc.php' ?>