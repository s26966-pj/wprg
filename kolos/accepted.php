<?php
session_start();

//unset($_COOKIE['s26966']);
$db_lnk = mysqli_connect("localhost:3306", "root", "", "defekty");
if (isset($_COOKIE['s26966'])) {
    echo "Formularz został już wysłany. Nic nie wysłano";
} else {
    setcookie('s26966', '15.06.2024', time() + 3600, '/');
    $form_data = $_SESSION['form_data'];
    $first_name = $form_data['first_name'];
    $last_name = $form_data['last_name'];
    $email = $form_data['email'];
    $content = $form_data['content'];

    $query = "INSERT INTO zgloszenia (imie, nazwisko, adres_email, defekt) VALUES ('$first_name', '$last_name', '$email', '$content')";
    $result = mysqli_query($db_lnk, $query);
    echo "Wysłano formularz";
}
echo '<br><a href="index.php">Wróć do strony głównej</a>';
