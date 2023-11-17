<?php
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['num_addresses'])) {
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "ecom1_tp2";

    $conn = new mysqli($servername, $username, $password, $dbname);

    if ($conn->connect_error) {
        die("La connexion a échoué: " . $conn->connect_error);
    }

    $num_addresses = $_POST['num_addresses'];

    for ($i = 1; $i <= $num_addresses; $i++) {
        $street = $_POST["street_$i"];
        $street_nb = $_POST["street_nb_$i"];
        $type = $_POST["type_$i"];
        $city = $_POST["city_$i"];
        $zipcode = $_POST["zipcode_$i"];

        $sql = "INSERT INTO address (street, street_nb, type, city, zipcode) VALUES ('$street', $street_nb, '$type', '$city', '$zipcode')";

        if ($conn->query($sql) !== TRUE) {
            echo "Erreur lors de l'insertion de l'adresse $i: " . $conn->error;
        }
    }

    $conn->close();
} else {
    echo "<p>Aucune donnée reçue.</p>";
}
?>
