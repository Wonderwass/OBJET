<?php
class Humain{
    protected $nom;
    protected $prenom;
    public function __construct($nom, $prenom){
        $this->nom = $nom;
        $this->prenom = $prenom;
    }
    //methode communs aux class fille
    public function dormir(){
        echo "Je fais dodo";
    }

}
//class magicien qui etend la classe Humain du coup magicien va heriter des proprietes et methodes de Humain
class Magicien extends Humain{ // ce qui permet de créer un enfant 
    public $baguette;
    public function __construct($nom, $prenom, $baguette){
        // $this->nom = $nom; methode 1
        // $this->prenom = $prenom;
        // $this->baguette = $baguette;
        //methode 2
        parent::__construct($nom, $prenom);
        $this->baguette = $baguette;
    }
    public function faireUnTourDeMagie(){
        echo "Bonjour, c'est " . $this->prenom . " " . $this->nom . " j'ai la " . $this->baguette . "wow voici un petit lapin sortir le chapeau";
    }

}
class Patissier extends Humain{
    public $batteur = "electrique";
    // methode propre a la patissiere
    public function fairedeBonGateau(){
        echo " Bonjour c'est " .
            $this->prenom .
            $this->nom . " J'ai un super batteur " .
            $this->batteur . " Miam voici un delicieux gateau ";
    }
} 
// instancier un magicien
$magic = new Magicien("Julien", "le magicien", "baguette de sureau");
$magic->faireUnTourDeMagie();
echo "<br>";
//creer une patisserie
$patissiere = new Patissier("CHERIE", "Nawal");
$patissiere->fairedeBonGateau();

