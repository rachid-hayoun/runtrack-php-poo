<?php
class Point {
    public float $x;
    public float $y;
    public function __construct(float $x, float $y) {
        $this->x = $x;
        $this->y = $y;
    }
    public function afficherLesPoints(){
        echo $this->x,$this->y;
    }
    public function afficherX(){
        echo $this->x;
    }
    public function afficherY(){
        echo $this->x;
    }
    public function changerX($newX){
        $this->x=$newX;
    }
    public function changery($newY){
        $this->y=$newY;
    }
}
$point = new Point(11.1, 22.2);
$point->changerX(2.3);
$point->changerY(4.5);
$point->afficherLesPoints();
?>  