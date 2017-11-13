<?php 
// The prime factors of 13195 are 5, 7, 13, 29.
// What is the largest prime factor of 60085175143

/* Maximum execution time of 30 seconds exceeded
   Reverse loop did not solve.
   Next step extend execution time.
   
   ini_set('max_execution_time', 300);

   Did not work. Tried turning the numbers into strings
   Used bcmod() to handle large numbers.
*/

function primeFactorA(string $integer)
{
	$max = 0;
	for ($x = 2; $x < $integer; $x++) {
	    settype($x, 'string');	
		
		if (bcmod($integer, $x) == 0) {
		    
		    if (checkIfPrime($x)) {
			//echo "$x, ";
			$max = $x;
		    }
		}
	}
	return $max;
}

function checkIfPrime($integer)
{
	if ($integer < 2) {
		return false;
	}

	for ($divisor = 2; $divisor < $integer; $divisor++) {
		settype($divisor, 'string');
		if (bcmod($integer, $divisor) == 0) {
			return false;
		}
	}
	return true;
}
echo "<br> The max prime factor of 13195 is: " . primeFactorA(13195);
echo "<br> The max is " . primeFactorA(60085175143);

function primeFactorB($integer)
{
	$max = 0;
	for ($x = $integer; $x > $max; $x--) {

		if (($integer % $x == 0) && checkIfPrime($x)) {
			$max = $x;
		}
	}
	return $max;
}
//echo "<br> The max prime factor of 60085175143 is: " . primeFactorB(60085175143);

?>