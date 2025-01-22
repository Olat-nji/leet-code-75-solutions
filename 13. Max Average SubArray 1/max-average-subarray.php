<?php

class Solution {

    /**
     * Finds the maximum average value of a contiguous subarray of length k.
     *
     * @param Integer[] $nums The input array of integers.
     * @param Integer $k The length of the contiguous subarray.
     * @return Float The maximum average value, rounded to a precision acceptable by the problem constraints.
     */
    function findMaxAverage($nums, $k) {
        // Initialize the sum of the first 'k' elements
        $total = 0;
        for ($i = 0; $i < $k; $i++) {
            $total += $nums[$i];
        }

        // Calculate the initial maximum average using the first subarray
        $max_avg = $total / $k;

        // Use two pointers: 'i' for the start of the current subarray and 'j' for the end
        $i = 1;
        $j = $k;

        // Slide the window over the array
        while ($j < count($nums)) {
            // Update the total by removing the element at the start of the previous subarray
            // and adding the element at the end of the current subarray
            $total = $total - $nums[$i - 1] + $nums[$j];

            // Calculate the average for the current subarray
            $avg = $total / $k;

            // Update the maximum average if the current average is greater
            if ($avg > $max_avg) {
                $max_avg = $avg;
            }

            // Move the pointers to slide the window
            $i++;
            $j++;
        }

        // Return the maximum average found
        return $max_avg;
    }
}
