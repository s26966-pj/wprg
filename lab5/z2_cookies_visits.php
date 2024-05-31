<?php
if(!isset($_COOKIE['counter'])) {
    setCookie("counter", 1, time() + 60*60*24, '/');
    echo 'To Twoja pierwsza wizyta na tej stronie!';
} else {
    $counter = $_COOKIE['counter'];
    echo 'Liczba odwiedzin tej strony: ' . ++$counter;
    setCookie("counter", $counter, time() + 60*60*24, '/');
}
?>