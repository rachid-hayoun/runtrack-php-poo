<?php
class Livre{
    private string $titre;
    private string $auteur;
    private int $page;
    private bool $disponible;
    public function __construct(string $titre,string $auteur,int $page){
        $this->titre=$titre;
        $this->auteur=$auteur;
        $this->page=$page;}
    public function getTitre(){
        return $this->titre;}
    public function getAuteur(){
        return $this->auteur;}
    public function getPage(){
        if ($this-> page > 0){
            return $this->page;} 
        else{
            return "erreur";}
    }
    public function setInfos($titre,$auteur,$page){
        $this->titre=$titre;
        $this->auteur=$auteur;
        $this->page=$page;}
     public function Verification(){
        if ($this->disponible=true){
            return true;}
        else{
            return false;}
        }   
    public function emprunter(){
        if($this->disponible=false){
            echo "Livre indisponible";}
        else{
            echo "Livre disponible";}
    }
    public function rendre(){
        if($this->disponible=true){
            echo "Vous avez rendu le livre";}
        else{
            echo "Vous n'avez pas rendu le livre";}
    }
}
$livre = new livre("Plateforme","Rachid",50,true);
echo $livre->getTitre()."<br>";
echo $livre->getAuteur()."<br>";
echo $livre->getPage()."<br>";
$livre->setInfos("Plateforme","Rachid",50);
echo $livre->emprunter()."<br>";
echo $livre->rendre();
?>
