<?php require_once 'inc/header.inc.php'; //inclusion du fichier 'header.inc.php' ?>


<?php

$monid = $_GET['id_player'];

if( $_POST ){ //Si on a valide le formulaire 

// print '<pre>';                 LE PROF DEMANDE DE FAIRE TOUJOUR UN PRINT_r
    //     print_r( $joueur );
// print '</pre>';

    $lemessage = $_POST['message']; 
    execute_requete("UPDATE player SET message = '$lemessage' WHERE id_player = $monid");

}

//Fiche d'un joueur selectioné'

$r = execute_requete("SELECT * FROM player WHERE id_player = $monid");
$content .= "<div class='row'>";

  //Affichage des joueurs :
$content .= "<div class='col-3'>";

    $player = $r->fetch( PDO::FETCH_ASSOC);
          //debug( $player );
        $content .= "$player[nom]<br> $player[prenom] <br>  $player[age] <br>  $player[poste] <br> $player[presentation] <br> $player[message]";
$content .= "</div>";
$content .= "</div>";


?>

<?php if( empty( $player['message']) ) { //SI le message est vide, on affiche le formulaire ?>

<h1>Fiche d'un joueur selectionné</h1><br>
<?php echo $content; ?>

<br>
<form method="post">

    <label for="desc">Message</label><br>
        <textarea name="message" id="message" cols="30" rows="10"></textarea><br><br>

    <input type="submit" class="btn btn-secondary" value="Envoyer">
</form>

<?php }else { //SINON
    
    echo "<span style='color: tomato;' >DEJA RESERVE !! </span>";  

}
?>


<?php require_once 'inc/footer.inc.php'; //inclusion du fichier 'header.inc.php' ?>