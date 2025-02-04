<?php
class Student {
    private string $nom;
    private string $prenom;
    private int $numEtudiant;
    private int $totalCredits;
    private int $level;
    public function __construct(string $nom, string $prenom, int $numEtudiant) {
        $this->nom = $nom;
        $this->prenom = $prenom;
        $this->numEtudiant = $numEtudiant;
        $this->totalCredits = 0; 
    }

    public function addCredits(int $credits) {
        if ($credits > 0) {
            $this->totalCredits += $credits;
        }
    }
    public function getTotalCredits() {
        return $this->totalCredits;}
    private function studentEval(){
        if ($this->totalCredits >= 90){
            echo "Excellent";
        }elseif ($this->totalCredits >= 80){
            echo "Très bien";
        }elseif ($this->totalCredits >= 70){
            echo "Bien";
        }elseif ($this->totalCredits >= 60){
            echo "Passable";
        }else{
            echo "Insuffisant";
        }                
    }
    public function studentInfo(){
        return $this->nom.$this->prenom.$this->numEtudiant;
    }
    public function evaluer(){
        $this->studentEval();
    }
}
$student = new Student("Doe", "John", 145);

$student->addCredits(1);
$student->addCredits(70); 
$student->addCredits(10 ); 

echo "Total de crédits de John Doe : " . $student->getTotalCredits()."<br>";
$student->evaluer();
?>
