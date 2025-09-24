<!DOCTYPE html>
<html>
<body>
    <form method="post">
        num1 :<input type="number" name="num1" required><br><br>
        num2 :<input type="number" name="num2" required><br><br>
        <lable Choose Operation:></lable>
        <select name="op">
            <option value="+"></option>
            <option value="-"></option>
            <option value="*"></option>
            <option value="/"></option>
        </select><br><br>
        <input type="submit" value="calculate">
    </form>


<?php
if(isset($_POST['num1'])&& isset($_POST['num2'])){
    $a = $_POST['num1'];
    $b = $_POST['num2'];
    $op = $_POST['op'];

      echo "result = ";
    if ($op =="+") echo ($a+$b);

     if ($op =="-") echo ($a-$b);

     if ($op =="")echo ($a*$b);

      if ($op =="/")echo  $b != 0 ? $a/$b:
        "Error(divide by zero )";
}
?>
</body>
</html>