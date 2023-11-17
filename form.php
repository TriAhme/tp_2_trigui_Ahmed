<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Formulaire d'adresses</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <form action="process.php" method="post">
        <label for="num_addresses">Combien d'adresses souhaitez-vous ajouter ?</label>
        <input type="number" id="num_addresses" name="num_addresses" min="1" required>
        <input type="submit" value="Continuer">
    </form>
</body>
</html>
