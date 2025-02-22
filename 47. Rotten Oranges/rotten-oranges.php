<?php
class Solution {

/**
 * @param Integer[][] $grid
 * @return Integer
 */
function orangesRotting($grid) {
    $directions=[[1,0],[-1,0],[0,1],[0,-1]];
    $queue=[];
    $m=count($grid);
    $n=count($grid[0]);
    for($i=0;$i<$m;$i++){
        for($j=0;$j<$n;$j++){
            if($grid[$i][$j]==2){
                $queue[]=[$i,$j,0];
            }elseif($grid[$i][$j]==1){
                $fresh++;
            }
        }
    }
    if($fresh==0 ) return 0;

    while(!empty($queue)){
        list($row,$column,$minutes)=array_shift($queue);
        
            foreach($directions as [$dr,$dc]){
                $nr=$row+$dr;
                $nc=$column+$dc;
                if($nr>=0 && $nr<$m && $nc>=0 && $nc<$n && $grid[$nr][$nc]==1){
                    $grid[$nr][$nc]=2;
                    $queue[]=[$nr,$nc,$minutes+1];
                    $fresh--;
                    
                }
            }
        
        
        
    }
    if($fresh==0) return $minutes;
    
    return -1;
    
}
}