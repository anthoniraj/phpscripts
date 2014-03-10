<?php

/*
 * Author :  Anthoniraj Amalan
 * Date   :  10 Aug, 2011
 */
//Creating An Array using array() function
$a = array(
    "name" => "antony",
    "age" => 26,
    "x" => 10
);

//Displaying all values of array
print_r($a);

//Displaying Specific Values from array
echo "<br>The name of the person is $a[name]<br>";
echo "The age of $a[name]is $a[age]";

//Two Dimensional Array
$two = array("myarray" => array(1, 2, 3));
echo "<br>" . $two[myarray][0];

//various types of array declaration
$normal = array(1, 2, 3, 4, 5, 6, 7, 8, 9, 0);
$hash = array("a" => 65, "b" => "antony");
$two = array("2" => array("x" => 11, "y" => 12));

//Updating array values
$hash[] = 15;
$hash[11] = 20;
print_r($hash);

//Deleting array values
unset($hash[0]);
unset($two);
print_r($hash);
print_r($two);
?>
