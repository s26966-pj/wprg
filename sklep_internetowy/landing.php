<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MyShop</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <?php
    include ("includes/connection.php");
    include ("includes/header.html");
    include ("includes/nav.html");
    include ("models/product.php");

    ?>
    <div class="shop-content">
        <div class="items-container">
            <?php
            global $cart;
            global $conn;
            if (isset($_GET['category'])) {
                $category = $_GET['category'];
                $query = "SELECT * FROM products WHERE category = '$category'";
            } else {
                $query = "SELECT * FROM products";
            }

            $result = mysqli_query($conn, $query);

            while ($row = mysqli_fetch_object($result)) {
                $product = new Product($row->id, $row->name, $row->description, $row->price, $row->category, $row->quantity);
                echo "
                <div class='item'>
                    <a href='details.php?id=".$product->getId()."'>
                        <div class='item-image'>
                            
                        </div>
                        <div class='item-info'>
                            <p>".$product->getName()."</p>
                            <p>".$product->getCategory()." zł</p>
                            <a href='add_product.php" .
                            "?id=" . $product->getId() .
                            "&name=" . $product->getName() .
                            "&description=" . $product->getDescription() .
                            "&price=" . $product->getPrice() .
                            "&category=" . $product->getCategory() .
                            "&quantity=" . $product->getQuantity() .
                            (isset($_GET['category'])?"&tab_category=$category":"") .
                            "'><img class='icon' src='icons/shopping-cart.svg'>
                            </a>
                        </div>
                    </a>
                </div>
                   ";
            }
            mysqli_close($conn);
            ?>
        </div>
    </div>
    <?php
    include ("includes/footer.html");
    ?>
</body>

</html>