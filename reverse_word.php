<?php
function factorial(int $n): int {
    if($n < 0 || $n > 12) {
      throw new RangeException();
    } else {
        $hasil = 1;
        for($i = 1; $i <= $n; $i++) {
            // 1 * 2 * 3 * 4
            $hasil = $hasil * $i; 
        }
        return $hasil;
    }
}

  echo factorial(0);