<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Récapitulatif des adresses</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['num_addresses'])) {
        $num_addresses = $_POST['num_addresses'];

        echo "<form action='save_addresses.php' method='post'>";
        echo "<input type='hidden' name='num_addresses' value='$num_addresses'>";

        for ($i = 1; $i <= $num_addresses; $i++) {
            echo "<h2>Adresse $i</h2>";
            echo "<label for='street_$i'>Rue:</label>";
            echo "<input type='text' id='street_$i' name='street_$i' maxlength='50' required>";

            echo "<label for='street_nb_$i'>Numéro:</label>";
            echo "<input type='number' id='street_nb_$i' name='street_nb_$i' required>";

            echo "<label for='type_$i'>Type:</label>";
            echo "<select id='type_$i' name='type_$i' maxlength='20' required>";
            echo "<option value='livraison'>Livraison</option>";
            echo "<option value='facturation'>Facturation</option>";
            echo "<option value='autre'>Autre</option>";
            echo "</select>";

            echo "<label for='city_$i'>Ville:</label>";
            echo "<select id='city_$i' name='city_$i' required>";
            echo "<option value='Montréal'>Montréal</option>";
            echo "<option value='Laval'>Laval</option>";
            echo "<option value='Toronto'>Toronto</option>";
            echo "<option value='Québec'>Québec</option>";
            echo "</select>";

            echo "<label for='zipcode_$i'>Code postal:</label>";
            echo "<input type='text' id='zipcode_$i' name='zipcode_$i' maxlength='6' required>";

            echo "<br><br>";
        }
        echo "<input type='submit' value='Confirmer'>";
        echo "</form>";
    } else {
        echo "<p>Aucune donnée reçue.</p>";
    }
    ?>
</body>
</html>
