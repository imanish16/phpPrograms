<?php

function factorial($num){
    $result = 1;
    for($i = 1; $i <= $num; $i++){
        $result *= $i;
    }
    return $result;
}

$num = 5;
echo "Factorial of $num is " . factorial($num);