<?php
class Cercle {
    public float $rayon;
    public function __construct($rayon){
        $this->rayon = $rayon;
    }
    public function changerRayon($rayon){
        $this->rayon = $rayon;
    }
    public function afficherInfos(){
        echo "Le rayon du cercle est de : ".$this->rayon." cm."."</br>";
    }

    public function circonférence(){
        echo "Circonférence du cercle : ".$this->rayon * 2 * 3.14;
    }
    public function aire(){
        echo "Aire du cercle : ".$this->rayon ** 2 * 3.14;
    }
    public function diametre(){
        echo "Diamètre du cercle : ".$this->rayon * 2;
    }
}
$cercle = new Cercle(5);
echo $cercle->afficherInfos();
echo $cercle->changerRayon(10);
echo $cercle->afficherInfos();
echo $cercle->circonférence()."</br>";
echo $cercle->aire()."</br>";
echo $cercle->diametre()."</br>"."</br>";

$cercle = new Cercle(0);

echo $cercle->changerRayon(4);
echo $cercle->afficherInfos();
echo $cercle->circonférence()."</br>";
echo $cercle->aire()."</br>";
echo $cercle->diametre()."</br>"."</br>";

$cercle = new Cercle(0);

echo $cercle->changerRayon(7);
echo $cercle->afficherInfos();
echo $cercle->circonférence()."</br>";
echo $cercle->aire()."</br>";
echo $cercle->diametre();
?>