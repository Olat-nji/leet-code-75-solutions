<?php

/**
 * Class Solution
 *
 * This class contains a method to solve the "Container With Most Water" problem.
 * The problem involves finding two lines in a given array that, along with the x-axis, 
 * form a container that holds the maximum amount of water.
 */
class Solution
{
    /**
     * Finds the maximum area of water a container can store.
     *
     * The function uses a two-pointer approach:
     * - Initialize two pointers at the start and end of the array.
     * - Calculate the area formed between the lines represented by the pointers.
     * - Move the pointer pointing to the smaller line inward, as this is the limiting factor for the area.
     * - Keep track of the maximum area encountered.
     *
     * Time Complexity: O(n), where n is the number of elements in the height array.
     * Space Complexity: O(1), as no additional space is used.
     *
     * @param Integer[] $height The array representing the heights of the vertical lines.
     * @return Integer The maximum area of water the container can store.
     */
    function maxArea($height)
    {
        $max_area = 0; // Variable to store the maximum area
        $i = 0; // Pointer starting from the left
        $j = count($height) - 1; // Pointer starting from the right

        // Loop until the two pointers meet
        while ($i < $j) {
            // Calculate the height and base of the container
            $h = min($height[$i], $height[$j]);
            $b = $j - $i;

            // Update the maximum area
            $max_area = max($max_area, ($h * $b));

            // Move the pointer pointing to the smaller height inward
            if ($height[$i] < $height[$j]) {
                $i++;
            } else {
                $j--;
            }
        }

        return $max_area;
    }
}
