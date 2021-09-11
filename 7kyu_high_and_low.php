<?php

function highAndLow($numbers)
{
    $arrNumbers = explode(" ", $numbers);
    $dataTertinggi = (int) $arrNumbers[0];
    $dataTerendah = (int) $arrNumbers[0];
    for($i = 1; $i < sizeof($arrNumbers); $i++) {
        if($dataTertinggi < (int) $arrNumbers[$i]) {
            $dataTertinggi = $arrNumbers[$i];
        }

        if($dataTerendah > (int) $arrNumbers[$i]) {
            $dataTerendah = $arrNumbers[$i];
        }
    }
    return $dataTertinggi . $dataTerendah;
}

echo highAndLow("8 3 -5 42 -1 0 0 -9 4 7 4 -4");