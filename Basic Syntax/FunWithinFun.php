<?php

/*
 * Author :  Anthoniraj Amalan
 * Date   :  29 Aug, 2011
 */

function first()
{
  echo "I am First Function";
  function second()
  {
      echo "<br />I am Second Fucntion";
      function third()
      {
       echo "<br >I am SThirdFucntion";    
      }
  }
   
}

first();
second();
third();

?>
