<!DOCTYPE html>
<html lang="pl">

<head>
    <meta charset="UTF-8">
    <title>Samochody</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <?php
    $db_lnk = mysqli_connect("localhost:3306", "root", "root", "mojaBaza");
    include "nav.php";

    $query = "SELECT * FROM samochody ORDER BY cena LIMIT 5";
    $result = mysqli_query($db_lnk, $query);
    ?>
    <h1>Top 5 najtańszych samochodów</h1>
    <table>
        <tr>
            <th>id</th>
            <th>marka</th>
            <th>model</th>
            <th>cena</th>
            <th>rok</th>
            <th>opis</th>
        </tr>
        <?php
        while ($row = mysqli_fetch_row($result)) {
            echo "<tr>";
            echo "<td>$row[0]</td>";
            echo "<td>$row[1]</td>";
            echo "<td>$row[2]</td>";
            echo "<td>$row[3]</td>";
            echo "<td>$row[4]</td>";
            echo "<td>$row[5]</td>";
            echo "<tr>";
        }
        mysqli_close($db_lnk);
        ?>
    </table>
    
</body>

</html>