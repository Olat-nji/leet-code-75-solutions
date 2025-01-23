<?php
class Solution {

/**
 * @param Integer[] $nums
 * @return Integer
 */
function longestSubarray($nums) {
    $zeroesCount=0;
    $left=0;
    $maxOnes=0;
    for($right=0;$right<count($nums);$right++){
        if($nums[$right]==0){
        $zeroesCount++;
        }
        if($zeroesCount>1){
            if($nums[$left]==0){
                $zeroesCount--;
            }
            $left++;
        }
        $maxOnes=max($maxOnes,$right-$left);
    }
    return $maxOnes;
}
}