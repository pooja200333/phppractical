<?php
$students = array(
    "Amit" => 85,
    "Rohit" => 78,
    "Pooja" => 92,
    "Neha" => 88,
    "Vikas" => 76
);

echo "<h3>Original Student Marks:</h3>";
foreach($students as $name => $marks){
    echo $name . " : " . $marks . "<br>";
}

$students["Pooja"] = 95;  

echo "<h3>Updated Student Marks:</h3>";
foreach($students as $name => $marks){
    echo $name . " : " . $marks . "<br>";
}
?>