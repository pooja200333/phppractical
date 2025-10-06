<?php
// Check if form submitted
if (isset($_POST['username'])) {
    $name = $_POST['username'];
    setcookie("username", $name, time() + (86400 * 30)); // 30 days cookie
    echo "Hello, $name! Your name is saved.";
} else {
    // Check if cookie exists
    if (isset($_COOKIE['username'])) {
        echo "Welcome back, " . $_COOKIE['username'] . "!";
    } else {
        // Show form
        echo '<form method="post">
                Enter your name: <input type="text" name="username">
                <input type="submit" value="Submit">
              </form>';
    }
}
?>