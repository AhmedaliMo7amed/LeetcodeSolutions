<?php 

class Solution {
    /**
     * @param Integer[] $nums
     * @return Integer[][]
     */
    function threeSum($nums) {
        $result = [];
        
        // Sort array
        sort($nums);
        
        for ($i = 0; $i < count($nums) - 2; $i++) {
            
            // Skip duplicates 1st element
            if ($i > 0 && $nums[$i] == $nums[$i - 1]) {
                continue;
            }
            
            // init 2 cursors
            $cursorLeft = $i + 1;
            $cursorRight = count($nums) - 1;
            
            while ($cursorLeft < $cursorRight) {
                $sum = $nums[$i] + $nums[$cursorLeft] + $nums[$cursorRight];
                
                // valid sum
                if ($sum == 0) {
                    $result[] = [$nums[$i], $nums[$cursorLeft], $nums[$cursorRight]];
                    
                    // Skip duplicates => 2nd
                    while ($cursorLeft < $cursorRight && $nums[$cursorLeft] == $nums[$cursorLeft + 1]) {
                        $cursorLeft++;
                    }
                    // Skip duplicates => 3rd
                    while ($cursorLeft < $cursorRight && $nums[$cursorRight] == $nums[$cursorRight - 1]) {
                        $cursorRight--;
                    }
                    
                    // move cursors
                    $cursorLeft++;
                    $cursorRight--;
                } 
                // Sum < 0 , search about large num
                elseif ($sum < 0) {
                    $cursorLeft++; 
                } 
                // Sum > 0 , search about small num
                else {
                    $cursorRight--;
                }
            }
        }
        return $result;
    }
}

?>
