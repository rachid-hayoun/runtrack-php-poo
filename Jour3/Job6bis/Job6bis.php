<?php

class Carte {
private int $valeur;
private string $couleur;
public function __construct(){
    $this->valeur = valeur;
    $this->couleur = couleur;
}
public function getValeur(){
return $this->valeur;
}
public function getCouleur(){
return $this->couleur;}
public function afficher(){
    return "La carte est de la valeur ".$this-valeur()." et de la couleur ".$this->couleur();
}
}
class Jeu {
private int $paquet;
private int $cartejoueur;
private int $cartecroupier;
public function __construct(){
    $this->paquet = [];
    $this->cartejoueur = [];
    $this->cartecroupier = [];
    $this->contenupaquet();
    $this->randompaquet();
}
private function contenupaquet(){
    $couleurs = ["coeur","carreau","trefle","pique"];
    $valeurs = [2,3,4,5,6,7,8,9,10,"valet","dame","roi","as"];	

    foreach($couleurs as $couleur){
        foreach ($valeurs as $valeur){
            $this->paquet []= new Carte($valeur,$couleur);
        }
    }
}
private function randompaquet(){
    shuffle($this->paquet);}
private function distributeurcarte(){
    return array_pop($this->paquet);}
private function calculcarte(){
    $valeur = 2;
    $asCount = 2;

    foreach($main as $carte){
        $valeurcarte = $carte->getValeur();
        if (in_array($valeurcarte,["valet","dame","roi"])){
            $valeur += 10;
        }
        elseif ($valeurcarte == "as"){
            $valeur += 11;
            $ascount++;
        }
        else{
            $valeur += valeurcarte;
        }

    }
    while ($valeur > 21 && $asCount > 0) {
        $valeur -= 10; 
        $asCount--;
    }
    return $valeur;
}
public function distribuerCartesInitiales() {
    $this->joueurMain[] = $this->distribuerCarte();
    $this->croupierMain[] = $this->distribuerCarte();
    $this->joueurMain[] = $this->distribuerCarte();
    $this->croupierMain[] = $this->distribuerCarte();
}