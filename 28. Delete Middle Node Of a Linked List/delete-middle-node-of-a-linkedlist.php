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
    function deleteMiddle($head) {
        if($head==null || $head->next===null){
            return null;
        }
        $slow=$head;
        $fast=$head;
        $prev=null;

        while($fast!=null && $fast->next!==null){
            $prev=$slow;
            $slow=$slow->next;
            $fast=$fast->next->next;
        }
        if($prev!=null){
            $prev->next=$slow->next;
        }

        return $head;
    }
}