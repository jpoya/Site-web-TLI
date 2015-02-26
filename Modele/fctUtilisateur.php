<?php
    include("accessBDD.php");
	//fonctions liées à l'utilisateur

    function connexion(){
        $objet = new accessBDD();
        $db = $objet->connexionBDD();
        $resultats = $db->query('SELECT * FROM patho');
        $resultats->setFetchMode(PDO::FETCH_OBJ);
        while( $resultat = $resultats->fetch() )
        {
            echo 'meridien : '.$resultat->mer.'<br>';
        }
        $resultats->closeCursor();
    }

?>