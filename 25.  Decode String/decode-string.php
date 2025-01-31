<?php

class Solution {

/**
 * @param String $s
 * @return String
 */
function decodeString($s) {
    $stack=[];
    $currStr="";
    $currNum=0;
    
    for($i=0;$i<strlen($s);$i++){
        if(ctype_digit($s[$i])){
            $currNum=$currNum*10+intval($s[$i]);
        }elseif($s[$i]=='['){
           array_push($stack,[$currStr,$currNum]);
           $currStr="";
           $currNum=0;
            
        }elseif($s[$i]==']'){
           list($lastStr,$num)=array_pop($stack);
           $currStr=$lastStr.str_repeat($currStr,$num);
            
        }else{
            
            $currStr.=$s[$i];
            
        }
    }
    
    return $currStr;
    
}


}