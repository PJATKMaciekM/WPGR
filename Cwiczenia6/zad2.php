<?php
class Product {
    private $name, $price, $quantity;
    function __construct($name, $price, $quantity)
    {
        $this->name = $name;
        $this->price = $price;
        $this->quantity = $quantity;
    }
    public function getName(): string
    {
        return $this->name;
    }
    public function setName($name): void
    {
        $this->name = $name;
    }
    public function getPrice(): int
    {
        return $this->price;
    }
    public function setPrice($price): void
    {
        $this->price = $price;
    }
    public function getQuantity(): int
    {
        return $this->quantity;
    }
    public function setQuantity($quantity): void
    {
        $this->quantity = $quantity;
    }
    public function __toString(): string
    {
        return 'Name: ' . $this->name . ', Price: ' . $this->price . ', Quantity: ' . $this->quantity;
    }
}

class Cart {
    private $products;
    public function __construct()
    {
        $this->products = array();
    }
    public function addProduct(Product $product): void
    {
        $this->products[] = $product;
    }
    public function removeProduct(Product $product): void
    {
        $key = array_search($product, $this->products);
        if ($key !== false) {
            unset($this->products[$key]);
        }
    }
    public function getTotalPrice(): int
    {
        $total = 0;
        foreach ($this->products as $product) {
            $total += $product->getPrice() * $product->getQuantity();
        }
        return $total;
    }
    public function __toString()
    {
        echo('Products in cart: ');
        foreach ($this->products as $product) {
            echo('Product: ' . $product->getName());
            echo('Price: ' . $product->getPrice());
            echo('Quantity: ' . $product->getQuantity());
        }
        echo('Total: ') . $this->getTotalPrice();
        return PHP_EOL;
    }
}
?>