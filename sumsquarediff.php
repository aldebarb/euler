<?php 
// The sum of squares is 
// 1^2 + 2^2 + .... + 10^2 = 385
//
// The square of the sum
// (1 + 2 + ...... + 10)^2 = 3025
//
// The difference between is 3025 - 385 = 2640
// Find the difference between the first one hundred natural numbers

function sumSquare($integer)
{
	$total = 0;

	for ($x = 1; $x <= $integer; $x++) {
		$total += pow($x, 2);
	}
	return $total;
}

function squareSum($integer)
{
	$total = 0;

	for ($x = 1; $x <= $integer; $x++) {
		$total += $x;
	}
	return pow($total, 2);
}

$difference = squareSum(100) - sumSquare(100);

echo "The difference between the sum of squares of the first 100 natural numbers and the square of sum is: $difference";

?>