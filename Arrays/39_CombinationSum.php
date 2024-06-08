<?php

class Solution {

    /**
     * @param Integer[] $candidates
     * @param Integer $target
     * @return Integer[][]
     */
    function combinationSum($candidates, $target)
    {
        $results = [];
        $combination = [];
        $startIndex = 0;

        $this->combinationFinder($target, $candidates, $startIndex, $combination, $results);
        return $results;
    }

    function combinationFinder($remainingTarget, $candidates, $startIndex, $combination, &$results)
    {
        if ($remainingTarget < 0) {
            // break the path ( invalid path )
            return;
        }
        if ($remainingTarget === 0) {
            // valid path
            $results[] = $combination;
            return;
        }

        for ($i = $startIndex; $i < count($candidates); $i++) {
            $combination[] = $candidates[$i];
            $newTarget = $remainingTarget - $candidates[$i];
            $this->combinationFinder($newTarget, $candidates, $i, $combination, $results);
            array_pop($combination);
        }
    }
}
