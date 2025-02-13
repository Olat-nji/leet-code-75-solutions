<?php
/**
 * Definition for a binary tree node.
 * class TreeNode {
 *     public $val = null;
 *     public $left = null;
 *     public $right = null;
 *     function __construct($val = 0, $left = null, $right = null) {
 *         $this->val = $val;
 *         $this->left = $left;
 *         $this->right = $right;
 *     }
 * }
 */
class Solution {

    /**
     * @param TreeNode $root
     * @return Integer
     */
    function maxLevelSum($root) {

        $maxSum=PHP_INT_MIN;
        $maxSumLevel=0;
        $level=1;
     $queue=[$root];
     while(!empty($queue)){
        $size = count($queue);
        $levelSum=0;
        for($i=0;$i<$size;$i++){
            $node=array_shift($queue);
            $levelSum+=$node->val;
            if($node->left) $queue[]=$node->left;
            if($node->right) $queue[]=$node->right;
        }
        //Check if at the end level
         if( $levelSum>$maxSum){
            $maxSum=$levelSum;
            $maxSumLevel=$level;
        }
        $level++;
     }
     
     return $maxSumLevel;
     
    }
}