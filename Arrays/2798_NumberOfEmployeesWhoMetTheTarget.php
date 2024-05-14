<?php

class Solution {

    /**
     * @param Integer[] $hours
     * @param Integer $target
     * @return Integer
     */
    function numberOfEmployeesWhoMetTarget($hours, $target) {
        $results = array_filter($hours, function($hour) use ($target) {
            return $hour >= $target;
        });
        return count($results);
    }
}


// Another Solution 
// function numberOfEmployeesWhoMetTarget($hours, $target) {
//       $count = 0;
//       foreach ($hours as $hour) {
//           if ($hour >= $target)
//               $count++;
//       }
//       return $count;
// }
