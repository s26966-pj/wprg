<?php
include ("models/cart.php");
global $cart;

session_start();

$index = $_GET['index'];

if (isset($_SESSION['cart'])) {
    $cart = $_SESSION['cart'];
} else {
    $cart = new Cart();
    $_SESSION['cart'] = $cart;
}

$cart->removeProduct($index);
$_SESSION['cart'] = $cart;
header("Location: cart.php");
