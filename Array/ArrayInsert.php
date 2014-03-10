 <?php

/*
 * Author :  Anthoniraj Amalan
 * Date   :  29 Aug, 2011
 */
 $info = array("Antony","OSP","Bala","WebService");
 print_r($info);
 
 echo "<br />";
 
 array_splice($info,2,0,"PKR");
 print_r($info);
?>
