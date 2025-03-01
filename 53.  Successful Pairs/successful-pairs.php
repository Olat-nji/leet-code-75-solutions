<?php

class Solution {

/**
 * @param Integer[] $spells
 * @param Integer[] $potions
 * @param Integer $success
 * @return Integer[]
 */
function successfulPairs($spells, $potions, $success) {
    sort($potions);
    $p_count=count($potions);
    $s_count=count($spells);
    $successful=[];

    foreach($spells as $key=>$spell){  
        $left=0;
        $right=$p_count-1;
       
        
        while($left<=$right){
            $mid=($right+$left) >> 1;
            
            if(($potions[$mid]*$spell)>=$success){
                $right=$mid-1;
            }else{
                $left=$mid+1;
            }
           
        }
        $successful[$key]=$p_count-$left;
    }
    return $successful;
}
}