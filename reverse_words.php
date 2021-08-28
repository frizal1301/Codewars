<?php

function reverseWords($s) {
    $str = "";

    for($i = strlen($s) - 1; $i >= 0; $i-- ) {
        $str = $str . $s[$i];
    }
    
    return $str; // reverse those words
}

echo reverseWords("hello world!"); // laziR

