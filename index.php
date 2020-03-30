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
    public $sante;
    public $mort;


    public function caracteristique(){
        echo $this -> nom  ." a une force de". $this ->force ."est de niveau1". $this -> niveau1 ."est en bonne". $this -> santé ."il est". $this->mort ."". 

    function  mort(){
    if($this = $mort < 0){
        $this "il est mort";
    }elseif($this = $mort > 0){
        $this "il est vivant";
    }}
}

$perso1 = new personnage();
$perso2 = new personnage();
$perso3 = new personnage();
$perso4 = new personnage();

$perso1 => nom = "Rose";
$perso1 => force = 12;

$perso2 => nom = "Golbu";
$perso2 => force = 15;

$perso3 => nom = "Arthis";
$perso3 => force = 12;

$perso2 =>caracteristique();