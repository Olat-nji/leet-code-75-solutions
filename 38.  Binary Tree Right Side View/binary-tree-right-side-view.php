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
class Solution
{

    /**
     * @param TreeNode $root
     * @return Integer[]
     */
    function rightSideView($root)
    {
        $result = [];
        $queue = [[$root, 0]];
        while (!empty($queue)) {
            list($node, $level) = array_shift($queue);

            $result[$level] = $node->val;

            $level++;
            if ($node->left) {
                $queue[] = [$node->left, $level];
            }
            if ($node->right) {
                $queue[] = [$node->right, $level];
            }
        }

        return $result;
    }
}
