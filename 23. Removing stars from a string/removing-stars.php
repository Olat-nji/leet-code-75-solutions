<?php
class Solution
{

    /**
     * @param String $s
     * @return String
     */
    function removeStars($s)
    {
        $starsToRemove = 0;
        $newString = '';
        for ($i = strlen($s); $i >= 0; $i--) {
            if ($s[$i] == '*') {
                $starsToRemove++;
            } elseif ($starsToRemove > 0) {

                $starsToRemove--;
            } else {
                $newString = $s[$i] . $newString;
            }
        }
        return $newString;
    }
}
