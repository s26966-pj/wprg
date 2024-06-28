<?php
global $conn;
include ("includes/connection.php");
include ("models/product.php");

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $query = "SELECT * FROM products WHERE id = '$id'";
} else {
}
$result = mysqli_query($conn, $query);

$row = mysqli_fetch_object($result);
$product = new Product($row->id, $row->name, $row->description, $row->price, $row->category, $row->quantity);
?>

<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $product->getName() ?></title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <?php
    include ("includes/header.html");
    include ("includes/nav.html");
    ?>
    <div class="shop-content">
        <?php
        echo "<p>" . $product->getName() . "</p>";
        echo "<p>" . $product->getDescription() . "</p>";
        echo "<p>Cena: " . $product->getPrice() . " zł</p>";
        echo "<p>W magazynie: " . $product->getQuantity() . "</p>";
        ?>
        <br>
        <?php
        echo "<a href='add_product.php" .
            "?id=" . $product->getId() .
            "&name=" . $product->getName() .
            "&description=" . $product->getDescription() .
            "&price=" . $product->getPrice() .
            "&category=" . $product->getCategory() .
            "&quantity=" . $product->getQuantity() .
            "&details=true" .
            "'>" ?>
        <button class='add'>
            <p>Dodaj do koszyka</p>
        </button>
        </a>
    </div>
    <?php
    include ("includes/footer.html");
    ?>
</body>

</html>