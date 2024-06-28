<?php
include ("models/cart.php");
session_start();
?>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Koszyk</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <?php

    include ("includes/connection.php");
    include ("includes/header.html");
    include ("includes/nav.html");
    ?>
    <div class="shop-content">
        <div class='products-list'>
            <?php
            if (isset($_SESSION['cart'])) {
                $cart = $_SESSION['cart'];
            } else {
                $cart = new Cart();
            }

            $products = $cart->getProducts();

            foreach ($products as $index => $product) {
                echo "
             
            <div class='products-list-item'>
                <div class='list-info'>
                    <div class='blank-image'>

                    </div>
                    <div class='item-info'>
                        <p>" . $product->getName() . "</p>
                        <p>" . $product->getPrice() . "</p>
                    </div>
                </div>

                <div class='list-options'>
                <a href='delete_product.php?index=$index'><p>Usuń</p></a>
                </div>
            </div>
      
            ";
            }
            ?>
            <p><span class="bold">Suma: </span><?php echo $cart->getTotal() . "zł" ?></p>
        </div>
    </div>
    <?php
    include ("includes/footer.html");
    ?>
</body>

</html>