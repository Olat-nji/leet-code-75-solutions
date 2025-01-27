<?php

class Solution {

    /**
     * @param Integer[][] $grid
     * @return Integer
     */
    function equalPairs($grid) {
        // Initialize count of equal pairs
        $equalPairsCount = 0;

        // Create an empty hashmap to store the occurrence of each row in string form
        $hashMap = [];

        // Get the number of rows and columns in the grid (grid is n x n)
        $n = count($grid);

        // Iterate through each row of the grid
        foreach ($grid as $row) {
            // Convert row into a comma-separated string to use as a key in the hashmap
            $key = implode(',', $row);

            // If the row hasn't been seen before, initialize its count
            if (!isset($hashMap[$key])) {
                $hashMap[$key] = 0;
            }

            // Increment the count for this row
            $hashMap[$key]++;
        }

        // Iterate through each column index
        for ($i = 0; $i < $n; $i++) {
            // Create an array to store the column's values
            $column = [];

            // Populate the column array by iterating through all rows at the current column index
            for ($j = 0; $j < $n; $j++) {
                $column[] = $grid[$j][$i];
            }

            // Convert the column into a string to check if it matches any row in the hashmap
            $column = implode(',', $column);

            // If the column matches any row, add the count of matching rows to the total equalPairsCount
            if (isset($hashMap[$column])) {
                $equalPairsCount += $hashMap[$column];
            }
        }

        // Return the final count of equal pairs
        return $equalPairsCount;
    }
}
