<?php

function custSort() {
    $numbers = array(40, 61, 2, 22, 13);    
    $cnt = count($numbers);
    
    // Bubble sort algorithm
    for ($i = 0; $i < $cnt - 1; $i++) {
        for ($j = 0; $j < $cnt - $i - 1; $j++) {
            if ($numbers[$j] > $numbers[$j + 1]) {
                // Swap the elements if they are in the wrong order
                $temp = $numbers[$j];
                $numbers[$j] = $numbers[$j + 1];
                $numbers[$j + 1] = $temp;
            }
        }
    }

    print_r($numbers);
}

custSort();


echo "<br>";
    $numbers2 = array(40, 61, 2, 22, 13);
    sort($numbers2); 
    print_r($numbers2);