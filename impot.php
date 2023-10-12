<?php

class Impot {
    const POURCENTAGE_FAIBLE = 0.15;
    const POURCENTAGE_FORT = 0.20;

    private $nom;
    private $revenus;

    public function __construct($nom, $revenus) {
        $this->nom = $nom;
        $this->revenus = $revenus;
    }

    public function CalculImpot() {
        if ($this->revenus <= 15000) {
            return $this->revenus * self::POURCENTAGE_FAIBLE;
        } else {
            return $this->revenus * self::POURCENTAGE_FORT;
        }
    }

    public function AfficheImpot() {
        $impot = $this->CalculImpot();
        return "Mr " . $this->nom . " votre impôt est de ". $impot . " euros.";
    }
}
?>