<?php

class Solution {

/**
 * @param Integer $n
 * @return Integer
 */
function tribonacci($n) {
 $t=[0,1,1];
 if(isset($t[$n])){
    return $t[$n];
 }
 $stack=[[3,2]];
 while(!empty($stack)){
    list($pn,$sum)=array_pop($stack);
    $t[$pn]=$sum;
    if($pn==$n){
        return $t[$n];
    }
       
    $stack[]=[$pn+1,$sum-$t[$pn-3]+$sum];
    
 }
}
}