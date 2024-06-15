<!DOCTYPE html>
<html lang="pl">

<head>
    <meta charset="UTF-8">
    <title></title>
    <link rel="stylesheet" href="style.css">
    <style>
        table,
        td,
        th {
            padding: 5px;
            border: 1px solid black;
            border-collapse: collapse;
        }
    </style>
</head>

<body>
    <?php
    $db_lnk = mysqli_connect("localhost:3306", "root", "", "defekty");

    $query = "SELECT * FROM zgloszenia";
    $result = mysqli_query($db_lnk, $query);
    ?>
    <h1>Wszystkie wpisy</h1>
    <table>
        <tr>
            <th>id</th>
            <th>imie</th>
            <th>nazwisko</th>
            <th>email</th>
            <th>tresc zgloszenia</th>
        </tr>
        <?php
        while ($row = mysqli_fetch_row($result)) {
            echo "<tr>";
            echo "<td>$row[0]</td>";
            echo "<td>$row[1]</td>";
            echo "<td>$row[2]</td>";
            echo "<td>$row[3]</td>";
            echo "<td>$row[4]</td>";
            echo "<tr>";
        }
        mysqli_close($db_lnk);
        ?>
    </table>

</body>

</html>