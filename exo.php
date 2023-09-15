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
    protected $Surface;
    protected $perimetre;

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
        $this->perimetre = 2 * $this->longueur + $this->largeur;
        return $this->perimetre;
    }

    public function CalculerSurface(){
        $this->Surface = $this->longueur * $this->largeur;
    }
}
class Cercle extends FormeGeometrique{
    private $Rayon;
    public function __construct($Surface, $perimetre, $Rayon){
        parent::__construct($Surface, $perimetre);
        $this->Rayon = $Rayon;
    }
        public function calculerSurface()
    {
        $this->perimetre = 2 * M_PI * pow($this->Rayon, 2);
        return $this->Surface;
    }
}