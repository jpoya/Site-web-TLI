<?php

	//classe d'accès à la base de données
class accessBDD{
	function connexionBDD(){
		$host='127.0.0.1';
		$user='root';
		$password='';
		$dbName='';
		// Connexion à la base de données
		$resConnexion = mysql_connect($host,$user,$password);
		if (!$resConnexion){
			die("<br /><b>Impossible de se connecter à la base de données:</b><br />".mysql_error());
			return 0;
		}
		// Selection de la base de données de travail
		$db_selected= mysql_select_db($dbName,$resConnexion);
		if (!$db_selected){
			die("<br /><b>Impossible d'utiliser la base de données: $dbName</b><br />".mysql_error($resConnexion));
			return 0;
		}
		return $resConnexion;
	}
	
	function deconnexionBDD(){
		mysql_close($Connexion);
	}
	
	function requeteSQL($requete){
		$resRequeteSQL = mysql_query($requete);
		if(!$resRequeteSQL){
			$resultat=False;
		}
		else{
			$resultat=$resRequeteSQL;
		}
		return $resultat;
	}
}

?>