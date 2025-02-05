<?php
class forme {
    public function aire() {
        return 0;
    }
}
class Rectangle extends forme {
    private int $largeur;
    private int $hauteur;
    public function __construct(int $largeur,int $hauteur){
        $this->largeur=$largeur;
        $this->hauteur=$hauteur;}
    public function aire(){
       return $this->largeur * $this->hauteur;
    }
}
class Cercle extends forme {
    private float $radius;
    public function __construct(float $radius) {
        $this->radius = $radius;
    }
    public function aire() {
        return pi() * pow($this->radius, 2);}
}
$rectangle = new Rectangle(5, 10);
$cercle = new Cercle(1);
echo "Aire du rectangle : " . $rectangle->aire()."<br>";
echo "Aire du cercle : " . $cercle->aire() ;
?>