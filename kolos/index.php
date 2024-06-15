<!DOCTYPE html>
<html lang="pl">

<head>
    <meta charset="UTF-8">
    <title></title>
</head>

<body>
    <form action="results.php" method="get">
        <label for="first_name">Imię</label><br>
        <input type="text" id="first_name" name="first_name" required>
        <br><br>
        <label for="last_name">Nazwisko</label><br>
        <input type="text" id="last_name" name="last_name" required>
        <br><br>
        <label for="email">Email</label><br>
        <input type="email" id="email" name="email" required>
        <br><br>
        <label for="contnet">Treść</label><br>
        <textarea name="content"></textarea>
        <br><br>
        <button type="submit" name="submit">Prześlij</button>
        <br><br>
        <a href="table.php">Zobacz wszystkie wpisy</a>
    </form>

</body>

</html>