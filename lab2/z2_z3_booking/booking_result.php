<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <title>booking</title>
</head>
<body>
    <h2>Podane dane:</h2>
    
    <?php
    if (isset($_POST['submit'])) {
        $first_name = $_POST['first_name'];
        $last_name = $_POST['last_name'];
        $city = $_POST['city'];
        $postal = $_POST['postal'];
        $street = $_POST['street'];
        $phone = $_POST['phone'];
        $mail = $_POST['mail'];
        $date_start = $_POST['date_start'];
        $date_end = $_POST['date_end'];
        $time = $_POST['time'];
        $child_bed = isset($_POST['child_bed']) ? "Tak" : "Nie";
        $smoke = isset($_POST['smoke']) ? "Tak" : "Nie";
        $air_cond = isset($_POST['air_cond']) ? "Tak" : "Nie";
        $tv = isset($_POST['tv']) ? "Tak" : "Nie";
        $wifi = isset($_POST['wifi']) ? "Tak" : "Nie";

        echo "<h3>Dane osoby rezerwującej:</h3>";
        echo "Imię: $first_name <br>"; 
        echo "Nazwisko: $last_name <br>";
        echo "Miejscowość: $city <br>";
        echo "Kod pocztowy: $postal <br>";
        echo "Ulica i numer domu: $street <br>";
        echo "Telefon: $phone <br>";
        echo "E-mail: $mail <br>";
        echo "<h3>Szczegóły pobytu:</h3>";
        echo "Pobyt od: $date_start <br>";
        echo "Pobyt do: $date_end <br>";
        echo "Godzina przyjazdu: $time <br>";
        echo "<h3>Udogodnienia:</h3>";
        echo "Łóżko dla dziecka: $child_bed <br>";
        echo "Popielniczka: $smoke <br>";
        echo "Klimatyzacja: $air_cond <br>";
        echo "Telewizja: $tv <br>";
        echo "Wifi: $wifi <br>";

        $guests = $_POST['guests'];
        for ($i = 2; $i < $guests+1; $i++) {
            echo "<h3>Dane gościa nr {$i}</h3>";
            echo "Imię:" . $_POST["first_name$i"] . "<br>";
            echo "Nazwisko:" . $_POST["last_name$i"] . "<br>";
        }

    }
    ?>
</body>
</html>