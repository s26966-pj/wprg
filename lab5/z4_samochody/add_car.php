<!DOCTYPE html>
<html lang="pl">

<head>
    <meta charset="UTF-8">
    <title>Samochody</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <?php
    include "nav.php";
    include "add_car_form.html";
    if (isset($_POST['marka'])) {
        $marka = $_POST['marka'];
        $model = $_POST['model'];
        $cena = $_POST['cena'];
        $rok = $_POST['rok'];
        $opis = $_POST['opis'];

        $db_lnk = mysqli_connect("localhost:3306", "root", "root", "mojaBaza");

        $query = "INSERT INTO samochody (marka, model, cena, rok, opis) VALUES ('$marka', '$model', $cena, $rok, '$opis')";
        $result = mysqli_query($db_lnk, $query);
        echo "<p>Pomyślnie dodano nowy samochód!</p>";
    }
    ?>

</body>

</html>