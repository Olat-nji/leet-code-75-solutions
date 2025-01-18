<?php

class Solution {

    /**
     * Reverses the order of words in the given string.
     * 
     * A word is defined as a sequence of non-space characters. 
     * Multiple spaces between words are ignored, and the resulting string
     * will have words separated by a single space with no leading or trailing spaces.
     *
     * @param String $s The input string containing words separated by spaces.
     * @return String The string with the words in reverse order.
     */
    function reverseWords($s) {
        // Split the input string into an array of words using spaces as the delimiter
        $words = explode(' ', $s);

        // Initialize an array to store the final reversed words
        $final_words = [];

        // Set the right pointer to the last index of the words array
        $right = count($words) - 1;

        // Traverse the array from the end to the beginning
        while ($right >= 0) {
            // Skip empty elements caused by multiple spaces
            while ($right >= 0 && $words[$right] == '') {
                $right--;
            }

            // Add the valid word to the result array and move the pointer left
            if ($right >= 0) {
                $final_words[] = $words[$right];
                $right--;
            }
        }

        // Join the reversed words with a single space and return the result
        return implode(' ', $final_words);
    }
}
