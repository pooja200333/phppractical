<!DOCTYPE html>
<html>
<body>
    <h2>Content Form</h2>
    <form method="get">
        <label>Name:</lable>
        <input type="text" name="name"required><br><br>
        <label>Subject:</lable>
         <input type="text" name="subject"required><br><br>
          <label>Message:</lable>
          <textarea name="message" rows="5" cols="30"required></textarea><br><br>
          <input type="submit" value="Submit"> 
    </form>

    <?php
    if (isset($_GET['name'])){
        $name =htmlspecialchars($_GET['name']);
        echo "<h3>Thank you $name,we will contact you soon!</h3>";
    }
    ?>
</body>
</html>