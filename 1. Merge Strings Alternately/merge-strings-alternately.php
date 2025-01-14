
<?php
class Solution {

 /**
 * Merge two strings alternately by alternating their characters.
 *
 * If one string is longer than the other, the remaining characters
 * of the longer string will be appended to the result.
 *
 * @param string $word1 The first string to merge.
 * @param string $word2 The second string to merge.
 *
 * @return string The merged string with characters alternated between $word1 and $word2.
 */

function mergeAlternately($word1, $word2) {
    // Convert the strings into arrays of characters
    $word1 = str_split($word1);
    $word2 = str_split($word2);

    // Initialize the result string
    $result = '';

    // Iterate through the maximum length of the two strings
    for ($i = 0; $i < max(count($word1), count($word2)); $i++) {
        // Add character from $word1 if it exists at the current index
        if (isset($word1[$i])) {
            $result .= $word1[$i];
        }

        // Add character from $word2 if it exists at the current index
        if (isset($word2[$i])) {
            $result .= $word2[$i];
        }
    }

    // Return the merged result
    return $result;
}

}