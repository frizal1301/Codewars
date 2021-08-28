<?php

    function get_average(array $a) : int {
        $number = 0;
        for($i = 0; $i < sizeof($a); $i++) {
            $number += $a[$i];
        }
        return round($number / sizeof($a));
    }

    echo get_average([3,3,3,3,3,3,4,4,4,4,4,4,4]);