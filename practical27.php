<?php

$num = array(1, 2, 3, 4, 5);

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