<?php
class Livre{
    private string $titre;
    private string $auteur;
    private int $page;
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
    }
    $livre = new Livre("La Plateforme","Rachid",30);
    echo "Titre : ".$livre->getTitre()."<br>";
    echo "Auteur :".$livre->getAuteur()."<br>";
    echo "Page :".$livre->getPage()."<br>";
    $livre->setInfos("Wesh Alors","Rachid",-2);
    echo "Tire : ".$livre->getTitre()."<br>";
    echo "Auteur : ".$livre->getAuteur()."<br>";
    echo "Page :".$livre->getPage();
?>
