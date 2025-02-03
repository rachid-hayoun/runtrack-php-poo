<?php
class Animal {
    public int $age;
    public string $prenom;
    public function __construct(int $age, string $prenom) {
        $this->age = $age;
        $this->prenom = $prenom;
    }
    public function vieillir() {
        $this->age++;
        echo "Age apres vieillissement : ".$this->age." ans <br>";
    }
    public function nommer() {
        echo "L'animal se nomme ".$this->prenom;
    }
}
$animal = new Animal(0,"Bob");
echo "<br>";
echo "Age avant le vieillissement: ".$animal->age."<br>";
$animal->vieillir();
$animal->nommer();
?>