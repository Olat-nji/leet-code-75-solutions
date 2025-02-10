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
    function longestZigZag($root) {
        $maxZigZags=0;
        $stack=[[$root,0,0]];
        while(!empty($stack)){
            list($node,$left,$right)=array_pop($stack);
            
            if(!$node){
                continue;
            }
            
            if($node->left){
                $stack[]=[$node->left,$right+1,0];
            }

            if($node->right){
                $stack[]=[$node->right,0,$left+1];
            }
            $maxZigZags=max($maxZigZags,$left,$right);
        }

        return $maxZigZags;
        
    }
}