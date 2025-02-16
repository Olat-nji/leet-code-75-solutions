<?php
class Solution {

/**
 * @param Integer[][] $rooms
 * @return Boolean
 */
function canVisitAllRooms($rooms) {
    $keys =[0];
    $visited = []; 
    $visited[0]=true;
    while(!empty($keys)){
        $key=array_pop($keys);

            foreach($rooms[$key] as $value){
                if(!isset($visited[$value])){
                    $keys[]=$value;
                    $visited[$value]=true;
                }
            }
        
    }
  
    return count($visited)==count($rooms);
}
}