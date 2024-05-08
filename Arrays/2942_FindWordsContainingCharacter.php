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
            if (strpos($value, $x) !== false) {
                $result[] = $key;
            }
        }
        return $result;
    }
}
