<?php 

class Solution {

/**
 * @param String $s
 * @return String
 */
function reverseWords($s) {
    // Trim leading and trailing spaces
    $s = trim($s);

    // Split the string into words, ignoring multiple spaces
    $words = preg_split('/\s+/', $s);

    // Reverse the array of words
    $reversedWords = array_reverse($words);

    // Join the reversed words with a single space
    return implode(' ', $reversedWords);
}
}

