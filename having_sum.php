<?php

function halvingSum(int $n)   {
    // $i = 1;
    // $hasilJumlah = 0;
    // while($i < $n) {
    //     $hasil = $n / $i;

    //     $hasilJumlah = $hasilJumlah + floor($hasil);

    //     $i += $i;
    //  }
    // return (int) $hasilJumlah;
    // // $sum = $n;
    // // while($n > 1) {
    // //   $n = floor($n / 2);
    // //   echo "N :". $n .PHP_EOL;
    // //   $sum += $n;
    // //   echo $sum . PHP_EOL; 
    // // }
    
    // // return (int)$sum;
    // $sum = 1;
    // $hasil = 0;
    // while($sum < $n) {
    //     $hasil = $hasil + floor($n / $sum);
    //     $sum += $sum;
    // }
    // return $hasil;
    $sum = $n;
    if($sum == 1) {
        return 1;
    } else {
        return $n + halvingSum(floor($n/2));
    }
    echo $sum;
    
}
echo halvingSum(1);



