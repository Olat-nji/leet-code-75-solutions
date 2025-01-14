<?php

class Solution {

    /**
     * Determines if `n` flowers can be planted in the given flowerbed.
     *
     * This function iterates over the flowerbed and tries to plant flowers
     * in the empty plots while ensuring no two adjacent flowers are planted.
     * It returns `true` if it is possible to plant `n` flowers without
     * violating the rule, otherwise `false`.
     *
     * @param Int[] $flowerbed An array representing the flowerbed where 0 means empty and 1 means planted.
     * @param Int $n The number of flowers to plant.
     * @return Boolean Returns `true` if `n` flowers can be planted, `false` otherwise.
     */
    function canPlaceFlowers($flowerbed, $n) {
        
        // Count the number of plots in the flowerbed
        $flowerbed_count = count($flowerbed);
        
        // Iterate over each plot in the flowerbed
        for ($i = 0; $i < $flowerbed_count; $i++) {
            
            // Check if the current plot is empty (0)
            if ($flowerbed[$i] == 0) {
                
                // Check if the previous plot is empty or out of bounds (i === 0)
                $prev = ($i === 0) || ($flowerbed[$i - 1] === 0);
                
                // Check if the next plot is empty or out of bounds (i === flowerbed_count - 1)
                $next = ($i === $flowerbed_count - 1) || ($flowerbed[$i + 1] === 0);
                
                // If both previous and next plots are empty or out of bounds, plant a flower
                if ($prev && $next) {
                    $flowerbed[$i] = 1;  // Plant a flower in the current plot
                    $n--;  // Decrement the number of flowers left to plant
                    
                    // If no more flowers need to be planted, return true
                    if ($n == 0) {
                        return true;
                    }
                }
            }
        }
        
        // Return true if all flowers are planted, otherwise false
        return $n <= 0;
    }
}
