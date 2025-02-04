<?php
class Commande {
    private int $numero_de_commande;
    private array $listeDePlats = [];
    private string $statut_de_la_commande;
    private float $TVA = 0.2;
    public function __construct(int $numero_de_commande,string $statut_de_la_commande){
        $this->numero_de_commande = $numero_de_commande;
        $this->statut_de_la_commande = $statut_de_la_commande;
    }
    public function AjouterUnPlat($nom,$prix,$statut){
        $this->listeDePlats[$nom] = ['prix'=>$prix,'statut'=>$statut];
    }
    public function AnnulerCommande(){
        $this->statut_de_la_commande = "Commande annulée";
    }
    private function calculerTotal() {
        $total = 0;
        foreach ($this->listeDePlats as $plat) {
            $total += $plat['prix'];
        }
        return $total;
    }
    public function afficherCommande() {
        echo "Numéro de commande: " . $this->numero_de_commande . "<br>";
        echo "Statut de la commande: " . $this->statut_de_la_commande . "<br>";
        echo "Plats commandés: <br>";
        foreach ($this->listeDePlats as $nom => $plat) {
            echo "- $nom (Prix: " . number_format($plat['prix'], 2) . " €, Statut: " . $plat['statut'] . ")<br>";
        }
        echo "Total à payer: " . number_format($this->calculerTotal(), 2) . " €<br>";
    }
    public function calculerTVA() {
        return $this->calculerTotal() * $this->TVA;
    }
    public function afficherTVA() {
        echo "TVA: " . number_format($this->calculerTVA(), 2) . " €<br>";
    }
    public function getNumeroDeCommande() {
        return $this->numero_de_commande;
    }
    public function getStatutCommande() {
        return $this->statut_de_la_commande;
    }
    public function getListeDePlats() {
        return $this->listeDePlats;
    }
}
$commande = new Commande(1, "En cours");
$commande->AjouterUnPlat("Pizza Margherita", 12.99, "En préparation");
$commande->AjouterUnPlat("Spaghetti Bolognese", 9.50, "En préparation");
$commande->AjouterUnPlat("Tiramisu", 5.00, "En préparation");
$commande->afficherCommande();
$commande->afficherTVA();
$commande->annulerCommande();
$commande->afficherCommande();

?>