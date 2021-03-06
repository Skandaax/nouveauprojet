<?php

Interface Attaquant 
{
    function attaquer(Personnage $perso);

}



abstract class Personnage implements Attaquant 
{
    protected $nom;
    protected $force;
    protected $niveau;
    protected $health;
    protected $death;
    protected $fleches;

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
    abstract function subirDegats();

    abstract function attaquer(Personnage $perso);
    /*function attaquer($perso)
    {   
    $this->tirer();
    $perso->setHealth($perso->getHealth() - $this->force);
    $perso->setDeath();
    }*/

    /********Tirer*********/
    function tirer()
    {
        echo " Le personnage tire une flèche ";
    }
        
    
    /********Level up********/
    function levelup()
    {
        $this->niveau++;
    }

    /********Détgats********/
    function degats($perso)
    {
        if ($perso instanceof Archer)
        {
            $perso->sethelth($perso->gethealth() - 30);
        }else 
        {
            $perso->sethealth($perso->gethealth() - 100);
        }
    }


}

/***********Extension de l'archer********/
Class Arch extends Personnage 
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

/*******************Subir les dégats*************************/

/**************Crétures*************************************/
class creature implements Attaquant
{
    function attaquer(Personnage $perso)
    {
        $perso->setHealth($perso->getHealth() - rand(6, 8));
        echo " Une créature vient d'attaquer le personnage";
    }
}

/************Archer************/
class Archer 
{
    protected $nom;
    protected $force;
    protected $niveau;
    protected $health;
    protected $death;
    protected $fleches;

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
    function attaquer($perso)
    {   
    $this->tirer();
    $perso->setHealth($perso->getHealth() - $this->force);
    $perso->setDeath();
    }

    /********Tirer*********/
    function tirer()
    {
        echo " Le personnage tire une flèche ";
    }
        
    

    /********Level up********/
    function levelup()
    {
        $this->niveau++;
    }

    /********Détgats********/
    function degats($perso)
    {
        if ($perso instanceof Archer)
        {
            $perso->sethelth($perso->gethealth() - 30);
        }else 
        {
            $perso->sethealth($perso->gethealth() - 100);
        }
    }

        /*************Les dégats subits */
        function subirdegats($perso) {
            if($this->subirdegats < 10)
            {
                $this->subirdegats -= 10;
            }
        }
}

/***********Extension de l'archer********/
class Arche extends Archer
{

    function attaquer($perso)
    {
        $this->tirer();
        if($perso instanceof Archer)
        {
            $perso->setdeath($perso->getdeath() - 10);
        }
        $perso->setHealth($perso->getHealth() - $this->force);
        $perso->setDeath();
    }

    /*************Interface*******************/


    /********La force de l'archer********/
    function robin($perso)
    {
        $perso->recevoirDegats($this->fleches);
    }

    /************Gagner des HP***********/
    public function gagnerExperience()
    {
        parent::gagnerExperience();

        if ($this->fleche < 100)
        {
            $this->fleche += 10;
        }
    }

    function tirer()
    {
        echo $this->nom. "de type " .Archer::class. " tire une flèche";
    }


}


/************Guerrier************/
class Guerrier 
{
    protected $nom;
    protected $force;
    protected $niveau;
    protected $health;
    protected $death;
    protected $toc;

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
    function attaquer($perso)
    {
        $this->frapper();
        $perso->setHealth($perso->getHealth() - $this->force);
        $perso->setDeath();
    }

    /********Frapper*********/
    function frapper()
    {
        echo " Le personnage frappe";
    }

    /********Level up********/
    function levelup()
    {
        $this->niveau++;
    }

    /********Détgats********/
    function degats($perso)
    {
        if ($perso instanceof Guerrier)
        {
            $perso->sethelth($perso->gethealth() - 30);
            }else 
            {
                $perso->sethealth($perso->gethealth() - 100);
            }
    }
}

/***********Extension du guerrier********/
class guerre extends guerrier
{

    function attaquer($perso)
    {
        $this->frapper();
        if($perso instanceof Archer)
        {
            $perso->setdeath($perso->getdeath() - 10);
        }
        parent::attaquer($perso);
    }

    /********La force du guerrier********/
    function hache($perso)
    {
        $perso->recevoirDegats($this->fleches);
    }

    /************Gagner des HP***********/
    public function gagnerExperience()
    {
        parent::gagnerExperience();

        if ($this->coup < 100)
        {
            $this->coup += 10;
        }
    }
    
    function lancerunsort() 
    {
        echo $this->nom." de type ".Magicien::class." lance un sort.<br>";
    }
}



/************Magicien***********/
class Magicien
{
    protected $nom;
    protected $force;
    protected $niveau;
    protected $health;
    protected $death;
    protected $magie; //Puissance du magicien /100

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
    function attaquer($perso)
    {
        $this->lanceunsort();
        $perso->setHealth($perso->getHealth() - $this->force);
        $perso->setDeath();
    }

    /********Tirer*********/
    function lancerunsort()
    {
        echo " Le personnage Lance un sort";
    }

    /********Level up********/
    function levelup()
    {
        $this->niveau++;
    }

    /********Détgats********/
    function degats($perso)
    {
        if ($perso instanceof Magicien)
        {
            $perso->sethelth($perso->gethealth() - 30);
        }else 
        {
            $perso->sethealth($perso->gethealth() - 100);
        }
    }


}

/***********Extension du magicien********/
class Mage extends Magicien
{

    /********La force du magicien********/
    function magieblanche($perso)
    {
        $perso->recevoirDegats($this->magie);
    }

    /************Gagner des HP***********/
    public function gagnerExperience()
    {
        parent::gagnerExperience();

        if ($this->magie < 100)
        {
            $this->magie += 10;
        }
    }

    function lancerunsort() 
    {
        echo $this->nom." de type ".Magicien::class." lance un sort.<br>";
    }
}


/************************************/
$perso1 = new Archer("Rose", 12);
$perso2 = new guerrier("Golbu", 15, 10, 2); 
$perso3 = new Magicien("Arthis", 13, 2);

$creature = new Creature();

$perso1->attaquer($perso2);
$creature->attaquer($perso2);


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
