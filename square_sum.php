<?php
// For example, for [1, 2, 2] it should return 9 because 1^2 + 2^2 + 2^2 = 9.
function square_sum($numbers) : int {
    $hasil = 0;
    for($i = 0 ; $i < sizeof($numbers); $i++) {
        $hasil = $hasil + ($numbers[$i] * $numbers[$i]); 
    }    
    return $hasil;
}

echo square_sum([1,2,2]);