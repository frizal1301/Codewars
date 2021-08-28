<?php
function fixTheMeerkat($arr) {
    $arrayBaru = [];
    for($i = 2; $i >= 0; $i--) {
        $arrayBaru[] = $arr[$i];
    }

    return $arrayBaru;
}
var_dump(fixTheMeerkat(["tail", "body", "head"]));
