<!DOCTYPE html>
<html>
<body>
<form method="get">
  Enter Marks: <input type="number" name="marks">
  <input type="submit" value="Check Result">
</form>

<?php
if(isset($_GET['marks'])){
    $m = $_GET['marks'];
    echo ($m >= 40) ? "PASS" : "FAIL";
}
?>
</body>
</html>