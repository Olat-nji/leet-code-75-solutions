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
     * @param Integer $targetSum
     * @return Integer
     */
    function pathSum($root, $targetSum)
    {
        if (!$root) return 0;
        $prefixSumPaths = [0 => 1];
        $stack = [[$root, 0, $prefixSumPaths]];
        $paths = 0;
        while (!empty($stack)) {
            list($node, $currentSum, $map) = array_pop($stack);

            if (!$node) continue;
            $currentSum += $node->val;

            $paths += $map[$currentSum - $targetSum] ?? 0;
            $map[$currentSum] = ($map[$currentSum] ?? 0) + 1;

            if ($node->left) {
                $stack[] = [$node->left, $currentSum, $map];
            }

            if ($node->right) {
                $stack[] = [$node->right, $currentSum, $map];
            }
        }
        return $paths;
    }
}
