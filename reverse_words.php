<?php

function reverseWords($s) {
    $str = explode(" ", $s);
    $data = [];
    for($i = 0; $i < sizeof($str); $i++) {
        $data[] = strrev($str[$i]);
    }
    $str = implode(" ", $data);
    return $str;
}

echo reverseWords("hello world"); // laziR

