<?php 
// Sum of even numbers in Fibonacci sequence
// whose values do not exceed four million.

function evenFibonacci($int)
{
	$sum = 2;
	$first = 1;
	$second = 2;
	$fib = 0;
	//$array = array(2);
	/*
	for ($x = 1; $fib < $int; $x++) {
		$fib = $first + $second;
		if (($fib % 2) == 0) {
			$array[] = $fib;
			$sum += $fib;
		}
		$first = $second;
		$second = $fib;
	}
	*/

	while ($fib < $int) {
		$fib = $first + $second;
		if (($fib % 2) == 0) {
			$sum += $fib;
		}
		$first = $second;
		$second = $fib;
	}
	return $sum;
	// Not standard practice
	// Used this to check sum and proof of even numbers
	// echo "Sum of even fibonacci numbers under 4,000,000 is: $sum<br>";
	// return $array;
}

echo "Sum of even fibonacci numbers under 4,000,000 is: " . evenFibonacci(4000000);

?>