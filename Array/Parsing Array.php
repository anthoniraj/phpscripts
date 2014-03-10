<?php

/*
 * Author :  Anthoniraj Amalan
 * Date   :  18 Aug, 2011
 */

//Numeric Array
$data = array(1,2,3,4,5,6,7,8,9,10);

echo "The Data Array Value is ", $data[5];

foreach ($data as $value)
 {
       echo "<br />", $value ;
 }   
 
 $n = count($data);
 for ($i = 0; $i<$n;$i++)
 {
       echo "<br />", $data[$i] ;
 }
//Associative Array


$student = array('10MSC0001'=>'Antony','10MSC0002'=>'Raja','10MSC0003'=>'Kumar');

echo "<br />The Student Array Value is ", $student['10MSC0002'];
foreach ($student as $key=>$value)
 {
       echo "<br />",$key ," ", $value ;
 }   

//print_r($student);
?>
