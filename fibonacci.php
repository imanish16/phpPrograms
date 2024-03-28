<?php

function fibonacci() {
    $num1 = 0;
    $num2 = 1;
    $fibonacciSequence = [$num1, $num2]; // Initialize with the first two numbers

    for ($i = 2; $i < 15; $i++) { // Start from index 2 to generate the next 13 numbers
        $num3 = $num1 + $num2;
        $fibonacciSequence[] = $num3; // Store the new number in the sequence
        $num1 = $num2; // Update $num1 to the value of $num2
        $num2 = $num3; // Update $num2 to the value of $num3
    }

    // Output the Fibonacci sequence
    print_r($fibonacciSequence);
}

fibonacci();