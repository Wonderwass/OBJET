<?php 
//creer un classe abstraite FormeGeometrique
//Avec les attribut suivants:
//1)Surface
//2)perimetre
//creer la classe Rectangle fille de FormeGeometrique avec les attributs suivants:
//1)longueur
//2)largeur
//et la methode calculerSurface et calculerPerimetre
//creer la classe Cercle avec les proprietes suivantes:
//1)Rayon
//et les méthode "calculerSurface" et "calculerPerimetre"
abstract class FormeGeometrique{
    public $Surface;
    public $perimetre;

    public function __construct($Surface, $perimetre){
        $this->Surface = $Surface;
        $this->perimetre = $perimetre;
    }
   
}

class Rectangle extends FormeGeometrique{
    public $longueur;
    public $largeur;
    public function __construct($Surface, $perimetre, $longueur, $largeur){
        $this->Surface = $Surface; 
        $this->perimetre = $perimetre;
        $this->longueur = $longueur;
        $this->largeur = $largeur;
    }
    public function CalculerPerimetre()
    {

        2*($this->Surface + $this->perimetre);
    }

    public function CalculerSurface(){
        $this->Surface = $this->longueur * $this->largeur;
    }
}
class Cercle extends FormeGeometrique{
    public $Rayon;
}