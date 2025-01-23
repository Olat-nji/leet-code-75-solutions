<?php
class Solution {

/**
 * @param Integer[] $nums
 * @param Integer $k
 * @return Integer
 */
function longestOnes($nums, $k) {
   
   $maxOnes=0;
   $zeroesCount=0;
   $left=0;
   for($right=0;$right<count($nums);$right++){
    if($nums[$right]==0){
        $zeroesCount++;
    }
    if($zeroesCount>$k){
        if($nums[$left]==0){
            $zeroesCount--;
        }
        $left++;
    }

    $maxOnes=max($maxOnes,$right-$left+1);
   }
   return $maxOnes;
}
}