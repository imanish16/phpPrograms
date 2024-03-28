<?php


function table($num,$upto){
for($i=1;$i<=$upto;$i++){
    echo $num." * ".$i.' = '. $num * $i . PHP_EOL;
}
}
$num = rand(2,80);
$upto = 20;
table($num,$upto);