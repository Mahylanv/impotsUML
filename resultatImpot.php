<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    include 'impot.php';

    $nom = $_POST["nom"];
    $revenus = $_POST["revenus"];

    $impotCalculator = new ImpotCalculator($revenus);
    $impot = $impotCalculator->calculerImpot();

    echo "Nom : " . $nom . "<br>";
    echo "Revenus : " . $revenus . "<br>";

    echo "Mr " . $nom . " votre impôt est de : " . $impot . " euros";
}
?>
