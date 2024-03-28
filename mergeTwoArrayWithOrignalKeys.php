<?php 
$array1 = array( 
         1 =>'Geeks', 
         2 =>'For', 
         3 =>'Geeks',
          4 => 'Reewr', 
          ); 
  
 $array2 = array( 
          4 => 'A', 
          5 => 'Computer', 
          6 => 'Science', 
          7 => 'Portal', 
          8 => 'For', 
          9 => 'Geeks'
         ); 
  
  $merged_array = $array1 + $array2; 
//   $merged_array = array_replace($array1,$array2); 
  var_dump ($merged_array); 
?>