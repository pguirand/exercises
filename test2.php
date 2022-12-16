<?php

class Product {
    public $name = "shoes";
    public $price;

    public function pricecurrency() {
        $newprice = $this->price / 100;
        
        return $newprice;
    }
}

$product1 = new Product();
$product1->price = 850;

$soap2 = $product1->pricecurrency();
var_dump($soap2) . PHP_EOL;
print $soap2 . "\n";
