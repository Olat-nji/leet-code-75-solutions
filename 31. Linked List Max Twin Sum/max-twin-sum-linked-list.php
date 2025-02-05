<?php
/**
 * Definition for a singly-linked list.
 * class ListNode {
 *     public $val = 0;
 *     public $next = null;
 *     function __construct($val = 0, $next = null) {
 *         $this->val = $val;
 *         $this->next = $next;
 *     }
 * }
 */
class Solution {

    /**
     * @param ListNode $head
     * @return Integer
     */
    function pairSum($head) {
        
        $array=[];
        
        while($head){
            $array[]=$head->val;
            $head=$head->next;
        }

        $maxSum=0;
        $left=0;
        $right=count($array)-1;
        while($left<$right){
            
                $maxSum=max($array[$left]+$array[$right],$maxSum);
                $left++;
                $right--;
            }

            
        
        return $maxSum;

    }
}