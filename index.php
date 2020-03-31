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

// Exercice 1 & 2//

/*class Personnage {
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
$perso3 ->nom = "Arthis";
$perso3 ->force = 12;
$perso3 ->niveau = 1;
$perso3 ->health = 1;
$perso3 ->death = true;

$perso3 ->caracteristique();*/


//$perso1->setNom("Mary");
//$perso1->setNiveau(2);

//echo $perso1->getNom();

/*****Exercice 3************/

class Personnage {

    protected $nom;
    protected $force;
    protected $niveau;
    protected $health;
    protected $death;

    function __construct(string $nom, int $force, $niveau = 1, int $health = 100){
        $this->nom($nom);
        $this->force($force);
        $this->niveau($niveau);
        $this->health($health);
        $this->death();
    }

    function caracteristiques()  {
        echo $this->nom ." a une force de ". $this->force."et au niveau".$this->niveau."est vivant".$this->$health."est mort".$this->$death;
    }

    /********Nom********/
    function getNom() : string {
        return $this->nom;
    }

    function setNom(string $nom) {
        $this->nom = $nom;
    }

    /********Niveau********/
    function getNiveau() : int {
        return $this->level;
    }

    
    function setNiveau(int $lvl){
        $this->niveau = $lvl;
    }

    /********Vie********/
    function getHealth() {
        return $this->health;
    }

    function setHealth($health) {
        $this->health = $health;

    /********Vie ou mort********/
    function setDeath() 
    {
        if($this->health < 1){
            $this->death = true;
           } else {
                $this->death = false;
           } 
    }

    /********Attaque********/
    function attaquer(Personnage $perso)
{   
    $perso->setHealth($perso->getHealth() - $this->force);
    $perso->setDeath();
}

    /********Level up********/
    function levelup(Personnage $perso){
        $this->levelup ++;
    }

}
/*******New personnages*****/
Class Archer extends Personnage {
    
    function attaquer(Personnage $perso) {
        $this->tirer();
        parent::attaquer($perso);
    }

    function tirer()
    {
        echo $this->nom." de type ".Archer: :class."tire une flèche";
    }
    
}

Class Guerrier extends Personnage {
    
    function attaquer(Personnage $perso) {
        $this->frapper();
        parent::attaquer($perso);
    }

    function frapper()
    {
        echo $this->nom." de type ".Guerrier: :class." Frappe avec une hache";
    }
}

Class Magicien extends Personnage {
    echo $this->nom." de type ".Magicien: :class." Lance un sort";
    function attaquer(Personnage $perso) {
        $this->tirer();
        parent::attaquer($perso);
    }

    function lancerunsort()
    {
        echo $this->nom." de type ".Magicien: :class." Lance un sort";
    }
}

/************************************/

$perso1 = new Archer("Rose", 12);
$perso2 = new guerrier("Golbu", 15, 2);
$perso3 = new Maicien("Arthis", 13, 2);

echo "Avant attaque : " ;
$perso2->caracteristiques();
$perso1->attaquer($perso2);
echo "Aprés attaque : " ;
$perso2->caracteristiques();






