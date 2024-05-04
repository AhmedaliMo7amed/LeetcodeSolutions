<?php 

class Solution {

    /**
      There is a programming language with only four operations and one variable X:
      ++X and X++ increments the value of the variable X by 1.
      --X and X-- decrements the value of the variable X by 1.
      Initially, the value of X is 0.

      Example 1:
      
      Input: operations = ["--X","X++","X++"]
      Output: 1
      Explanation: The operations are performed as follows:
      Initially, X = 0.
      --X: X is decremented by 1, X =  0 - 1 = -1.
      X++: X is incremented by 1, X = -1 + 1 =  0.
      X++: X is incremented by 1, X =  0 + 1 =  1.
    **/
  
    /**
     * @param String[] $operations
     * @return Integer
     */
    function finalValueAfterOperations($operations) {
        $x = 0;
        foreach ($operations as $operation) {
            if (strpos($operation, '+') !== false) {
                $x++;
            } elseif(strpos($operation, '-') !== false) {
                $x--;
            }  
        }
        return $x;
    }


    /**
    Another Solution
      function finalValueAfterOperations($operations) {
          $x = 0;
          foreach ($operations as $op) {
              $opArray = str_split($op);
              if (in_array('+', $opArray)) {
                  $x++;
              } elseif (in_array('-', $opArray)) {
                  $x--;
              }
          }
          return $X;
      }
    **/

}
