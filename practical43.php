<form method="POST">
  <label>Which is your favorite programming language?</label><br>
  <input type="radio" name="lang" value="PHP"> PHP
  <input type="radio" name="lang" value="JavaScript"> JS
  <input type="radio" name="lang" value="Python"> Python<br>
  <input type="submit" name="submit">
</form>

<?php
if(isset($_POST['submit'])){
  echo "Your favorite language: " . ($_POST['lang'] ?? "None");
}
?>