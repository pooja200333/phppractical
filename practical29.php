<?php
$numbers = [10, 20, 10, 30, 20, 40, 30];

echo "Original: ";
print_r($numbers);

$unique = array_values(array_unique($numbers));

echo "\nAfter removing duplicates: ";
print_r($unique);

?>