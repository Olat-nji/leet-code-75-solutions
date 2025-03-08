<?php

class Solution {

/**
 * @param Integer[] $nums
 * @return Integer
 */
function rob($nums) {
    $cnums=count($nums);
    
    if($cnums==1) return $nums[0];

    $dp=array_fill(0,$cnums,0);
    $dp[0]=$nums[0];
    $dp[1]=max($nums[0],$nums[1]);

    for($i=2;$i<$cnums;$i++){
        $dp[$i]=max($dp[$i-1],$nums[$i]+$dp[$i-2]);
    }

    return $dp[$cnums-1];
}
}