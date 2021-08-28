<?php

function remove_exclamation_marks(string $string) : string {
    // return str_replace("!", "", $string);
    $str = "";

    for($i = 0; $i < strlen($string); $i++) {
        if($string[$i] !== "!") {
            $str .= $string[$i];
        }
    }
    return $str;
}

echo remove_exclamation_marks("Hello World!");