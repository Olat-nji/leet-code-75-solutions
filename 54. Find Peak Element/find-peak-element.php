<?php
class Solution {

/**
 * @param Integer[] $nums
 * @return Integer
 */
function findPeakElement($nums) {
    $count=count($nums)-1;
    $left=0;
    $right=$count;
  while($left<=$right){
    $mid = ($left+$right)>>1;
    if($mid==0 && $nums[$mid]>$nums[$mid+1]){
        return $mid;
    }elseif($mid==$count && $nums[$mid]>$nums[$mid-1]){
        return $mid;
    }elseif($nums[$mid]>$nums[$mid+1] && $nums[$mid] > $nums[$mid-1]){
        return $mid;
    }elseif($nums[$mid]<$nums[$mid+1]){
        $left=$mid+1;
    }else{
        $right=$mid-1;
    }
  }
}
}