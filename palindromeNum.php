<?php

function palin($num){
$digit = (string) $num;
$rev = strrev($digit);
if ($rev == $num) {
echo "Palindrome";
}else{
    echo "Not palindrome";
}
}

$num = 1231;
palin($num);