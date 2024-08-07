<?php

class Product
{
    private $name, $price, $quantity;

    public function __construct($name, $price, $quantity)
    {
        $this->name = $name;
        $this->price = $price;
        $this->quantity = $quantity;
    }

    public function getName()
    {
        return $this->name;
    }

    public function getPrice()
    {
        return $this->price;
    }

    public function getQuantity()
    {
        return $this->quantity;
    }

    public function setName($name)
    {
        $this->name = $name;
    }

    public function setPrice($price)
    {
        $this->price = $price;
    }
    public function setQuantity($quantity)
    {
        $this->quantity = $quantity;
    }

    public function __toString()
    {
        return "Product(name: $this->name, price: $this->price, quantity: $this->quantity)";
    }
}


$p1 = new Product("123", "1", "1");
echo $p1 . "<br>";
