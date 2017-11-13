<?php 
// Palindrome numer reads the same both ways.
// Largest palindrome made from the product of two 2-digit numbers is
// 91 x 99 = 9009
//
// Find the largest palindrome from the product of two 3 digit numbers.

function checkPalindrome(string $integer)
{
	$length = strlen($integer);
	$first = substr($integer, 0, $length/2);
	$second = substr($integer, $length/2);

	if ($first == strrev($second) && $length % 2 == 0) {
		return true;
	}
	return false;
}

function largestPalindrome() 
{
	$palindromeArray = array();
	$product = 0;
	for ($x = 999; $x > 0; $x--) {

		for ($y = 999; $y > 0; $y--) {
	        $product = $x * $y;
	    
	        if (checkPalindrome($product)) {
	            $palindromeArray[] = $product;
	        }
		}
	}
	return max($palindromeArray);
}

print_r(largestPalindrome());
?>