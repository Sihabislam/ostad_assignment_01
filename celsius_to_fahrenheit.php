<?php
//given the temperature in celsius
$celsius = 32;

//F = (C x 9/5) + 32 is the formula to convert celsius to fahrenheit

$fahrenheit = ($celsius * 9/5) + 32;

printf("%s degrees Celsius is %.2f degrees Fahrenheit", $celsius, $fahrenheit);

//output: 32 degrees Celsius is 89.60 degrees Fahrenheit.

?>