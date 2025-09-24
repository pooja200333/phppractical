<!DOCTYPE html>
<html>
<body>
    <form method="post">
        <p>1) which is used to style wed page?<p>
    <input type="radio" name="q1" value="A">PHP
    <input type="radio" name="q1" value="B">CSS
    <input type="radio" name="q1" value="C">PYTHON

  <p>2) main heading tag in html?<p>
    <input type="radio" name="q2" value="A">&lt;h1&gt;
    <input type="radio" name="q2" value="B">&lt;h1&p&gt;
    <input type="radio" name="q2" value="C">&lt;div&gt;

  <p>3) which is server-side language?<p>
    <input type="radio" name="q3" value="A">HTML
    <input type="radio" name="q3" value="B">CSS
    <input type="radio" name="q3" value="C">PHP
<br><br>
<input type="submit" value="Submit">
    </form>

<?php
$score=0;
if($_SERVER["REQUEST_METHOD"]=="POST")
{
    if($_POST["q1"]=="B") $score++;
    if($_POST["q2"]=="A") $score++;
    if($_POST["q3"]=="C") $score++;
    echo "<h2>your Score : $score /3</h2>";
}
?>
</body>
</html>