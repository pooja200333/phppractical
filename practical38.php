<!DOCTYPE html>
<html>
<body>
<form method="get">
  Num1: <input type="number" name="num1">
  Num2: <input type="number" name="num2">
  <input type="submit" value="Sum">
</form>

<?php
if(isset($_GET['num1']) && isset($_GET['num2'])){
    echo "Sum = " . ($_GET['num1'] + $_GET['num2']);
}
?>
</body>
</html>