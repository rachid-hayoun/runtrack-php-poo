<?php
class Personnage {
    public int $x;
    public int $y;
    public int $LPlateau;
    public int $HPlateau;
    public function __construct(int $x, int $y, int $LPlateau, int $HPlateau) {
        $this->x = $x;
        $this->y = $y;
        $this->LPlateau = $LPlateau;
        $this->HPlateau = $HPlateau;}
    public function gauche() {
        if ($this->x > 0) {
            $this->x--;
        } else {
            echo "Limite gauche atteinte.<br>";
        }}
    public function droite() {
        if ($this->x < $this->LPlateau - 1) {
            $this->x++;
        } else {
            echo "Limite droite atteinte.<br>";
        }}
    public function haut() {
        if ($this->y > 0) {
            $this->y--;
        } else {
            echo "Limite haute atteinte.<br>";}}

    public function bas() {
        if ($this->y < $this->HPlateau - 1) {
            $this->y++;
        } else {
            echo "Limite  basse atteinte.<br>";}}
    public function position(){
        echo "Position actuelle : $this->x, $this->y<br>";}
}
$LPlateau = 5;
$HPlateau = 5;
$personnage = new Personnage(0, 0, $LPlateau, $HPlateau);

$personnage->position();

$personnage->droite();
$personnage->droite();
$personnage->bas();
$personnage->bas();
$personnage->position();
?>