<?php 
// 2520 is the smallest number that can be divided by each of the numbers
// from 1 to 10 without any remainder.
//
// What is the smallest number that is evenly divisble by all numbers
// from 1 to 20

function remainderZero($integer)
{
	for ($x = 1; $x <= 20; $x++) {

		if ($integer % $x != 0) {
            return false;
		}
	}
	return true;
}

function smallestMultiple() 
{
	$sum = 20;
	while (!remainderZero($sum)) {
		$sum += 20;
	}
	return $sum;
}

echo "The smallest mulitple of numbers from 1 to 20 is:  " . smallestMultiple();
?>