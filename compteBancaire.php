<?php
class CompteBancaire {
    private $nom;
    private $solde;

    public function __construct($nom = 'Dupont', $solde = 1000) {
        $this->nom = $nom;
        $this->solde = $solde;
    }

    public function depot($somme) {
        if ($somme > 0) {
            $this->solde += $somme;
        }
    }

    public function retrait($somme) {
        if ($somme > 0 && $somme <= $this->solde) {
            $this->solde -= $somme;
        }
    }

    public function affiche() {
        return "Le solde de {$this->nom} est de {$this->solde} €";
    }
}

$compte1 = new CompteBancaire('Duchmol', 800);
$compte1->depot(100);
$compte1->retrait(10);
echo $compte1->affiche(); 

$compte2 = new CompteBancaire();
$compte2->depot(2500);
echo $compte2->affiche(); 