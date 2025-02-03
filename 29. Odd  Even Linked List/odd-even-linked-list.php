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
     * @return ListNode
     */
    function oddEvenList($head) {
        if(!$head || !$head->next){
            return $head;
        }
        
        $odd=$head;
        $even=$head->next;
        $first_even=$even;
        while($even && $even->next){
            $odd->next=$even->next;
            $odd=$odd->next;
            $even->next=$odd->next;
            $even=$even->next;
        }
            $odd->next=$first_even;
            return $head;
        }
        
    }
