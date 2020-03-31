<?php

<?php
class Personnage 
{
    protected $nom;
    protected $force;
    protected $niveau;
    protected $health;
    protected $death;

    function __construct(string $nom, int $force, $niveau = 1, int $health = 100)
    {
        $this->setnom($nom);
        $this->setforce($force);
        $this->setniveau($niveau);
        $this->sethealth($health);
        $this->setdeath();
    }

    function caracteristiques()  
    {
        $etat = ($this->death)? "mort" : "vivant";
        echo $this->nom ." a une force de ". $this->force." et au niveau ".$this->niveau." est vivant ".$this->health." est mort ".$this->death."ponts/100, notre personnage est donc ".$etat."<br>";
    }

    /********Nom********/
    function getNom() : string 
    {
        return $this->nom;
    }

    function setNom(string $nom) 
    {
        $this->nom = $nom;
    }

    /********Force********/
    function getForce() : string 
    {
        return $this->force;
    }
    
    function setForce($force) 
    {
        $this->force = $force;
    }

    /********Niveau********/
    function getNiveau() : int 
    {
        return $this->level;
    }

    
    function setNiveau(int $lvl)
    {
        $this->niveau = $lvl;
    }

    /********Vie********/
    function getHealth() 
    {
        return $this->health;
    }

    function setHealth($health) 
    {
        $this->health = $health;
    }
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
    function levelup()
    {
        $this->niveau++;
    }
}
/*******New personnages*****/
Class Archer extends Personnage 
{
    
    function attaquer(Personnage $perso) 
    {
        $this->tirer();
        parent::attaquer($perso);
    }

    function tirer()
    {
        echo $this->nom." de type " .Archer:: class."tire une flèche";
    }
    
}

Class Guerrier extends Personnage 
{
    
    function attaquer(Personnage $perso) 
    {
        $this->frapper();
        parent::attaquer($perso);
    }

    function frapper()
    {
        echo $this->nom." de type ".Guerrier:: class." Frappe avec une hache";
    }
}

Class Magicien extends Personnage 
{
    
    function attaquer(Personnage $perso) 
    {
        $this->tirer();
        parent::attaquer($perso);
    }

    function lancerunsort()
    {
        echo $this->nom." de type ".Magicien:: class." Lance un sort";
    }
}

/************************************/

$perso1 = new Archer("Rose", 12);
$perso2 = new guerrier("Golbu", 15, 2);
$perso3 = new Magicien("Arthis", 13, 2);

echo "Avant attaque : " ;
$perso2->caracteristiques();
$perso1->attaquer($perso2);
echo "Aprés attaque : " ;
$perso2->caracteristiques();

echo "Avant : ";
$perso1->caracteristiques();
$perso1->levelup();
echo "Aprés : ";
$perso1->caracteristiques();