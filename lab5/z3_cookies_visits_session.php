<?php
session_start();

if(!isset($_COOKIE['counter'])) {
    setCookie("counter", 1, time() + 60*60*24, '/');
    echo 'To Twoja pierwsza wizyta na tej stronie!';
} else {
    $counter = $_COOKIE['counter'];
    if(!isset($_SESSION['visited'])) {
        $counter++;
        setCookie("counter", $counter, time() + 60*60*24, '/');
        $_SESSION['visited'] = true;
    } 
    echo 'Liczba odwiedzin tej strony: ' . $counter;
}

// session_destroy();
?>