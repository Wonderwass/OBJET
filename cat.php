<?php 
class Cat {
    // attributs
    private $nom;
    private $couleur;
    private $race;
    private $age;

    // constructeur de la class
    public function __construct($nom, $couleur, $race, $age) {
        $this->nom = $nom;
        $this->couleur = $couleur;
        $this->race = $race;
        $this->age = $age;
    }
    //creer le geter et le seter de la propriete age
    //le geter son role c'est de recuperer le valeur de la propriete declare avec le mot cle private 
    public function getAge(){
        return $this->age;
    }
    public function setAge($newAge){
        $this->age = $newAge;
    }
}

// créer un chat
$chat1 = new Cat("Cynthia", "beige", "siamois", 3);
//$chat1->age = 4;
echo $chat1->getAge() . '<br>';
$chat1->setAge(4);
echo $chat1->getAge();