# projet_PHP

Site web en PHP avec un minimum de bootstrap, html et css.
J'ai utilisé PhpMyAdmin en localhost et pour des raisons de sécurité je n'ai pas partagé ici mon fichier "init.inc.php" qu'il contient évidemment les connexions pour pour interagir avec la base de données, PDO, mot de passe, etc.

Contenu du projet PHP:

Création base de données : "team"

CREATE DATABASE team;

USE team;

Création d'une table : "player" (id_player, nom, prenom, age, poste (ENUM : attaquant / defenseur ), presentation, message (DEFAULT NULL) )

CREATE TABLE player(

    id_player INT(3) NOT NULL PRIMARY KEY AUTO_INCREMENT,
    nom VARCHAR(25) NOT NULL,
    prenom VARCHAR(25) NOT NULL,
    age INT(3) NOT NULL,
    poste ENUM('defenseur', 'attaquant') NOT NULL,
    presentation TEXT NOT NULL,
    message TEXT DEFAULT NULL

)ENGINE=InnoDB charset=UTF8;


INSERT INTO player (id_player, nom, prenom, age, poste, presentation, message) VALUES
(1, 'Nuno', 'Mendes', 19, 'defenseur', 'Meilleur pied : Gauche - Équipe nationale : Portugal', ''),
(2, 'Lionel', 'Messi', 34, 'attaquant', 'Meilleur pied : Gauche - Équipe nationale : Portugal', ''),
(3, 'Sergio', 'Ramos', 31, 'attaquant', 'Meilleur pied : Gauche - Équipe nationale : FRANCE', ''),
(4, 'Aaaa', 'hbbbb', 36, 'attaquant', 'Meilleur pied : Gauche - Équipe nationale : ITALIE', ''),
(5, 'Bbbb', 'Ramhyugugos', 38, 'defenseur', 'Meilleur pied : Gauche - Équipe nationale : ALLEMAGNE', '');
----------------------------------------------------

1 - création d'une page : "accueil.php" 
	  -> menu avec 2 liens :	
		- Un pour aller sur la page "ajout"
		- L'autre pour aller sur la page 'voir tous les joueurs'
	 -> affichage les infos de 5 joueurs sur la page d'accueil

2 - création d'une page : "ajout_joueur.php"
	-> création formulaire pour insertion
	   Enregistrement des données (formulaire)
		=> création de controles des saisies :
		-> nom, prenom OBLIGATOIRE*  (avec des conditions)
		-> l'age est un ENTIER et avoir 2 chiffres

3 - création d'une page : "tous_les_joueurs.php"
	-> affichage des joueurs dans 'l'ordre croissant'
	-> On peut cliquer sur chaque annonce pour aller voir la "fiche du joueur"

4 - création d'une page : "fiche_joueur.php"
		-> affichage des details du joueurs
	  => Sur "fiche_joueur.php" il y a un formulaire avec un input permettant de laisser un message pour réserver le joueur
	  -> insertion du message => donc modification (update) de la table
	   
5 -SI il y a un message pour un joueur, j'indique :
    -> Sur la page "tous_les_joueurs.php" que le joueur n'est pas libre

6 -	Sur la page "fiche_joueur.php" : il y a un message "déjà réservé" et je n'affiche plus le formulaire.
