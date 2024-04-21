<?php

class Solution
{
    /*
    https://leetcode.com/problems/merge-sorted-array/
    ou are given two integer arrays nums1 and nums2, sorted in non-decreasing order, and two integers m and n, representing the number of elements in nums1 and nums2 respectively.
    Merge nums1 and nums2 into a single array sorted in non-decreasing order.
    The final sorted array should not be returned by the function, but instead be stored inside the array nums1. To accommodate this, nums1 has a length of m + n, where the first m elements denote the elements that should be merged, and the last n elements are set to 0 and should be ignored. nums2 has a length of n.
    */
    
    /**
     * @param Integer[] $nums1
     * @param Integer $m
     * @param Integer[] $nums2
     * @param Integer $n
     * @return NULL
     */
    function merge(&$nums1, $m, $nums2, $n)
    {
        // take elements based on the $m and $n length 
        $nums1 = array_slice($nums1, 0, $m + $n);
        $nums2 = array_slice($nums2, 0, $n);

        // ignore 0 values from the array 
        $nums1 = array_filter($nums1, function ($element) {
            return ($element != 0);
        });
        // merge 2 arrays then sort the values ASC
        $nums1 = array_merge($nums1, $nums2);
        asort($nums1);
    }
}
