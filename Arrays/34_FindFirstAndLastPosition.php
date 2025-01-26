<?php

class Solution {
    function searchRange($nums, $target) {
        // Find first position
        $start = $this->binarySearch($nums, $target, true);

        // Return [-1, -1] if not found
        if ($start == -1) {  
            return [-1, -1];
        }

        // Find last position
        $end = $this->binarySearch($nums, $target, false);
      
        return [$start, $end];
    }

    private function binarySearch($nums, $target, $findFirst) {
        $leftCursor = 0; // Start of search
        $rightCursor = count($nums) - 1; // End of search
        $position = -1; // Default result

        while ($leftCursor <= $rightCursor) {
            $mid = intdiv($leftCursor + $rightCursor, 2); // Midpoint

            if ($nums[$mid] == $target) {
                $position = $mid;

                // Adjust cursor based on search direction
                if ($findFirst) {
                    $rightCursor = $mid - 1; // Move left
                } else {
                    $leftCursor = $mid + 1; // Move right
                }
            } elseif ($nums[$mid] < $target) {
                $leftCursor = $mid + 1; // Move right
            } else {
                $rightCursor = $mid - 1; // Move left
            }
        }

        return $position;
    }
}

?>
