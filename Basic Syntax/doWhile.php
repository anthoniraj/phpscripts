<?php

/*
 * Author :  Anthoniraj Amalan
 * Date   :  10 Aug, 2011
 */
$val = $_GET['val'];
$option = $_GET['opt'];
do
{
    //Factorial Code
    $res = 1;
    for($i = 1;$i<=$val;$i++)
    {
        $res = $res * $i;
    }
    echo "The Factorial Value of $val is $res";  
        
    
}while($option == "yes");


?>
