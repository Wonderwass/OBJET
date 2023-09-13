<?php

// créez une classe Voiture avec les attributs suivants :
// couleur, marque, model
// et les méthodes suivantes :
// rouler, accelerer, freiner
// creez une voiture de marque peugeot 308 et de couleur noire
//pout la methode rouler afficher le texte "Je roule"
//pout la methode accelerer afficher le texte "J'acceleres"
//pout la methode freiner afficher le texte "Je freine"

class Voiture
{
    public $couleur;
    public $marque;
    public $model;

    public function rouler()
    {

        echo "Je roule <br>";
    }

    public function accelerer()
    {

        echo "J'accelere <br>";
    }
    public function freiner()
    {

        echo "Je freine <br>";
    }

}

// créer une voiture de marque peugeot, modél : 308 et de couleur : noire
$peugeot308 = new Voiture();
$peugeot308->marque = "peugeot";
$peugeot308->model = "308";
$peugeot308->couleur = "noire";
// on fait rouler la voiture
$peugeot308->rouler();
// on fait accelerer la voiture
$peugeot308->accelerer();
// on fait freiner la voiture
$peugeot308->freiner();

// class Voiture avec constructeur
class VoitureConstructeur
{
    // attributs
    public $marque;
    public $modele;
    public $couleur;
    // constructeur
    public function __construct($brand, $model, $color)
    {
        $this->marque = $brand;
        $this->modele = $model;
        $this->couleur = $color;
    }

    public function rouler()
    {

        echo "Je roule <br>";
    }

    public function accelerer()
    {

        echo "J'accelere <br>";
    }
    public function freiner()
    {

        echo "Je freine <br>";
    }

}

// créer une voiture
$voiture2 = new VoitureConstructeur("Citroen", "C4", "rouge");
// appeler la méthode "rouler()"
$voiture2->rouler();