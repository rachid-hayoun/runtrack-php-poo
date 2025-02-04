<?php

 class Rectangle {
    private string $longeur;
    private string $largeur;
    public function __construct(string $longeur, string $largeur){
        $this->longeur = $longeur;
        $this->largeur = $largeur;}
    public function getLongueur(){// Accesseurs     
        return $this->longeur;}
    public function getLargeur(){// Accesseurs   
        return $this->largeur;}
    public function setRectangle($longeur,$largeur){// Mutateurs
        $this->longeur=$longeur;
        $this->largeur=$largeur;}
    } 
 
 $rectangle = new rectangle(10,5);
 echo "La longueur du rectangle est de : ".$rectangle->getLongueur()."cm <br>";
 echo "La largeur du rectangle est de : ".$rectangle->getLargeur()."cm <br>";
 $rectangle->setRectangle(40,25);
 echo "La nouvelle longueur et  largeur du rectangle est de : ".$rectangle->getLargeur()."cm et ".$rectangle->getLongueur()."cm <br>";

 ?>