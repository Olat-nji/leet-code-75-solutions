<?php

class Solution {

/**
 * @param String[][] $maze
 * @param Integer[] $entrance
 * @return Integer
 */
function nearestExit($maze, $entrance) {
    list($m,$n)=[count($maze),count($maze[0])];
    $queue=[[...$entrance,0]];
    $directions = [[-1,0],[1,0],[0,-1],[0,1]];
    $maze[$entrance[0]][$entrance[1]]="+";
    
        while(!empty($queue)){
            list($row,$column,$steps)=array_shift($queue);
            
            foreach($directions as [$ar,$ac]){
                
                list($nr,$nc)=[$row+$ar,$column+$ac];
                if($nr>=0 && $nr < $m && $nc>=0 && $nc < $n && $maze[$nr][$nc]=="."){
                    

                    if($nr==0 || $nr==$m-1 || $nc==0 || $nc==$n-1){
                        return $steps+1;
                    }

                    $maze[$nr][$nc]="+";
                    $queue[]=[$nr,$nc,$steps+1];
                }
            }
        }
        return -1;
}
}