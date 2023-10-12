<!DOCTYPE html>
<html>
<head>
    <title>Formulaire PHP</title>
</head>
<body>
    <form action="resultatImpot.php" method="post">
        <label for="nom">Nom :</label>
        <input type="text" id="nom" name="nom" required><br><br>

        <label for="revenus">Revenus :</label>
        <input type="number" id="revenus" name="revenus" required><br><br>

        <input type="submit" value="OK">
    </form>
</body>
</html>