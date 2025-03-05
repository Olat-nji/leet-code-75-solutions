<?php

class Solution {

/**
 * @param Integer $k
 * @param Integer $n
 * @return Integer[][]
 */
function combinationSum3($k, $n) {
   $stack = [[1,[],0]];
    $results=[];
   while(!empty($stack)){
    list($start,$comb,$total)=array_pop($stack);

    if(count($comb)==$k && $total==$n){
        $results[]=$comb;
    }

    for($i=$start;$i<10;$i++){
        $new_total=$total+$i;
        if($total>$n || count($comb)>$k) break;
        $stack[]=[$i+1,[...$comb,$i],$new_total];
    }
   }
   return $results;
}
}