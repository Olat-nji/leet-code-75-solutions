<?php

class Solution {

    /**
     * Moves all zeroes in the given array to the end while maintaining the relative order
     * of the non-zero elements.
     * 
     * This function modifies the array in place without creating a copy.
     *
     * @param Integer[] $nums The array of integers to be processed.
     * @return NULL This function doesn't return a value as the array is modified in place.
     */
    function moveZeroes(&$nums) {
        $j = 0; // Pointer for the position of the next non-zero element

        // Iterate through the array
        for ($i = 0; $i < count($nums); $i++) {
            // If the current element is not zero
            if ($nums[$i] != 0) {
                // Swap the current element with the element at position $j
                [$nums[$i], $nums[$j]] = [$nums[$j], $nums[$i]];
                
                // Increment the position for the next non-zero element
                $j++;
            }
        }

        // The array $nums is now modified in-place, with all non-zero elements
        // moved to the front and all zeroes moved to the end.
        return $nums;
    }
}

