<?php
$fruits = array("Apple", "Banana", "Mango", "Orange");
$search = "Mango";
if (in_array($search, $fruits)) {
    echo "$search array ke andar hai.";
} else {
    echo "$search array ke andar nahi hai.";
}
?>