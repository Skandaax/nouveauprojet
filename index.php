<?php

//$perso1 = [
   //"nom" => "Rose",
    //"force"= 12,
    //"level1" = 1,
    //"health1" = 100,

//];


//function caracteristique($perso){
    //echo $perso["nom"]. " a une force de" .$perso["force"]. " et au niveau ".$perso{"level"};
//}

//caracteristique($perso);

// __________________//

class Personnage {
    public $nom;
    public $force;
    public $niveau;
    public $health;
    public $mort;


    public function caracteristique(){
        $etat = ($this->death)? "mort" : "vivant";
        echo $this ->nom  ." a une force de". $this ->force ."est de niveau1". $this ->niveau ." son état de santé est de". $this ->health."points/100, notre personnage est donc".$etat;
    }
}

$perso1 = new personnage();
$perso1 ->nom = "Rose";
$perso1 ->force = 12;
$perso1 ->niveau = 1;
$perso1 ->health = 100;
$perso1 ->death = false;



$perso2 = new personnage();
$perso2 ->nom = "Golbu";
$perso2 ->force = 15;
$perso2 ->niveau = 1;
$perso2 ->health = 10;
$perso2 -> death = false;

$perso3 = new personnage();
$perso4 = new personnage();
$perso3 ->nom = "Arthis";
$perso3 ->force = 12;
$perso3 ->niveau = 1;
$perso3 ->health = 1;
$perso3 ->death = true;

$perso3 ->caracteristique();

class Personnage {

    Private $nom;
    Private $force;
    private $niveau;
    private $health;
    private $death;

    function __construct(string $nom, int $force, $niveau = 1, $health, $death ){
        $this->nom = $nom;
        $this->force = $force;
        $this->niveau = $niveau;
        $this->health = $health;
        $this->death = $death;
    }

    function caracteristique()  {
        echo $this->nom ." a une force de ". $this->force."et au niveau".$this->niveau;
    }

    function getNom() : string {
        return $this->nom;
    }

    function setNom(string $nom) {
        $this->nom = $nom;
    }

    function getniveau() : int {
        return $this->level;
    }

    function setniveau(int $lvl){
        $this->niveau = $lvl;
    }

    function sethealth() : string $health {
        $this->health = $health;
    }

    function gethealth(string $health){
        return $this->health = $health;
    }

    function setdeath() : $death{
        $this->death = $death;
    }

    function getdeath(string $death){
        return $this->death = $death;
    }

}

$perso1 = new personnage("Rose", 12);
$perso2 = new personnage("Golbu", 15, 2);
$pers3 = new personnage("Arthis", 13, 2);

$perso1->setNom("Mary");
$perso1->setniveau(2);