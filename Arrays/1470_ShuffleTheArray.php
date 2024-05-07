<?php 

/*

Given the array nums consisting of 2n elements in the form [x1,x2,...,xn,y1,y2,...,yn].
Return the array in the form [x1,y1,x2,y2,...,xn,yn].

Example 1:
Input: nums = [2,5,1,3,4,7], n = 3
Output: [2,3,5,4,1,7] 
Explanation: Since x1=2, x2=5, x3=1, y1=3, y2=4, y3=7 then the answer is [2,3,5,4,1,7].

Example 2:
Input: nums = [1,2,3,4,4,3,2,1], n = 4
Output: [1,4,2,3,3,2,4,1]

*/

class Solution {
    /**
     * @param Integer[] $nums
     * @param Integer $n
     * @return Integer[]
     */
    function shuffle($nums, $n) {
        $result = [];
        list($part_1, $part_2) = array_chunk($nums, $n);
        for ($x = 0; $x < $n; $x++) {
            $result[] = $part_1[$x];
            $result[] = $part_2[$x];
        }
        return $result;
    }



    /**
    2nd Solution 
    
    function shuffle($nums, $n) {
        $result = [];
        for ($i = 0; $i < $n; $i++) {
            $result[] = $nums[$i];
            $result[] = $nums[$i + $n];
        }
        return $result;
    }
    **/


    /**
    3rd Solution 
    
    function shuffle($nums, $n) {
        $part_1 = array_slice($nums, 0, $n);
        $part_2 = array_slice($nums, $n);
        $result = [];
        foreach ($part_1 as $key => $value) {
            $result[] = $value;
            $result[] = $part_2[$key];
        }
        return $result;
    }
    **/
}
