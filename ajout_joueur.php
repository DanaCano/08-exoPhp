<?php require_once 'inc/header.inc.php'; //inclusion du fichier 'header.inc.php' ?>

<?php



    if( $_POST ){ //Si on a valide le formulaire 

        //print '<pre>';
        //print_r( $_POST );
        //print '</pre>';

        //Ici, je stocke les valeurs renseignees par l'utilisateur dans des variables
        $nom =  $_POST['nom'];
        $prenom =  $_POST['prenom'];
        $age =  $_POST['age'];

        //Pour controler les saisies
        if( empty( $nom ) && empty( $prenom ) ){ //Si le nom ET prenom sont vides

            echo "<p style='color:blue;'>Vous devez renseigner le nom et le prenom !</p>";
        }
        else if( empty( $nom) ){ //SINON SI le nom est vide

            echo "<p style='color:red;'>Vous devez renseigner le nom !</p>";
        }
        else if( empty( $prenom ) ){ //SINON SI prenom est vide

            echo "<p style='color:green;'>Vous devez renseigner le prenom !</p>";
        }
        else if( !is_numeric( $age ) ){ //SINON SI age est non numerique

            echo "<p style='color:orange;'>Vous devez renseigner un chiffre !</p>";
        }
        else if( $age > 99 || $age < 10 ) { //SINON au maximun deux chiffre

            echo "<p style='color:yellow;'>Vous devez renseigner au maximun deux chiffres !</p>";
        }
        else { //SINON j'exécute ma requête
            execute_requete("
            INSERT INTO player (nom, prenom, age, poste, presentation)
                VALUES (
                    '$_POST[nom]',
                    '$_POST[prenom]',
                    '$_POST[age]',
                    '$_POST[poste]',
                    '$_POST[presentation]'
                )
            ");
        }


    }



?>
<h1>Ajouter un joueur de l'équipe du PSG !!!</h1><br>

<form method="post">

    <label>Nom</label><br>
    <input type="text" name="nom" value="" ><br>

    <label>Prenom</label><br>
    <input type="text" name="prenom" value=""><br>

    <label>Age</label><br>
    <input type="text" name="age" value=""><br>

    <label>Poste</label><br>
    <input type="radio" name="poste" value="defenseur">defenseur<br>
    <input type="radio" name="poste" value="attaquant">attaquant<br><br>

    <label>Presentation</label><br>
    <input type="text" name="presentation" value=""><br>

    <input type="submit" class="btn btn-secondary" value="Ajout">
</form>


<?php require_once 'inc/footer.inc.php'; //inclusion du fichier 'header.inc.php' ?>