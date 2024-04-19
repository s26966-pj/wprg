<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <title>booking</title>
</head>
<body>
    <form action="booking_form.php" method="post">
        <label for="guests">Wybierz liczbę gości: </label>
        <select id="guests" name="guests" required>
            <option value="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
            <option value="4">4</option>
        </select>
        <button type="submit" name="submit">Prześlij</button>
    </form>
</body>
</html>