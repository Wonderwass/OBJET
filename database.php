<?php
// créer la classe "DbConnect" permettant de se connecter a la base de données

class DbConnect
{
    public function dbConnexion()
    {
        $conn = null;
        try {
            $connexion = new PDO("mysql:host=localhost;dbname=objet", "root", "");
        } catch (PDOException $e) {
            echo $e->getMessage();
        }
        return $connexion;
    }
}