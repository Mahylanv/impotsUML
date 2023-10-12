<?php
class ImpotCalculator {
    private $revenus;

    public function __construct($revenus) {
        $this->revenus = $revenus;
    }

    public function calculerImpot() {
        if ($this->revenus < 15000) {
            $pourcentage = 15;
        } else {
            $pourcentage = 20;
        }

        $montantImpot = ($pourcentage / 100) * $this->revenus;

        return $montantImpot;
    }
}
?>

