<?php

function solution(?array $nums) : array {
  if($nums == null) {
      return [];
  } else {
    for($i = 0; $i < sizeof($nums) - 1; $i++) {        
        for($j = $i+1; $j < sizeof($nums); $j++) {
            if($nums[$i] > $nums[$j]) {
                $temp = $nums[$i];
                $nums[$i] = $nums[$j];
                $nums[$j] = $temp;
            }   
        }
    }
    return $nums; 
    }
}

var_dump(solution([3,2,1]));