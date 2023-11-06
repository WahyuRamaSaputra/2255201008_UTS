<?php
namespace Codecademy;

$stack = ["pergi", "berkerja", "hiling"];
// Write your code below:
array_push($stack, "tidur","nyantai");

print_r($stack);

array_pop($stack);
array_pop($stack);
array_pop($stack);
array_pop($stack);

print_r($stack);
?>