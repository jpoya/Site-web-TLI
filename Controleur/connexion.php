<?php
if(isset($_POST['login']) AND isset($_POST['password']))//si il y a bien un login et un mdp
{
    //verificationFormulaireConnexion();
    $connexion=connexionUtilisateur();

    if ($connexion ==true){

	    session_start();
	    $_SESSION['login'] = $_POST['login'];

    }else{
        // alert connexion mauvaise
    }
}

?>