<?php

function armstrong($num){
    $num2 = str_split($num);
    // $num = implode(" ", $num);
    // print_r($num2);
    $cnt = count($num2);
    $new = 0;
    for ($i = 0; $i < $cnt; $i++){
        $new += pow($num2[$i],$cnt);
    }
    if($num == $new){
        echo $num." is Armstrong";
    }else{
        echo $num." is Not Armstrong";
    }
}

$num = rand(100,999);
armstrong($num);