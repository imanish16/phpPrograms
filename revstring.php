<?php

function revstr($str){
    $strlen = strlen($str);
    $a = '';
    for($i=$strlen - 1; $i >= 0; $i--){
        $a .= $str[$i]; 
    }
    echo $a;
}

$str = 'Manish';
revstr($str);