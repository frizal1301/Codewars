<?php
function replace_dots(string $str): string {
    $string = "";
    for($i = 0; $i < strlen($str); $i++) {
        if($str[$i] == ".") {
            $string .= "-";
        } else {
            $string .= $str[$i];
        }
    }
    return (string)$string;
}

echo replace_dots('one.two.three');
           