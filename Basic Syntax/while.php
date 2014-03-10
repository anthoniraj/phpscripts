<?php

/*
 * Author :  Anthoniraj Amalan
 * Date   :  4 Aug, 2011
 */

$n = 1;
while($n <= 10)
{
    echo $n , "<br />";
    ++$n;
    //$n++; // $n = $n +1
    
}   


//Alternate Syntax

$x = 1;
while($x < 10):
    echo $x, "<br />";
    $x++;    
endwhile;



?>
