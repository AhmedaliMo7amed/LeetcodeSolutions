<?php 

class Solution {

    /**
     * @param String[] $words
     * @param String $x
     * @return Integer[]
     */
    function findWordsContaining($words, $x) {
        $result = [];
        foreach($words as $key => $value){
            // Another way => preg_match("/$x/", $word) instead of strpos($value, $x)
            if (strpos($value, $x) !== false) {
                $result[] = $key;
            }
        }
        return $result;
    }
}
