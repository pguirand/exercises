<?php

require_once "count.php";

print Counter::GetCount() . PHP_EOL;

$creation1 = new Counter();

print Counter::GetCount() . PHP_EOL;

$creation2 = new Counter();

print Counter::GetCount() . PHP_EOL;

