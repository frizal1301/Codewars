<?php
// function no_space(string $s): string {
//   $str = explode(' ',$s);

//   $str = implode($str);

//   return $str;
// }
function no_space(string $s): string {
    $str = "";
    // for($i = 0; $i < strlen($s); $i++) {
    //     if($s[$i] !== " ") {
    //         $str[$i] = $s[$i];  
    //     } else {
    //         $str[$i] = "";
    //     }
    // }
    for($i = 0; $i < strlen($s); $i++) {
        if($s[$i] !== " ") {
            $str = $str . $s[$i];
        }
    }
    return $str;
  }

var_dump(no_space("Fahru Rizal"));