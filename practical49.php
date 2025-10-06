<?php
if (isset($_COOKIE['visits'])) {
    $count = $_COOKIE['visits'] + 1;          // purana value +1
    setcookie("visits", $count, time() + 3600); // 1 ghante ke liye cookie
    echo "You have visited $count times.";
} else {
    $count = 1;
    setcookie("visits", $count, time() + 3600);
    echo "This is your first visit!";
}
?>