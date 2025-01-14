<?php

class Solution {

    /**
     * Determines if each kid can have the greatest number of candies after being given extra candies.
     *
     * @param Int[] $candies Array of integers where each element represents the number of candies each kid has.
     * @param Int $extraCandies The number of extra candies available to distribute.
     * @return Boolean[] An array of boolean values where each element indicates whether the corresponding kid
     *                   can have the greatest number of candies among all kids after receiving the extra candies.
     */
    function kidsWithCandies($candies, $extraCandies) {
        // Find the maximum number of candies currently any kid has.
        $maxCandies = max($candies);

        // Initialize the result array.
        $result = [];

        // Iterate through the candies array.
        foreach ($candies as $key => $candy) {
            // Determine if the current kid can have the greatest number of candies after receiving extra candies.
            $result[$key] = ($candy + $extraCandies >= $maxCandies);
        }

        // Return the resulting boolean array.
        return $result;
    }
}
