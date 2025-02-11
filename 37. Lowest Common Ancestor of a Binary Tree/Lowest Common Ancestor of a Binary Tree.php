<?php

/**
 * Definition for a binary tree node.
 * class TreeNode {
 *     public $val = null;
 *     public $left = null;
 *     public $right = null;
 *     function __construct($value) { $this->val = $value; }
 * }
 */

class Solution
{
    /**
     * @param TreeNode $root
     * @param TreeNode $p
     * @param TreeNode $q
     * @return TreeNode
     */
    function lowestCommonAncestor($root, $p, $q)
    {
        $p_parents = [];
        $q_parents = [];
        $stack = [[$root, []]];
        while (!empty($stack)) {
            list($node, $parents) = array_pop($stack);
            $parents[$node->val] = $node;
            if ($node->val == $p->val) {

                $p_parents = $parents;
            }
            if ($node->val == $q->val) {
                $q_parents = $parents;
            }
            if ($node->left) {
                $stack[] = [$node->left, $parents];
            }
            if ($node->right) {
                $stack[] = [$node->right, $parents];
            }
        }

        return end(array_intersect_key($p_parents, $q_parents)) ?? "";
    }
}
