<?php
if(isset($_GET['t'])){setcookie("theme",$_GET['t'],time()+86400);$_COOKIE['theme']=$_GET['t'];}
$theme=$_COOKIE['theme']??'light';
?>
<body style="background:<?=($theme=='dark'?'#000':'#fff')?>;color:<?=($theme=='dark'?'#fff':'#000')?>">
<h2><?=ucfirst($theme)?> Mode</h2>
<a href="?t=light">Light</a> | <a href="?t=dark">Dark</a>
</body>