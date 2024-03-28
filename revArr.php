<?php
//intialize the php

/**
 * function sortArr() reverse the array
 *
 * @param [type] $arr
 * @return void
 */
function sortArr($arr){
$array = count($arr);//count the array elements
$emp = []; //initialize the empty array
for($i=$array -1; $i>= 0; $i--){// write an for loop startig from the last index till it is decremented to 0 
	array_push($emp,$arr[$i]); //here we push the last element of the array in the new array called emp that we intialized earlier 
}

/**
 * Now in the end we return the reversed array;
 */
print_r($emp);
return $emp;

}

$arr =[5,6,7,8,2];
sortArr($arr);