<?php

class Solution {

    /**
     * Checks if there exists a triplet of indices (i, j, k) such that:
     * i < j < k and nums[i] < nums[j] < nums[k].
     *
     * This solution uses a greedy approach to track the smallest and
     * second smallest numbers while traversing the array.
     *
     * Time Complexity: O(n) - The array is traversed once.
     * Space Complexity: O(1) - Only two variables are used.
     *
     * @param Integer[] $nums The input array of integers.
     * @return Boolean True if such a triplet exists, false otherwise.
     */
    function increasingTriplet($nums) {
        // Initialize the first and second smallest numbers as the maximum possible integer values
        $first = PHP_INT_MAX;
        $second = PHP_INT_MAX;

        // Traverse the array
        foreach ($nums as $num) {
            // If the current number is smaller than or equal to 'first',
            // update 'first' to the current number
            if ($num <= $first) {
                $first = $num;
            }
            // Otherwise, if the current number is smaller than or equal to 'second',
            // update 'second' to the current number
            elseif ($num <= $second) {
                $second = $num;
            }
            // If the current number is greater than both 'first' and 'second',
            // it means we found a triplet, so return true
            else {
                return true;
            }
        }

        // If the loop completes without finding a valid triplet, return false
        return false;
    }
}
