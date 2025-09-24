<!DOCTYPE html>
<html>
<body>
<form method="post">
  Enter your name: <input type="text" name="uname">
  <input type="submit" value="Submit">
</form>

<?php
if(isset($_POST['uname'])){
    echo "Welcome, " . htmlspecialchars($_POST['uname']) . "!";
}
?>
</body>
</html>