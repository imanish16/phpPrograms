<?php

$num = 123456;
$num1 = str_split($num);
$len = count($num1);
$new = "";
for ($i=$len - 1 ; $i >= 0; $i--) {
    $new .=$num1[$i];
}
print_r($new);