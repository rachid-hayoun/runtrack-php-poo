<?php

class Produit{
    public string $nom;
    public float $prixHT;
    public float $TVA;
    public function __construct($nom){
        $this->nom = $nom;
    }
    public function CalculerPrixTTC(){
return ($this->prixHT * (1 + $this->TVA));
    }
    public function afficher(){
        echo "Le prix TTC du produit est de : ".$this->CalculerPrixTTC()."€";
    }
}

$produit1 = new Produit("Produit");
$produit1->prixHT= 100;
$produit1->TVA = 0.2;

echo $produit1->afficher();
?>