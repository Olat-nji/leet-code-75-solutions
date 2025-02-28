<?php
/** 
 * The API guess is defined in the parent class.
 * @param  num   your guess
 * @return 	     -1 if num is higher than the picked number
 *			      1 if num is lower than the picked number
 *               otherwise return 0
 * public function guess($num){}
 */

 class Solution extends GuessGame {
    /**
     * @param  Integer  $n
     * @return Integer
     */
    function guessNumber($n) {
        $left=1;
        $right=$n;
     while($left<=$right){
        $mid=floor(($left+$right)/2);
        $guess=$this->guess($mid);
        if($guess==0){
            return $mid;
        }

        if($guess==-1){
            $right=$mid-1;
        }
        if($guess==1){
            $left=$mid+1;
        }
     }   
     
    }
}