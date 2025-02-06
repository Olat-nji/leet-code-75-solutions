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
    function maxDepth($root) {
        if(!$root){
            return 0;
        }
        $visited=[];
        $stack=[[$root,1]];
        $res=0;
        while(count($stack)>0){
            list($node,$depth)=array_pop($stack);

            if($node){
                $res=max($res,$depth);
                $stack[]=[$node->left,$depth+1];
                $stack[]=[$node->right,$depth+1];
            }

        }
        return $res;
    }
}