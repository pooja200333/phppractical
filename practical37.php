<?php
$name = isset($_GET['name']) ? $_GET['name']:
"Pooja yadav CS final year";
$age =isset($_GET['age'])? $_GET['age']:
"23";
echo "Hello $name,you are $age years old.";
?>