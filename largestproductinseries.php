<?php 
// The four adjacent digits in this 1000-digit number
// that have the greatest product are 9x9x8x9 = 5832
// Find 13 adjacent digits in this series that have 
// the greatest product.

$series = "7316717653133062491922511967442657474235534919493496983520312774506326239578318016984801869478851843858615607891129494954595017379583319528532088055111254069874715852386305071569329096329522744304355766896648950445244523161731856403098711121722383113622298934233803081353362766142828064444866452387493035890729629049156044077239071381051585930796086670172427121883998797908792274921901699720888093776657273330010533678812202354218097512545405947522435258490771167055601360483958644670632441572215539753697817977846174064955149290862569321978468622482839722413756570560574902614079729686524145351004748216637048440319989000889524345065854122758866688116427171479924442928230863465674813919123162824586178664583591245665294765456828489128831426076900422421902267105562632111110937054421750694165896040807198403850962455444362981230987879927244284909188845801561660979191338754992005240636899125607176060588611646710940507754100225698315520005593572972571636269561882670428252483600823257530420752963450";

$numberOfDigits = 13;

// echo strlen((string)$series);
// print_r(str_split($series));

function greatestProduct($series, $numberOfDigits)
{
    $seriesLength = strlen($series);
    $seriesArray = str_split($series);
    $maxProduct = 0;
    $maxArray = array();
    $temp = array();

    for ($x = 0; $x < $seriesLength - ($numberOfDigits - 1); $x++) {

    	for ($y = $x; $y < $x + $numberOfDigits; $y++) {
    		$temp[] = $seriesArray[$y];
        }
       
        if ($maxProduct < array_product($temp)) {
        	$maxProduct = array_product($temp);
        	$maxArray = $temp;
        }
    	$temp = array();
    }
    return $maxArray;
}

print_r(greatestProduct($series, $numberOfDigits));
echo "<br>The largest product of $numberOfDigits adjacent digits is: " . array_product(greatestProduct($series, $numberOfDigits));

/*

$product = 1;
$maxProduct = 1;
$array = array(1,2,3,4,5,6,7,8,9);


foreach ($array as $value) {
    $product *= $value;
}
if ($product > $maxProduct) {

}
echo $product;

$temp = array();
// 0,1,2,3 - 1,2,3,4, - 2,3,4,5, - 3,4,5,6,.....

for ($x = 0; $x < count($array) - 3; $x++) {
    
    for ($y = $x; $y < $x + 4; $y++) {
    	$temp[] = $array[$y];
    }
    print_r($temp);
    echo "X is $x <br><br>";
    $temp = array();
}*/