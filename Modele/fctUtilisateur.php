<?php
    require("accessBDD");
	//fonction liées à l'utilisateur
	class fctUtilisateur{
        $accessBDD = new accessBDD;
		function connexion(){
            echo "test des ma fonction connexion";
            $result = accessbdd->requeteSQL("ma requete sql");
            echo $result;
        }
	}
?>