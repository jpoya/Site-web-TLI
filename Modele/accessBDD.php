<?php

class accessBDD{
    public function connexionBDD(){
        $db = null;
        try {
            $db = new PDO('mysql:host=localhost;dbname=bdd_filerouge', 'fab', 'fab', array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));
        } catch (Exception $e) {
            die('Erreur : ' . $e->getMessage());
        }
        return $db;
    }
}
?>