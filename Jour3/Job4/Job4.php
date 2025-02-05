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
$rectangle = new  Rectangle (10,20);
echo "Aire du rectangle : ".$rectangle->aire();
