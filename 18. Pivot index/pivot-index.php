<?php
class Solution {

/**
 * @param Integer[] $nums
 * @return Integer
 */
function pivotIndex($nums) {
    $pivot=-1;
    $sum=0;
    for($i=0;$i<count($nums);$i++){
        $sum+=$nums[$i];
        $nums[$i]=$sum;
    }
    for($i=0;$i<count($nums);$i++){
        if($sum-$nums[$i]== $nums[$i-1]){
            return $i;
        }
    }
    return $pivot;
}
}