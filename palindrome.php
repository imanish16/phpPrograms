<?php

// echo "Palindrome";

// Function to check if number is palindrome

function palindrome($number) {

// echo $number;

$temp = $number;
$stringNumb = (string)$number;

// now we will check if the sterev value is true to orignal 

$rev = strrev($stringNumb);

if($temp == $rev){
    echo "palindrome";
}else{
    echo "not palindrome";
}
}




$orignal = 14541;
palindrome($orignal);