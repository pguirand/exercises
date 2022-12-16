<?php


class Product 
{
    public $name = 'soap';
    public $price = 9;
}
// $product = new Product();
// $otherproduct = new Product();
// var_dump($product);
// var_dump($otherproduct);    

$soapobj = new Product();
$secondobj = new Product();
print $soapobj->name . "\n";
$soapobj->name = 'toothpaste';
print $soapobj->name ."\n";
print $secondobj->price . "\n";
$secondobj->price = 11;
print $secondobj->price . "\n";