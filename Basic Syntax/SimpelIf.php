<?php

/*
 * Author :  Anthoniraj Amalan
 * Date   :  4 Aug, 2011
 */
$temp = 200;
if($temp == 200)
{
    echo "The Temperature is 200 <br />";
}
else
{
    echo "Else Part";
}    


if ($temp == 20) :
  echo "Test1";
elseif($temp == 300):
  echo "Test2";  
else:
  echo "False";  
endif;






echo "This part will always execute";
?>
