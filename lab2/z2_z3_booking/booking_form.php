<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <title>booking</title>
</head>
<body>
    <form action="booking_result.php" method="post">
        <?php
        $guests = $_POST['guests'];
        
        ?>
        <h3>Dane osoby rezerwującej</h3>
        <label for="first_name">Imię</label><br>
        <input type="text" id="first_name" name="first_name" required>
        <br><br>
        <label for="last_name">Nazwisko</label><br>
        <input type="text" id="last_name" name="last_name" required>
        <br><br>
        <label for="city">Miejscowość</label><br>
        <input type="text" id="city" name="city" required>
        <br><br>
        <label for="postal">Kod pocztowy</label><br>
        <input type="text" id="postal" name="postal" required>
        <br><br>
        <label for="street">Ulica i numer domu</label><br>
        <input type="text" id="street" name="street" required>
        <br><br>
        <label for="phone">Telefon</label><br>
        <input type="text" id="phone" name="phone" required>
        <br><br>
        <label for="mail">E-mail</label><br>
        <input type="email" id="mail" name="mail" required>
        <br><br>
        <h3>Szczegóły pobytu</h3>
        <label for="date_start">Start pobytu</label><br>
        <input type="date" id="date_start" name="date_start" required>
        <br><br>
        <label for="date_end">Koniec pobytu</label><br>
        <input type="date" id="date_end" name="date_end" required>
        <br><br>
        <label for="time">Godzina przyjazdu</label><br>
        <input type="time" id="time" name="time" required>
        <br><br>
        <h3>Udogodnienia</h3>
        <label for="child_bed">Łóżko dla dziecka</label>
        <input type="checkbox" id="child_bed" name="child_bed">
        <br><br>
        <label for="smoke">Popielniczka</label>
        <input type="checkbox" id="smoke" name="smoke">
        <br><br>
        <label for="air_cond">Klimatyzacja</label>
        <input type="checkbox" id="air_cond" name="air_cond">
        <br><br>
        <label for="tv">Telewizja</label>
        <input type="checkbox" id="tv" name="tv">
        <br><br>
        <label for="wifi">Wifi</label>
        <input type="checkbox" id="wifi" name="wifi">
        <br><br>
        <?php
        for ($i = 2; $i < $guests+1; $i++) {
            echo "<h3>Dane gościa nr {$i}</h3>";
            echo "<label for='first_name{$i}'>Imię:</label><br>";
            echo "<input type='text' id='first_name{$i}' name='first_name{$i}' required><br><br>";

            echo "<label for='last_name{$i}'>Nazwisko:</label><br>";
            echo "<input type='text' id='last_name{$i}' name='last_name{$i}' required><br><br>";
        }
        echo "<input type='hidden' id='guests' name='guests' value='$_POST[guests]'>";        ?>
        <button type="submit" name="submit">Prześlij</button>
    </form>
</body>
</html>