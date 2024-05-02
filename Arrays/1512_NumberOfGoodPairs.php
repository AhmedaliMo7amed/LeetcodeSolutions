<?php 
class Solution {
    /**
      Given an array of integers nums, return the number of good pairs.
      A pair (i, j) is called good if nums[i] == nums[j] and i < j.
    **/
  
    /**
     * @param Integer[] $nums
     * @return Integer
     */
    function numIdenticalPairs($nums) {
       $existArr = [];
       $result = 0;
        foreach ($nums as $num) {
            if (array_key_exists($num, $existArr)) {
                $result += $existArr[$num];
            }
            $existArr[$num]++;
        }
        return $result;
    }

    /**
    *** Another solution ***
    
    function numIdenticalPairs($nums) {
          $result = 0;
          $length = count($nums);
          for ($i = 0; $i < $length; $i++) {
              for ($j = $i + 1; $j < $length; $j++) {
                  if ($nums[$i] == $nums[$j]) {
                      $result++;
                  }
              }
          }
          return $result;
      }
      
    **/
}