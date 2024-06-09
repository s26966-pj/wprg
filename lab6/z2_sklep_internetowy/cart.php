<?php
include "product.php";

class Cart
{
    private $products;

    public function __construct()
    {
        $this->products = array();
    }

    public function addProduct(Product $product)
    {
        array_push($this->products, $product);

    }

    public function removeProduct(Product $product)
    {
        if ($p = array_search($product, $this->products)) {
            unset($this->array[$p]);
        }
    }

    public function getTotal()
    {
        $total = 0;
        foreach ($this->products as $product) {
            $total += $product->getPrice();
        }
        return $total;
    }

    public function __toString()
    {
        echo "Produkty w koszyku:<br>";
        echo implode("<br>", $this->products);
        echo "<br>";
        return "Wartość koszyka: " . $this->getTotal();
    }
}
$p1 = new Product("123", "123", "123");

$cart = new Cart();

$cart->addProduct($p1);
$cart->addProduct($p1);
$cart->addProduct($p1);
$cart->addProduct($p1);

echo $cart;