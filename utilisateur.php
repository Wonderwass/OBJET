<?php
// de créer la classe "Utilisateur" avec les propriétés :
// nom, prenom, email, mot de passe
// les méthodes : s'inscrire, se connecter, se deconnecter

include "database.php";

class Utilisateur
{
    private $nom;
    private $prenom;
    private $email;
    private $password;

    public function __construct($nom, $prenom, $email, $password)
    {
        $this->nom = $nom;
        $this->prenom = $prenom;
        $this->email = $email;
        $this->password = $password;
    }

    public function inscription()
    {
        // crer une instance de DbConnect
        $dbConnect = new DbConnect();

        // se connecter a la bd
        $db = $dbConnect->dbConnexion();

        // preparer la requette
        $request = $db->prepare("INSERT INTO `utilisateur` (`email`, `prenom`, `nom`, `password`) VALUES (?, ?, ?, ?)");
        try {
            // excecuter la requette
            $request->execute(array($this->email, $this->prenom, $this->nom, $this->password));
        } catch (PDOException $e) {
            echo $e->getMessage();
        }
    }
    // une méthode statique c'est une méthode qui appartient a la classe elle meme
    // et pas aux instances de cette classe
    // une propriété statique peut etre éxécuté sans instancier la classe qui l'encapsule
   //methode connexion 
    public static function connexion($email, $password)
    {
        // crer une instance de DbConnect
        $dbConnect = new DbConnect();
        // se connecter a la bd
        $db = $dbConnect->dbConnexion();
        //preparer la requete 
        $request = $db->prepare("SELECT * FROM utilisateur WHERE email = ?");
        //executer la requete
        try {
            $request->execute(array($email));
            $user = $request->fetch();
            if (empty($user)) { //si $user est vide 
                echo "utilisateur inconnue";
            } else { //sinon
                if (password_verify($password, $user['password'])){
                    //creation des variable de session et redirection vers la bonne page
                    $_SESSION['prenom'] = $user['prenom'];
                    header("Location: accueil.php");
                }else{
                    echo "mot de passse incorrect";
                }
            }
        }catch (PDOException $e){
            echo $e->getMessage();
        }

    }
}


