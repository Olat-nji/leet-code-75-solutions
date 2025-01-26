<?php
class Solution
{

    /**
     * @param String $word1
     * @param String $word2
     * @return Boolean
     */
    function closeStrings($word1, $word2)
    {

        $word1 = str_split($word1);
        $word2 = str_split($word2);
        if (
            count(array_diff($word1, $word2)) > 0 ||
            count(array_diff($word2, $word1)) > 0
        ) {
            return false;
        }
        $freq1 = array_count_values($word1);
        $freq2 = array_count_values($word2);

        sort($freq1);
        sort($freq2);


        return $freq1 == $freq2;
    }
}
