<?php 
setcookie('COOKAUTO', $row4['price'], time() - 3600, "/");
header('Location: /tmp.php');
?>