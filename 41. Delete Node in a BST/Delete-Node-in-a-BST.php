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
     * @param Integer $key
     * @return TreeNode
     */
    function deleteNode($root, $key) {
      if($root==null) return null;
      if($key < $root->val){
        $root->left = $this->deleteNode($root->left,$key);
      }elseif($key > $root->val){
        $root->right = $this->deleteNode($root->right,$key);
      }else{
        if(!$root->left) return $root->right;
        if(!$root->right) return $root->left;
        
        $successor=$this->findMin($root->right);
        $root->val=$successor->val;
        $root->right=$this->deleteNode($root->right,$successor->val);
      }

      return $root;
      }
    

    function findMin($node){
        while($node->left){
            $node=$node->left;
        }
        return $node;
    }
}
