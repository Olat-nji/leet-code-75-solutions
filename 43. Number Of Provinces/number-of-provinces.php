<?php
class Solution {

/**
 * @param Integer[][] $isConnected
 * @return Integer
 */
function findCircleNum($isConnected) {
    $n=count($isConnected);
    $visited=array_fill(0,$n,false);
    $provinces=0;
    for($i=0; $i<$n;$i++){
        if(!$visited[$i]){
            $stack[]=$i;
            while(!empty($stack)){
                $city=array_shift($stack);
                foreach($isConnected[$city] as $neighbor=>$connected){
                    if($connected && !$visited[$neighbor]){
                        $visited[$city]=true;
                        $stack[]=$neighbor;
                    }
                }
                
            }
            $provinces++;
        }
        
    }

    return $provinces;

}
}