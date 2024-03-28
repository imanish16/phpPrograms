<?php
$arr = [2,8,54,4,54,5,4,582132] ;
array_pop($arr);
// print_r($arr);

  // Declaring associated array
  $ass_arr = ["a"=>"Geeks", "b"=>"For", "c"=>"Geeks"];
 
  // Deleting element associated with key "b"
  array_splice($ass_arr,1,1);
 
  // Printing array after deleting the element
  print_r($ass_arr);
 
  // Declaring indexed array
  $ind_arr = ["Geeks","For","Geeks"];
 
  // Deleting element and index 1
  array_splice($ind_arr,1,1);
 
  // Printing array after deleting the element
  print_r($ind_arr);
?>