<?php

$arr = [1,54,98,"Manish",8] ;
$arr2 = [1546,542,944,"Sagar",54] ;
// $arr2 = [2,8,"Sagar"];

$merge = array_merge($arr, $arr2);
print_r($merge);
$merge = array_combine($arr, $arr2);