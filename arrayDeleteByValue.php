<?php

$arr = [4,8,7,5,99,42];

$key = array_search(0, $arr);
if($key !== false){
    unset($arr[$key]);
}


$number= 99;
$p = array_map(function($item) use ($number) {
    if($number !== $item && $item != ''){
        return $item;
    }
},$arr);
$p = array_filter($p);
// print_r($p);

$arr3 = ['Manish',8,79,45,35];

$arr_n = [8,79];

$diff = array_diff($arr3, $arr_n);
// $diff = array_values($diff);
print_r($diff);