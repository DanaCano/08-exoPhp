<?php

function debug( $arg ){

    echo "<div style='background:#fda500; z-index:1000'>";

        $trace = debug_backtrace();
        //debug_backtrace(): Fonction interne de php qui retourne un array avec des infos de l'endroit où l'on fait appel à la fonction

        echo "<p>Debug demandé dans le fichier : ". $trace[0]['file'] ." à la ligne : " . $trace[0]['line'] . "</p>";
            // print "<pre>";
            //     print_r( $trace );
            // print "</pre>";

       print "<pre>";
           print_r( $arg );
       print "</pre>";

    echo "</div>";
}

// test pour voir les infos de debug_backtrace() :
// $test = ['hola', 'coucou', 'hi'];
// debug( $test );

//---------------------------------------------------------
//fonction pour exécuter la requête :
function execute_requete( $req ){
    //echo $req;
    global $pdo; //global : permet de rappatrier la variable '$pdo' dans l'espace confiné de la fonction

    $pdostatement = $pdo->query( $req );

    return $pdostatement;
}


//----------------------------------------------------------

