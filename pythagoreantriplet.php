<?php 
// A Pythagorean triplet is a set of three natural nunbers
// a < b < c, for which
// a^2 + b^2 = c^2
//
// Example 3^2 + 4^2 = 5^2
//         9 + 16 = 25
//
// There exists exactly one Pythagorean triplet for which
// a + b + c = 1000
// Find the product abc
$array = array();
$sum = 0;

for ($x = 1; $x < 50; $x++) {
    $array[] = $x * $x;
}

print_r($array);