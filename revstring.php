<?php

echo "<h1>Here I will be reversing the string without strrev</h1>";


function revstr($str){
    $strlen = strlen($str);
    $a = '';
    for($i=$strlen; $i >= 0; $i--){
        $a .= $str[$i]; 
    }
    echo $a;
}

$str = 'Manish';
revstr($str);



Full join 
right join
left join
inner join 