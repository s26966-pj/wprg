<?php

class Product
{
    private $id, $name, $description, $price, $category, $quantity;
    public function __construct($id, $name, $description, $price, $category, $quantity)
    {
        $this->id = $id;
        $this->name = $name;
        $this->description = $description;
        $this->price = $price;
        $this->category = $category;
        $this->quantity = $quantity;
    }
    public function getId()
    {
        return $this->id;
    }
    public function getName()
    {
        return $this->name;
    }
    public function getDescription()
    {
        return $this->description;
    }
    public function getPrice()
    {
        return $this->price;
    }
    public function getCategory()
    {
        return $this->category;
    }
    public function getQuantity()
    {
        return $this->quantity;
    }
}
