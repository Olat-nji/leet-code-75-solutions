<?php
class Solution {

/**
 * @param String[][] $equations
 * @param Float[] $values
 * @param String[][] $queries
 * @return Float[]
 */
function calcEquation($equations, $values, $queries) {
    
    $graph=[];
    foreach($equations as $key => [$A,$B]){
        $graph[$A][$B]=$values[$key];
        $graph[$B][$A]=1/$values[$key];
    }

    
    $result=[];
    foreach($queries as $key => [$start,$end]){
        $result[$key]=$this->transverse($start,$end,$graph);
    }
    return $result;
}

function transverse($start,$end,&$graph){
        $queue=[[$start,1]];
        $visited=[];
        if(!isset($graph[$start]) || !isset($graph[$end])) return -1.0;
        if($start==$end) return 1.0;
        
        while(!empty($queue)){
            list($current,$value)=array_shift($queue);
            if($current==$end) return $value;
            
            $visited[$current]=true;
            foreach($graph[$current] as $neighbor => $equal){
                if(!$visited[$neighbor]){
                    $queue[]=[$neighbor,$equal*$value];
                }
            }
            
        }
        return -1.0;
    }
}