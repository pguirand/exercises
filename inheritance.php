<?php 
require_once "book.php";
require_once "digitalbook.php";
require_once "physicalbook.php";

$phisical_book = new Book("Power of Life", "Strejoski", 1600);

print $phisical_book->price.PHP_EOL;

$phys1 = new PhysicalBook("Learning Python", "Reginal D.", 1500, 300);

$digi1 = new DigitalBook("Artificial Intelligence", "Peter Pan", 1500, 150);

print $phys1->getAuthor(). PHP_EOL;
print $phys1->weight . PHP_EOL;

print $digi1->size. PHP_EOL;
