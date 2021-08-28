<?php

function sum_mix(array $a) : int {
  $number = 0;

  for($i = 0; $i < sizeof($a); $i++) {
      $number += (int) $a[$i];
  }

  return $number;
}

echo sum_mix([9, '7', '8', 1]);