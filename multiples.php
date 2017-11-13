<?php
// Multiples of 3 and 5 
// 3,5 of 10 = 23
// 3+5+6+9 = 23

function multiple($int)
{
	$total = 0;
	
	for ($x = 1; $x * 3 < $int; $x++) {
		$total += ($x * 3);
	}
	
	for ($y = 1; $y * 5 < $int; $y++) {
		$total += ($y *  5);
	}
	return $total;
}

echo multiple(10);
echo "<br>" . multiple(1000);


function multipleArray($int)
{
	$array = array();

	for ($x = 1; $x * 3 < $int; $x++) {
		$array [] = $x * 3;
	}

	for ($y = 1; $y * 5 < $int; $y++) {
		$array[] = $y * 5;
	}
	return $array;
}

echo "<br>";
print_r(multipleArray(10));
echo "<br>" . array_sum(multipleArray(10)) . "<br>";
print_r(multipleArray(1000));