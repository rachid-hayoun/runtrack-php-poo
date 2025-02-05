<?php
class Personne {
    public int $age = 14;

    public function __construct(int $age){
        $this->age = $age;
    }
    public function afficherAge(){
        echo "L'âge de la personne est : ".$this->age." ans";
    }
    public function bonjour(){
        echo "Hello ";
    }
    public function modifierAge(int $age){
        $this->age=$age;
    }
}
class Eleve extends Personne{
    public function  allerEnCours(){
        echo "Je vais en cours<br>";
    }
    public function afficherAge(){
        echo "L'âge de l'étudiant est : ". $this->age ." ans<br>";
    }
}
class Professeur {
    private string $matiereEnseignee;
    public function __construct(string $matiereEnseignee) {
        $this->matiereEnseignee = $matiereEnseignee;
    }
    public function enseigner(){
        echo "Le cours va commencer";
    }
}
$eleve=new Eleve(14);
$eleve->afficherAge();
$eleve->allerEnCours();
$eleve->modifierAge(18);
$eleve->afficherAge();

?>