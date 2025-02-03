<?php
class Personne{
    public string $nom;
    public string $prenom;
public function SePresenter(){
    return $this->nom . $this->prenom;}
public function __construct(string $nom,string $prenom){
$this->nom = $nom;
$this->prenom = $prenom;}
}
$personne1=new personne("Hayoun ","Rachid");
$personne2=new personne("VS ","Code");
echo "Je suis ".$personne1->SePresenter()."<br>";
echo "Je suis ".$personne2->SePresenter();
?>