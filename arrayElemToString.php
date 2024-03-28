<?php 


// Function to get the string 
function get_string ($arr) { 
	
	// Using implode() function to 
	// join without separator 
	echo implode($arr); 
		
	// Using implode() function to 
	// join with separator 
	echo implode(" ", $arr); 
} 

// Given array 
$arr = array('Manish','testing','patience',"\n"); 

// function calling 
$str = get_string ($arr); 
?>