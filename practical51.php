<?php
if(!isset($_COOKIE['offer'])){
    setcookie("offer","1",time()+600);
    echo "Welcome! You get 10% off (valid for 10 minutes).";
} else {
    echo "No discount available now.";
}
?>