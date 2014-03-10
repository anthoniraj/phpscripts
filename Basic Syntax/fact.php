<?php

/*
 * Author :  Anthoniraj Amalan
 * Date   :  29 Aug, 2011
 */
/* n! = n(n-1)!  COND 0! = 1 AND 1! =1
 * 3!= 3 * (3-1)!
 *   = 3 * (2)!
 *   = 3 * 2 * (2-1)!
 *   = 3* 2 * 1!
 *   = 3 * 2* 1 
 *   = 6
*/   

$res = factorial(4);
echo "The factorial value is ", $res;

function factorial($n)
{
    if($n == 0 || $n == 1)
        return 1;
    else
        return $n * factorial($n-1); 
        
}

/*
 *  Step 1:
 *     factorial(4)
 *           4 * factorial(4-1)
 *           4 * factorial(3)
 *           4 * 3 * factorial(3-1)
 *           4 * 3 * factorial(2)
 *           4 * 3 * 2 * factorial(2-1)
 *           4 * 3 * 2 * factorial(1)
 *           4 * 3 * 2 * 1 * factorial(0)
 *           4 * 3 * 2 * 1 * 1   
 */











?>
