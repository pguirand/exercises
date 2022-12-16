<?php

class Product {
    public $name = 'soap';
    public $price = 100;

    public function prixcourant($divisor=1, $currency='$') {
        $priceCurrency = $this->price / $divisor;
        return $currency ." ". $priceCurrency;
    }

}

$product = new Product();
print $product->prixcourant(). PHP_EOL;