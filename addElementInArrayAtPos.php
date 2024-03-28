<?php

$arr = [1,2,3,8,56];

$pos = 2;

$element = 69;

$newArr = [];
for($i = 0; $i<count($arr); $i++){
    if($i == 2){
        $temp = $arr[$i];
        $newArr[] = $element;
        $newArr[] = $temp;
    }else{
        $newArr[] = $arr[$i];
    }
}
print_r($newArr);