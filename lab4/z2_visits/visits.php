<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <title>reverse</title>
</head>
<body>
    <h1>Liczba odwiedzin: 
    <?php
        $fd = fopen("licznik.txt", "a+");
        $counter = intval(file_get_contents("licznik.txt"));
        file_put_contents("licznik.txt", ++$counter);
        echo file_get_contents("licznik.txt");
        fclose($fd);
    ?>
    </h1>
</body>
</html>