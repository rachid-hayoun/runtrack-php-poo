<?php

class Vehicule {
    public string $marque;
    public string $modele;
    public int $annee;
    public float $prix;
    public function __construct(string $marque,string $modele,int $annee,float $prix){
    $this->marque = $marque;
    $this->modele = $modele;
    $this->annee = $annee;
    $this->prix = $prix;
    }
    public function informationsVehicule(){
        echo "Marque : ".$this->marque."<br>";
        echo "Modele : ".$this->modele."<br>";
        echo "Année : ".$this->annee."<br>";
        echo "Prix : ".$this->prix."€<br><hr>";
    }
    public function demarrer(){
        echo "Attention, je roule !<hr>";
    }
}
class Voiture extends Vehicule{
    public int $portes;
    public function __construct (string $marque, string $modele, int $annee, float $prix,int $portes) {
        parent::__construct($marque,$modele,$annee,$prix);
        $this->portes = $portes;
    }
    public function infosVoiture() {
        echo "Marque : ".$this->marque."<br>";
        echo "Modele : ".$this->modele."<br>";
        echo "Année : ".$this->annee."<br>";
        echo "Prix : ".$this->prix."€<br>";
        echo "Nombre de portes : ".$this->portes."<br><hr>";
    }
    public function demarrer(){
        parent::demarrer();
    }
}
class moto extends Vehicule{
    public int $roues;
    public function __construct(string $marque, string $modele, int $annee, float $prix,int $roues) {
        parent::__construct($marque,$modele,$annee,$prix);
        $this->roues = $roues;}
    public function demarrer(){
        parent::demarrer();
    }
}
$vehicule = new vehicule("Opel","Corsa D","2007",2300);
echo "Informations du véhicule :<br>";
$vehicule->informationsVehicule();
$vehicule->demarrer();

$voiture = new Voiture ("Opel","Corsa D","2007",2300,5);
echo "Informations de la voiture : <br>";
$voiture->infosVoiture();
$voiture->demarrer();

$moto = new moto("Yamaha","R1","2019",8000,2);
echo "Informations de la moto : <br>";
$moto->informationsVehicule();
$moto->demarrer()
?>