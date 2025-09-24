<?php
    # VARIABLES 
    $a = 10;
    $b = 5;

    # ARITHMETIC OPERATORS
    $sum = $a + $b;
    $subtract = $a - $b;
    $multiply = $a * $b;
    $divide = $a / $b;
    $modulo = $a % $b;

    echo "ADDITION: " . $sum . "<br>";
    echo "SUBTRACTION: " . $subtract . "<br>";
    echo "MULTIPLICATION: " . $multiply . "<br>";
    echo "DIVISION: " . $divide . "<br>";
    echo "MODULO: " . $modulo . "<br><br>";

    # COMPARISON OPERATORS
    echo "a == b : " . ($a == $b) . "<br>";
    echo "a != b : " . ($a != $b) . "<br>";
    echo "a > b  : " . ($a > $b) . "<br>";
    echo "a < b  : " . ($a < $b) . "<br>";
    echo "a >= b : " . ($a >= $b) . "<br>";
    echo "a <= b : " . ($a <= $b) . "<br><br>";

    # LOGICAL OPERATORS
    echo "(a > 5 && b < 10) : " . (($a > 5 && $b < 10)) . "<br>";
    echo "(a > 5 || b > 10) : " . (($a > 5 || $b > 10)) . "<br>";
    echo "!(a == b) : " . (!($a == $b)) . "<br>";
?>
