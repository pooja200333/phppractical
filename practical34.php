<?php

$fruits = array(
    "Mango" => 80,
    "Banana" => 30,
    "Apple" => 100,
    "Orange" => 60,
    "Grapes" => 50
);

echo "<h3>Sorted by Price (Value):</h3>";
asort($fruits);
foreach($fruits as $fruit => $price){
    echo $fruit . " : " . $price . "<br>";
}

echo "<h3>Sorted by Fruit Name (Key):</h3>";
ksort($fruits);
foreach($fruits as $fruit => $price){
    echo $fruit . " : " . $price . "<br>";
}
?>