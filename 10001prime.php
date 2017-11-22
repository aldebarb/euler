<?php 
// The first six prime numbers 2, 3, 5, 7, 11, 13
// Find the 10,001st prime number.

function nthPrime($integer)
{
	$x = 2;
	$primeArray = array();
    while (count($primeArray) < $integer ) {
        
        if (checkIfPrime($x)) {
        	$primeArray[] = $x;
        }
        $x++;
    }
    return end($primeArray);
}

function checkIfPrime($integer)
{
    if ($integer < 2) {
    	return false;
    }

    for ($divisor = 2; $divisor < $integer; $divisor++) {
        
        if (($integer % $divisor) == 0) {
        	return false;
        }
    }
    return true;
}
echo "The 10,001st prime number is: " . nthPrime(10001);

?>

