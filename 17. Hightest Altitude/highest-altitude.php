<?php

class Solution {

/**
 * @param Integer[] $gain
 * @return Integer
 */
function largestAltitude($gain) {
    $largestAltitude=0;
    $prefixSum=0;
    for($i=0;$i<count($gain);$i++){
        
        $prefixSum+=$gain[$i];
        $largestAltitude=max($largestAltitude,$prefixSum);
        
    }
    
    return $largestAltitude;
    
}
}