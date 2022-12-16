<?php 

class Counter {
    
    private static int $count = 0;

    public function __construct()
    {
        self::$count++;
    }

    public static function GetCount(): int 
    {
        return self::$count;
    }
}