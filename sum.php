<?php

function sum($num){
    $res = (string)$num;
    $number = str_split($res);
    $res = array_sum($number);
    print_r($res);
}

$num = 12;
sum($num);