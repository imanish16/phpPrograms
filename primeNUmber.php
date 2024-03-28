<?php
function checkIfPrime($num){
    // Handle edge case where 1 is not considered prime
    if ($num <= 1) {
        return false;
    }

    // Loop through potential divisors up to the square root of $num
    for ($i = 2; $i * $i <= $num; $i++) {
        // Check if $num is divisible by $i
        if ($num % $i == 0) {
            // If $num is divisible by $i, it's not prime
            return false;
        }
    }

    // If no divisors were found, $num is prime
    return true;
}

$num = 9;
if (checkIfPrime($num)) {
    echo "$num is prime";
} else {
    echo "$num is not prime";
}