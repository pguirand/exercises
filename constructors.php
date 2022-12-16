<?php

class Student {

    public $name;
    public $age;

   public function __construct(string $name, int $age)
   {
    $this->name = $name;
    $this->age = $age;
   }

   public function Display() {
    print "je m'appelle ".$this->name. " et j'ai ".$this->age." ans.".PHP_EOL;
   }

}