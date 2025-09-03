<?php

$num = array(5,6,7,8,9,10);

echo "Original Array";
print_r($num);
echo "<br>";


sort($num); 
echo " Ascending (Values)";
print_r($num);
echo "<br>"; 


rsort($num);
echo " Descending (Values)";
print_r($num);