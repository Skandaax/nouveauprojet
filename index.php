<?php

$perso1 = [
   "nom" => "Rose",
    "force"= 12,
    "level1" = 1,
    "health1" = 100,

];

$perso1 = [
    "nom" => "Rose",
     "force"= 12,
     "niveau" = 1,
     "health1" = 100,
 
 ];

 $perso2 = [
    "nom" => "Golbu",
     "force"= 15,
     "level1" = 1,
     "health1" = 100,
 
 ];

 $perso3 = [
    "nom" => "Mary",
     "force"= 13,
     "level1" = 1,
     "health1" = 100,
 
 ];

 $perso4 = [
    "nom" => "Low",
     "force"= 10,
     "level1" = 1,
     "health1" = 100,
 
 ];

function caracteristique($perso){
    echo $perso["nom"]. " a une force de" .$perso["force"]. " et au niveau ".$perso{"level"};
}

caracteristique($perso);
