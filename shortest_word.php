<?php

function findShort($str){
    $arrStr = explode(" ", $str);
    $jumlahKata =strlen($arrStr[0]);
    
    for($i = 0; $i <= sizeof($arrStr) - 1; $i++) {
        if($jumlahKata > strlen($arrStr[$i])) {;
            $jumlahKata = strlen($arrStr[$i]);
        }
    }
    return $jumlahKata;
}

// echo findShort("Ical icl ic");
echo findShort("bitcoin take over the world maybe who knows perhaps");
