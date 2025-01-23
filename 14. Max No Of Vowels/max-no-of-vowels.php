<?php

class Solution {

    /**
     * Finds the maximum number of vowels in any substring of length $k from the given string $s.
     *
     * @param string $s The input string containing only lowercase English letters.
     * @param int $k The length of the substring to evaluate.
     * @return int The maximum number of vowels in any substring of length $k.
     */
    function maxVowels($s, $k) {
        // Initialize the maximum number of vowels found in a substring
        $maxVowels = 0;

        // Define the set of vowels
        $vowels = ['a', 'e', 'i', 'o', 'u'];

        // Count the number of vowels in the first substring of length $k
        $totalVowels = 0;
        for ($i = 0; $i < $k; $i++) {
            if (in_array($s[$i], $vowels)) {
                $totalVowels++;
            }
        }

        // Initialize sliding window pointers
        $i = 1;
        $j = $k;

        // Set the initial max vowels to the vowels counted in the first substring
        $maxVowels = $totalVowels;

        // Slide the window over the string
        while ($j < strlen($s)) {
            // Remove the effect of the character that is sliding out of the window
            if (in_array($s[$i - 1], $vowels)) {
                $totalVowels--;
            }

            // Add the effect of the character that is sliding into the window
            if (in_array($s[$j], $vowels)) {
                $totalVowels++;
            }

            // Update the maximum vowels if the current count is greater
            if ($totalVowels > $maxVowels) {
                $maxVowels = $totalVowels;
            }

            // Move the window forward
            $i++;
            $j++;
        }

        // Return the maximum number of vowels found in any substring of length $k
        return $maxVowels;
    }
}
