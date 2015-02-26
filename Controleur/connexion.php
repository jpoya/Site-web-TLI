<?php
include("../Modele/connexionUtilisateur.php");

$login=$_POST['login'];
$MotDePasseClient=$_POST['password'];


echo $login;

print_r("Password".$MotDePasseClient) ;

$connexionActive=connexionUtil($login,"ivohhfln");


if(isset($_POST['login']) AND isset($_POST['password']))//si il y a bien un login et un mdp
{
    //verificationFormulaireConnexion();

    if ($connexion ==true){

	    session_start();
	    $_SESSION['login'] = $_POST['login'];

    }else{
        // alert connexion mauvaise
    }
}

echo "Passer";

?>