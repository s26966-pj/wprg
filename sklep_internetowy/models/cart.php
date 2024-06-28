<?php
include "product.php";

class Cart
{
    private $products;

    public function __construct()
    {
        $this->products = array();
    }

    public function getProducts()
    {
        return $this->products;
    }

    public function addProduct(Product $product)
    {
        array_push($this->products, $product);

    }

    public function removeProduct($key)
    {
        unset($this->products[$key]);
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
