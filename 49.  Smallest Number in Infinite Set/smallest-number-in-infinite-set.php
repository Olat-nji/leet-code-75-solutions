<?php
class SmallestInfiniteSet {
    public $set;
    public $heap;
    public $nextSmallestNumber;
    /**
     */
    function __construct() {
        $this->heap = new SplMinHeap();
        $this->set=[];
        $this->nextSmallestNumber=1;
    }
  
    /**
     * @return Integer
     */
    function popSmallest() {
        if(!$this->heap->isEmpty()){
        $smallest=$this->heap->extract();
        unset($this->set[$smallest]);
        return $smallest;
        }
        return $this->nextSmallestNumber++;
    }
  
    /**
     * @param Integer $num
     * @return NULL
     */
    function addBack($num) {
        if($num<$this->nextSmallestNumber && !isset($this->set[$num])){
        $this->heap->insert($num);
        $this->set[$num]=true;
        }
    }
}

/**
 * Your SmallestInfiniteSet object will be instantiated and called as such:
 * $obj = SmallestInfiniteSet();
 * $ret_1 = $obj->popSmallest();
 * $obj->addBack($num);
 */