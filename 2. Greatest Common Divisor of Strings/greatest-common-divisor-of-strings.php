<?php


class Solution {

    /**
     * Calculate the greatest common divisor (GCD) of two integers using the Euclidean algorithm.
     *
     * @param Int $a First integer
     * @param Int $b Second integer
     * @return Int The greatest common divisor of $a and $b
     */
    function gcd($a, $b) {
        // Continue the loop until $b becomes 0
        while ($b != 0) {
            $temp = $b;  // Store the current value of $b
            $b = $a % $b;  // Update $b to be the remainder of $a divided by $b
            $a = $temp;  // Update $a to be the previous value of $b
        }
        return $a;  // Return the final value of $a as the GCD
    }


    /**
     * Find the greatest common divisor of two strings.
     *
     * @param String $str1 The first string
     * @param String $str2 The second string
     * @return String The largest string that divides both $str1 and $str2, or an empty string if none exists
     */
    function gcdOfStrings($str1, $str2) {
        // Check if the concatenation of the strings in reverse order is equal
        if ($str1 . $str2 !== $str2 . $str1) {
            return "";  // If not, return an empty string
        }

        // Calculate the GCD of the lengths of the two strings
        $gcdLength = $this->gcd(strlen($str1), strlen($str2));

        // Return the substring of $str1 from the beginning with a length of $gcdLength
        return substr($str1, 0, $gcdLength);
    }
}
