<?php
$countries = [
    "India" => "New Delhi",
    "USA" => "Washington D.C.",
    "UK" => "London",
    "France" => "Paris",
    "Japan" => "Tokyo"
];
$countries["Germany"] = "Berlin";

foreach($countries as $country => $capital){
    echo "$country : $capital <br>";
}
?>