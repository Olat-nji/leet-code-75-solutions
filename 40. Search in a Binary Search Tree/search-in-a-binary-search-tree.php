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
     * @param Integer $val
     * @return TreeNode
     */
    function searchBST($root, $val) {
        $stack=[$root];
        while(!empty($stack)){
            $node=array_pop($stack);
            if(!$node){
                return null;
            }
            if($val<$node->val){
                $stack[]=$node->left;
            }elseif($val>$node->val){
                $stack[]=$node->right;
            }else{
                return $node;
            }
        }

        return null;
    }
}