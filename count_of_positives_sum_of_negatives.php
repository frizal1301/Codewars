<?php

function countPositivesSumNegatives($input) : array{
    $arrayNegatif = [];
    $arrayPositif = [];

    if($input == [] || $input == null) {
        return [];
    } else {
        // mengecek apakah minus atau tidak
        for($i = 0; $i < sizeof($input); $i++) {
            if($input[$i] < 0) {
                $arrayNegatif[] = $input[$i];
            } else if ($input[$i] > 0)  {
                $arrayPositif[] = $input[$i];  
            }
        }

        return [sizeof($arrayPositif), array_sum($arrayNegatif)];
    }
}
var_dump(countPositivesSumNegatives(null));
var_dump(countPositivesSumNegatives([]));
var_dump(countPositivesSumNegatives([1,2,3,4,5,6,7,8,9,10,-11, -12, -13, -14, -15]));
var_dump(countPositivesSumNegatives([0, 2, 3, 0, 5, 6, 7, 8, 9, 10, -11, -12, -13, -14]));