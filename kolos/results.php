<!DOCTYPE html>
<html lang="pl">

<head>
    <meta charset="UTF-8">
    <title></title>
</head>

<body>
    <h2>Podane dane:</h2>
    <?php
    session_start();
    if (isset($_GET['submit'])) {
        $first_name = $_GET['first_name'];
        $last_name = $_GET['last_name'];
        $email = $_GET['email'];
        $content = $_GET['content'];
        echo "Imię: $first_name <br>";
        echo "Nazwisko: $last_name <br>";
        echo "Email: $email <br>";
        echo "Opis: $content <br>";

        if (!isset($_SESSION['form_data'])) {
            $form_data = array("first_name" => $first_name, "last_name" => $last_name, "email" => $email, "content" => $content);
            $_SESSION['form_data'] = $form_data;
        }
    }

    ?>
    <br>
    <form action="accepted.php" method="get">
    <button type="submit" name="accept">Akceptuj</button>
    </form>
    
</body>

</html>