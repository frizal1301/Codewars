<?php
function remove_char(string $s): string {
  // Write your code here
  $str = "";
  $lengthString = strlen($s) - 1;
  for($i = 0; $i < strlen($s); $i++) {
    if($i != 0 && $i != $lengthString) {
        $str = $str . $s[$i];
    }
  }  
  return $str;
}

echo remove_char("Makan");