<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <title>Calc</title>
</head>
<body>
    <form method="post">
        <input type="number" id="num1" name="num1" required>
        <br><br>
        <select id="operation" name="operation">
            <option value="add">dodawanie</option>
            <option value="subtract">odejmowanie</option>
            <option value="multiply">mnozenie</option>
            <option value="divide">dzielenie</option>
        </select>
        <br><br>
        <input type="number" id="num2" name="num2" required>
        <br><br>
        <button type="submit" name="submit">oblicz</button>
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['submit'])) {
        $num1 = $_POST['num1'];
        $num2 = $_POST['num2'];
        $operation = $_POST['operation'];
        switch ($operation) {
            case 'add':
                $result = $num1 + $num2;
                break;
            case 'subtract':
                $result = $num1 - $num2;
                break;
            case 'multiply':
                $result = $num1 * $num2;
                break;
            case 'divide':
                if ($num2 != 0) {
                    $result = $num1 / $num2;
                } else {
                    echo "nie dziel przez zero";
                }
                break;
        }
        echo $result;
    }
    ?>
</body>
</html>