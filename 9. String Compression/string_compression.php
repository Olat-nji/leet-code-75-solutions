<?php

class Solution {

    /**
     * Compresses the given array of characters using the described algorithm.
     * 
     * The function modifies the input array in place to store the compressed string.
     * It also returns the new length of the array after compression.
     * 
     * Algorithm:
     * 1. Iterate through the array while grouping consecutive repeating characters.
     * 2. For each group, write the character and its count (if greater than 1) to the array.
     * 3. Use two pointers:
     *    - `read` pointer to traverse the input array.
     *    - `write` pointer to modify the array in place.
     * 
     * @param String[] $chars Input array of characters to be compressed.
     * @return Integer The new length of the compressed array.
     */
    function compress(&$chars) {
        // Initialize variables
        $read = 0;                // Pointer to read characters from the array
        $write = 0;               // Pointer to write compressed characters to the array
        $chars_count = count($chars); // Total number of characters in the input array

        // Loop through the array to process each group of consecutive characters
        while ($read < $chars_count) {
            $char = $chars[$read]; // Current character being processed
            $count = 0;            // Count of consecutive occurrences of the current character

            // Count the occurrences of the current character
            while ($read < $chars_count && $char == $chars[$read]) {
                $read++;
                $count++;
            }

            // Write the character to the array
            $chars[$write] = $char;
            $write++;

            // If the count is greater than 1, write the count as individual digits
            if ($count > 1) {
                foreach (str_split((string)$count) as $digit) {
                    $chars[$write] = $digit;
                    $write++;
                }
            }
        }

        // Return the new length of the compressed array
        return $write;
    }
}
