<?php 

class Solution {

    /**
     * @param Integer[][] $grid
     * @return Integer[][]
     */
    function largestLocal($grid) {
        $maxLocal = [];
        $n = count($grid);

        for ($row = 1; $row < $n - 1; $row++) {
            for ($col = 1; $col < $n - 1; $col++) {


                // before 
                // $submatrix = [
                //     $grid[$row - 1][$col - 1], $grid[$row - 1][$col], $grid[$row - 1][$col + 1],
                //     $grid[$row][$col - 1],     $grid[$row][$col],     $grid[$row][$col + 1],
                //     $grid[$row + 1][$col - 1], $grid[$row + 1][$col], $grid[$row + 1][$col + 1]
                // ];

                // after
                $submatrix = [];
                for ($subRow = -1; $subRow <= 1; $subRow++) {
                    for ($subCol = -1; $subCol <= 1; $subCol++) {
                        $submatrix[] = $grid[$row + $subRow][$col + $subCol];
                    }
                }
                
                $maxLocal[$row - 1][$col - 1] = max($submatrix);
            }
        }
        return $maxLocal;
    }
}
