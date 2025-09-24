<?php
       $username = $_POST['username'];
       $email = $_POST['email'];
       $_password =$_POST['password'];
       if(empty($username)||empty($email)||empty($_password)){
        echo "Error: All field are required!";
       }else{ 
        echo "Registration Successfull!<br>";
        echo "Username : $username <br>";
        echo "Email: $email<br>";
        echo "password:(hidden for security)";
       }
       ?>