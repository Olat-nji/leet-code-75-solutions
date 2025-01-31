<?php

class RecentCounter {
    public $queue = [];
    /**
     */
    function __construct() {
        
    }
  
    /**
     * @param Integer $t
     * @return Integer
     */
    function ping($t) {
        array_push($this->queue,$t);
        while($this->queue[0] < $t-3000){
           array_shift($this->queue);
        }
        return count($this->queue);
        
    }
}

/**
 * Your RecentCounter object will be instantiated and called as such:
 * $obj = RecentCounter();
 * $ret_1 = $obj->ping($t);
 */