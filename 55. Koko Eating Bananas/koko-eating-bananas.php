<?php

class Solution {

/**
 * @param Integer[] $piles
 * @param Integer $h
 * @return Integer
 */
function minEatingSpeed($piles, $h) {
  $minSpeed=1;
  $maxSpeed=max($piles);

    while($minSpeed<$maxSpeed){
        $mid=$minSpeed+$maxSpeed >> 1;
        
        if($this->canEatInTime($piles,$mid,$h)){
            $maxSpeed = $mid;
        }else{
            $minSpeed = $mid + 1;
        }
               
    }
    return $minSpeed;
}

function canEatInTime($piles,$speed,$h){
    $hoursSpent=0;
   
    foreach($piles as $pile){
        $hoursSpent+=ceil($pile / $speed);
        if($hoursSpent>$h){
            return false;
        }
    }
    return true;
    
}


}