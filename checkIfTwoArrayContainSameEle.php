<?php


function checkIfTwoArrayHasSameElements($arr,$arr2){

     sort($arr);
     sort($arr2);
     if($arr == $arr2){
         print_r('here');
     }
}


$arr = [1,8,1,51,78] ;
$arr2 = [1,8,1,51,78] ;

checkIfTwoArrayHasSameElements($arr, $arr2); 