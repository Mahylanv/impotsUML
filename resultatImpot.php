<?php
require('impot.php');

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $revenus = $_POST['revenus'];
    $nom = $_POST['nom'];

    $impot = new Impot($nom, $revenus);
    $render = $impot->AfficheImpot();
} else {
    $render = "Formulaire vide";
}

?>

<!DOCTYPE html>
<html>
<head>
</head>
<body>
    <p><?= $render ?></p>
</body>
</html>