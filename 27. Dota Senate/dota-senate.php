<?php

class Solution {

/**
 * @param String $senate
 * @return String
 */
function predictPartyVictory($senate) {
    $queueR=new SplQueue();
    $queueD=new SplQueue();
    $count_senators=strlen($senate);

    for($i=0;$i<$count_senators;$i++){
        if($senate[$i]=='R'){
            $queueR->enqueue($i);
        }else{
            $queueD->enqueue($i);
        }
    }

    while(!$queueR->isEmpty() && !$queueD->isEmpty()){
       $rIndex= $queueR->dequeue();
       $dIndex= $queueD->dequeue();
        if($rIndex<$dIndex){
            $queueR->enqueue($rIndex+$count_senators);
            
        }else{
            $queueD->enqueue($dIndex+$count_senators);
        }
    }
        
    return $queueR->isEmpty()?'Dire':'Radiant';
}
}