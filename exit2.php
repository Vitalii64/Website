<?php 
$cookie = setcookie('user', $user['surname'], time() - 3600, "/");
header('Location: /');
?>