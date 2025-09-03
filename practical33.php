<?php
$students = array(
    "Amit" => 85,
    "Rohit" => 78,
    "Pooja" => 92,
    "Neha" => 88,
    "Vikas" => 76
);

$key = "Pooja";

if(array_key_exists($key, $students)){
    echo "The key '$key' exists in the array and value is: " . $students[$key];
} else {
    echo "The key '$key' does not exist in the array.";
}
?>