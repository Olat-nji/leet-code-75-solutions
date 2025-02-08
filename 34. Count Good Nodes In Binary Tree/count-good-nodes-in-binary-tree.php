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
    function goodNodes($root) {
        
      

        $good_nodes=0;
        $stack=[[$root,$root->val]];
        
     while(!empty($stack)){
        list($node,$largest_val)=array_pop($stack);
        if($node->val>=$largest_val){
            $good_nodes++;
        }
        $largest_val=max($largest_val,$node->val);
        if($node->left){
            $stack[]=[$node->left,$largest_val];
        }
        if($node->right){
            $stack[]=[$node->right,$largest_val];
        }
            
        
     }   

     return $good_nodes;
    }
}