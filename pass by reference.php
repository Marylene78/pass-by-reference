<?php
/* Defining a function that multiply a number
by itself and return the new value */
function selfMultiply(&$number){
 $number *= $number;
 return $number;
}
$mynum = 5;
echo $mynum; // Outputs: 5
echo "<br />";
selfMultiply($mynum);
echo $mynum; // Outputs: 25
?>