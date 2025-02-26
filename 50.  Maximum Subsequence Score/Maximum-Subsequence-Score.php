<?php

class Solution {

/**
 * @param Integer[] $nums1
 * @param Integer[] $nums2
 * @param Integer $k
 * @return Integer
 */
function maxScore($nums1, $nums2, $k) {
    $pairs=[];
    for($i=0; $i<count($nums1);$i++){
        $pairs[]=[$nums1[$i],$nums2[$i]];
    }
    usort($pairs,function ($a,$b){
        return $b[1]<=>$a[1];
    });

    $heap=new SplMinHeap();
    $n1Sum=0;
    $result=0;
    foreach($pairs as [$n1,$n2]){
        $n1Sum+=$n1;
        $heap->insert($n1);
        if($heap->count()>$k){
            $n1ToRemove = $heap->extract();
            $n1Sum -= $n1ToRemove;
        }
        if($heap->count()==$k){
            $result=max($result,$n1Sum*$n2);
        }
    }
    return $result;
    
}
}