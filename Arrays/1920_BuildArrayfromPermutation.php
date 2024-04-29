<?php 

class Solution {
    /**
    Given a zero-based permutation nums (0-indexed), build an array ans of the same length where ans[i] = nums[nums[i]] 
    for each 0 <= i < nums.length and return it.
    A zero-based permutation nums is an array of distinct integers from 0 to nums.length - 1 (inclusive).
    **/ 

    /**
     * @param Integer[] $nums
     * @return Integer[]
     */
    function buildArray($nums) {
        $itemsCount = count($nums);
        $result = array_fill(0, $itemsCount, 0);
        foreach ($nums as $i => $num) {
            $result[$i] = $nums[$num];
        }
        return $result;
    }
    
    // another solution 
    // function buildArray($nums) {
    //     $result = [];
    //     foreach($nums as $value){
    //         $result[] = $nums[$value];
    //     }
    //     return $result;
    // }
}
