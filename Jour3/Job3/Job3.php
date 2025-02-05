<?php
class Rectangle{
    private int $longueur;
    private int $largeur;
    public function __construct(int $longueur,int $largeur){
        $this->longueur = $longueur;
        $this->largeur = $largeur;
    }
    public function perimetre(){
        return ($this->longueur*2)+($this->largeur*2);
    }
    public function getLongueur(){
        return $this->longueur;
    }
    public function getLargeur(){
        return $this->largeur;
    }

    public function setCote(int $longueur,int $largeur){
        $this->longueur = $longueur;
        $this->largeur = $largeur;
    }
}
class Parallepipede extends Rectangle{
    public int $hauteur;
    public function __construct(int $longueur,int $largeur,int $hauteur){
        parent::__construct($longueur,$largeur);
        $this->hauteur=$hauteur;}
    public function volume(){
        return $this->getLongueur() * $this->getLargeur() * $this->hauteur ;
    }


}
$rectangle = new Rectangle(100,40);
echo "Longueur :".$rectangle->getLongueur()."<br>";
echo "Largeur :".$rectangle->getLargeur()."<br>";
echo "Perimetre :".$rectangle->perimetre()."<br>";
$rectangle = new Parallepipede(100,50,20);
echo "Volume :".$rectangle->volume();
?>