<?php
$name = '';
if(isset($_POST['submit'])){
    $name = $_POST['name'] ?: 'Student';
}
?>

<form method="POST">
  Name: <input name="name"><br>
  Email: <input name="email"><br>
  Message:<br>
  <textarea name="message"></textarea><br>
  <input type="submit" name="submit">
</form>

<?php
if($name){
    echo "<h3>Thank you, $name! Your feedback has been submitted.</h3>";
}
?>