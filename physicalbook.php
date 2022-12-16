<?php 

require_once "book.php";

class PhysicalBook extends Book {

    public int $weight;

    public function __construct(string $title, string $author, int $price, int $weight)
    {
        parent::__construct($title, $author, $price);
        $this->weight = $weight;
    }

}