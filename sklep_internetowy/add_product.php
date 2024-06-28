<?php
include ("models/cart.php");
global $cart;

session_start();

$id = $_GET['id'];
$name = $_GET['name'];
$description = $_GET['description'];
$price = $_GET['price'];
$category = $_GET['category'];
$quantity = $_GET['quantity'];

$product = new Product($id, $name, $description, $price, $category, $quantity);
if (isset($_SESSION['cart'])) {
    $cart = $_SESSION['cart'];
} else {
    $cart = new Cart();
    $_SESSION['cart'] = $cart;
}

$cart->addProduct($product);
$_SESSION['cart'] = $cart;
if(isset($_GET['tab_category'])) {
    $tab_category = $_GET['tab_category'];
    header("Location: landing.php?category=$tab_category");

} else {
    if(!isset($_GET['details'])) {
        header("Location: landing.php");
    } else {
        header("Location: details.php?id=$id");
    }
}
