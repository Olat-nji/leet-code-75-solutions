<?php

class Solution {

/**
 * @param Integer[] $cost
 * @return Integer
 */
function minCostClimbingStairs($cost) {
    $costsCount=count($cost);
    $prev1=0;
    $prev2=0;
    for($i=2;$i<=$costsCount;$i++){
        $current=min($prev2+$cost[$i-2],$prev1+$cost[$i-1]);
        $prev2=$prev1;
        $prev1=$current;
    }

    return $prev1;
    
    return $minCost;
    
}
}