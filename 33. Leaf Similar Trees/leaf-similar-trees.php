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
     * @param TreeNode $root1
     * @param TreeNode $root2
     * @return Boolean
     */
    function leafSimilar($root1, $root2) {
        if(!$root1 && !$root2){
            return false;
        }
        $stack=[$root1];
        $leafs1=[];
        while(count($stack)>0){
            $node=array_pop($stack);
            if($node){
            $stack[]=$node->left;
            $stack[]=$node->right;
            if(!$node->left && !$node->right){
               $leafs1[]=$node->val; 
            }
            }
        }

        $stack=[$root2];
        $leafs2=[];
        while(count($stack)>0){
            $node=array_pop($stack);
            if($node){
            $stack[]=$node->left;
            $stack[]=$node->right;
            if(!$node->left && !$node->right){
               $leafs2[]=$node->val; 
            }
            }
        }
        return $leafs1==$leafs2;
    }
}