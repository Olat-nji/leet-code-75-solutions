<?php

class Solution {

    /**
     * Calculates the product of the array except self.
     *
     * @param Integer[] $nums The input array of integers.
     * @return Integer[] The resulting array where each element is the product of all other elements.
     *
     * Algorithm:
     * 1. Compute prefix products: Start with a `prefix` of 1 and iterate from left to right,
     *    storing the cumulative product in the result array.
     * 2. Compute suffix products: Start with a `suffix` of 1 and iterate from right to left,
     *    multiplying the cumulative product with the existing values in the result array.
     *
     * Example:
     * Input: [1, 2, 3, 4]
     * Output: [24, 12, 8, 6]
     *
     * Time Complexity: O(n)
     * Space Complexity: O(1) (excluding the output array)
     */
    
    function productExceptSelf($nums) {
        $n = count($nums);  // Number of elements in the input array
        $result = [];       // Resultant array to store the final products
        
        // Prefix pass: Calculate the product of all elements before each index
        $prefix = 1;
        for ($i = 0; $i < $n; $i++) {
            $result[$i] = $prefix;  // Store the current prefix product
            $prefix *= $nums[$i];   // Update prefix for the next iteration
        }

        // Suffix pass: Multiply by the product of all elements after each index
        $suffix = 1;
        for ($j = $n - 1; $j >= 0; $j--) {
            $result[$j] *= $suffix;  // Multiply by the current suffix product
            $suffix *= $nums[$j];    // Update suffix for the next iteration
        }

        return $result;  // Return the computed result array
    }
}
