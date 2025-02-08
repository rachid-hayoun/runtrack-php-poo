<?php
session_start();
class Joueur {
    private $nom;
    private $symbole;

    public function __construct($nom, $symbole) {
        $this->nom = $nom;
        $this->symbole = $symbole;
    }

    public function getNom() {
        return $this->nom;
    }

    public function getSymbole() {
        return $this->symbole;
    }
}
class Plateau {
    private $cases;

    public function __construct() {
        $this->cases = array_fill(0, 9, '-'); 
    }
    public function reset() {
        $this->cases = array_fill(0, 9, '-'); 
    }
    
    public function afficher() {
        echo '<table border="1" class="tictactoe">';
        for ($i = 0; $i < 3; $i++) {
            echo '<tr>';
            for ($j = 0; $j < 3; $j++) {
                $index = $i * 3 + $j;
                echo '<td><button type="submit" name="cell" value="' . $index . '">' . $this->cases[$index] . '</button></td>';
            }
            echo '</tr>';
        }
        echo '</table>';
    }

    public function jouer($index, $symbole) {
        if ($this->cases[$index] == '-') {
            $this->cases[$index] = $symbole;
            return true;
        }
        return false;
    }

    public function verifierVictoire($symbole) {
        $combinaisonsGagnantes = [
            [0, 1, 2], 
            [3, 4, 5], 
            [6, 7, 8], 
            [0, 3, 6], 
            [1, 4, 7], 
            [2, 5, 8], 
            [0, 4, 8], 
            [2, 4, 6], 
        ];

        foreach ($combinaisonsGagnantes as $combinaison) {
            if ($this->cases[$combinaison[0]] == $symbole && $this->cases[$combinaison[1]] == $symbole && $this->cases[$combinaison[2]] == $symbole) {
                return true;
            }
        }
        return false;
    }
    public function estPlein() {
        return !in_array('-', $this->cases);
    }
    public function getCases() {
        return $this->cases;
    }
}
class Jeu {
    private $joueurs;
    private $plateau;
    private $joueurActuel;

    public function __construct($nomJoueur1, $nomJoueur2) {
        $this->joueurs = [
            new Joueur($nomJoueur1, 'rond'),
            new Joueur($nomJoueur2, 'croix')
        ];
        $this->plateau = new Plateau();
        $this->joueurActuel = 0;
    }
    public function jouer($index) {
        $symbole = $this->joueurs[$this->joueurActuel]->getSymbole();
        if ($this->plateau->jouer($index, $symbole)) {
            if ($this->plateau->verifierVictoire($symbole)) {
                return $this->joueurs[$this->joueurActuel]->getNom() . " a gagné !";
            }
            if ($this->plateau->estPlein()) {
                return "Match nul !";
            }
            $this->joueurActuel = ($this->joueurActuel + 1) % 2;
            return null;
        }
        return "Cette case est déjà occupée.";
    }
    public function afficherPlateau() {
        $this->plateau->afficher();
    }
 public function getJoueurActuel() {
        return $this->joueurs[$this->joueurActuel]->getNom();
    }
}
if (!isset($_SESSION['jeu'])) {
    $_SESSION['jeu'] = new Jeu('Jean', 'Paul'); 
}
$message = null;
if (isset($_POST['cell'])) {
    $index = $_POST['cell'];
    $message = $_SESSION['jeu']->jouer($index); 
}
?>
<form method="post">
    <?php
    if ($message) {
        echo "<p>$message</p>";
    }
    $_SESSION['jeu']->afficherPlateau();
    ?>
</form>

<p>Le joueur actuel est : <?php echo $_SESSION['jeu']->getJoueurActuel(); ?></p>
<?php

