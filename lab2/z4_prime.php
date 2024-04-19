<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <title>booking</title>
</head>
<body>
    <form action="z4_prime.php" method="post">
        <label for="number">Podaj liczbę:</label><br>
        <input type="number" name="number" id="number">
        <button type="submit">Sprawdź</button>
        <br><br>
    </form>
    <?php
    function isPrime($number){
        $iteration = 1;
        if ($number == 1) return 0;
        for ($i = 2; $i <= sqrt($number); $i++){
            echo "Iteracja " . $iteration++ . "<br>";
            if ($number % $i == 0)
                return 0;
        }
        return 1;
    }

    if(isset($_POST['number'])) {
        $num = $_POST['number'];
        if($num > 0) {
            if(isPrime($num)) {
                echo "To jest liczba pierwsza";
            } else {
                echo "To nie jest liczba pierwsza";
            }
        } else {
            echo "To jest liczba ujemna!";
        }
    }
    ?>
</body>
</html>