<?php

function getMax($arr){
    $max = $arr[0];
for($i=1; $i<count($arr); $i++){
        if($max< $arr[$i])
        $max = $arr[$i];
}
print_r($max);
}

$arr = [1,2,4,1,58,12,4];
getMax($arr);