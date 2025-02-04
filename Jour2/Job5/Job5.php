<?php

class Voiture{
    private string $marque;
    private string $modele;
    private int $kilometrage;
    private bool $en_marche = false;
    private int $reservoir =50;
    public function __construct(string $marque, string $modele, int $kilometrage) {
        $this->marque = $marque;
        $this->modele = $modele;
        $this->kilometrage = $kilometrage;
        $this->en_marche = false;
        $this->reservoir = 5;
    }
    public function getMarque(){
        return $this->marque;
    }
    public function getModele(){
        return $this->modele;
    }
    public function getKilometrage(){
        return $this->kilometrage;
    }
    public function setVoiture($marque,$modele,$kilometrage,$reservoir,){
        $this->marque = $marque;
        $this->modele = $modele;
        $this->kilometrage = $kilometrage;
        $this->reservoir = $reservoir;
    }
    public function Demarrer(){
        if ($this->reservoir > 5){
             $this->en_marche = true;
             return "La voiture démarre";
        }
        else{
            return "Le réservoir est vide";
        }
    }
    public function Arreter(){
        $this->en_marche = false;
    }
    public function getVerifierplein(){
        if ($this->reservoir <= 5){
            echo "Le réservoir est vide";
        }else{
            echo "Il reste  " . $this->reservoir . " L dans le réservoir";
        }
    }
}
$voiture = new Voiture("Opel Corsa", "Citadine", 226000);
echo "Marque : " . $voiture->getMarque() . "<br>";
echo "Modèle : " . $voiture->getModele() . "<br>";
echo "Kilométrage : " . $voiture->getKilometrage(). "<br>";
echo "En marche :" . $voiture->Demarrer() . "<br>";
$voiture->getVerifierplein();