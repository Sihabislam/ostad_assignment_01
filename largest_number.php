<?php
// Given 3 numbers.
$num1 = 4;
$num2 = 5;
$num3 = 6;

// Find the largest number.
if ($num1 > $num2 && $num1 > $num3) {
    echo "The largest number" . $num1;
} elseif ($num2 > $num1 && $num2 > $num3) {
    echo "The largest number" . $num2;
} else {
    echo "The largest number" . $num3;
}

// Output:
// The largest number 6


?>