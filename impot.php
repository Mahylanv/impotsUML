<?php
class ImpotCalculator {
    private $revenus;
    const POURCENTAGE_FAIBLE = 15;
    const POURCENTAGE_ELEVE = 20;

    public function __construct($revenus) {
        $this->revenus = $revenus;
    }

    public function calculerImpot() {
        $pourcentage = ($this->revenus < 15000) ? self::POURCENTAGE_FAIBLE : self::POURCENTAGE_ELEVE;

        $impot = ($pourcentage / 100) * $this->revenus;

        return $impot;
    }
}

