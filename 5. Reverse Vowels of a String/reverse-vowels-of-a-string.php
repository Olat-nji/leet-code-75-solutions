<?php

class Solution {

    /**
     * Reverse only the vowels in the given string.
     * 
     * @param String $s The input string to reverse vowels in.
     * @return String The string with vowels reversed.
     */
    function reverseVowels($s) {
        // Convert the string into an array of characters for easier manipulation.
        $chars = str_split($s);

        // Initialize pointers for the left and right ends of the array.
        $left = 0;
        $right = count($chars) - 1;

        // Define an array of vowels (both uppercase and lowercase).
        $vowels = ['a', 'e', 'i', 'o', 'u', 'A', 'E', 'I', 'O', 'U'];

        // Loop until the left pointer is less than the right pointer.
        while ($left < $right) {

            // Move the left pointer to the right until a vowel is found.
            while ($left < $right && !in_array($chars[$left], $vowels)) {
                $left++;
            }

            // Move the right pointer to the left until a vowel is found.
            while ($left < $right && !in_array($chars[$right], $vowels)) {
                $right--;
            }

            // If the left pointer is still less than the right, swap the vowels.
            if ($left < $right) {
                // Swap the characters at the left and right pointers.
                [$chars[$left], $chars[$right]] = [$chars[$right], $chars[$left]];
                
                // Move the pointers towards each other.
                $left++;
                $right--;
            }
        }

        // Convert the character array back to a string and return it.
        return implode('', $chars);
    }
}
