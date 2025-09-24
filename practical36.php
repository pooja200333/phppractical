<?php
$name=isset($_GET['name']) ? $_GET['name']:
"pooja yadav";
echo "Hello,".htmlspecialchars($name);
?>