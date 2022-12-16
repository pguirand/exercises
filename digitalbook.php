<?php

require_once "book.php";

class DigitalBook extends Book {

    public int $size;

    public function __construct(string $title, string $author, int $price, int $size)
    {
        parent::__construct($title, $author, $price);
        $this->size = $size;
    }

    public function getSize(): int {
        return $this->size / 100;
    }
}