<?php 

/**
Given an integer array nums where the elements are sorted in ascending order, convert it to a 
height-balanced binary search tree.
**/

/**
 * Definition for a binary tree node.
 * class TreeNode {
 *     public $val = null;
 *     public $left = null;
 *     public $right = null;
 *     function __construct($val = 0, $left = null, $right = null) {
 *         $this->val = $val;
 *         $this->left = $left;
 *         $this->right = $right;
 *     }
 * }
 */
class Solution {

    /**
     * @param Integer[] $nums
     * @return TreeNode
     */
    function sortedArrayToBST(array $nums) {
        // Check array is empty or not
        if (empty($nums))
            return null;
        
        // get count of elements in $nums array 
        $countOfElements = count($nums);

        // get center of the array
        $middleIndex = floor($countOfElements / 2);
        // create the root node of the tree
        $rootNode = new TreeNode($nums[$middleIndex]);

        // rec repeat to create left side tree
        $rootNode->left = $this->sortedArrayToBST(array_slice($nums, 0, $middleIndex));
        // rec repeat to create right side tree
        $rootNode->right = $this->sortedArrayToBST(array_slice($nums, $middleIndex + 1));

        return $rootNode;
    }
}
?>
