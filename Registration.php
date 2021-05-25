<?php

 $name = filter_var(trim($_POST['name']),
 FILTER_SANITIZE_STRING);

 $surname = filter_var(trim($_POST['surname']),
 FILTER_SANITIZE_STRING);

 $patronymic = filter_var(trim($_POST['patronymic']),
 FILTER_SANITIZE_STRING);

 $birth = filter_var(trim($_POST['birth']),
FILTER_SANITIZE_STRING);

 $pass = filter_var(trim($_POST['pass']),
FILTER_SANITIZE_STRING);

 if(mb_strlen($name) > 20){
 	echo "Недопустимая длина имени";
 	exit();
 }
 if(mb_strlen($surname) > 20){
 	echo "Недопустимая длина фамилии";
 	exit();
 }
 if(mb_strlen($patronymic) > 20){
 	echo "Недопустимая длина отчества";
 	exit();
 	}
 if(mb_strlen($pass) < 6 || mb_strlen($pass) > 100){
 	echo "Недопустимая длина пароля (от 6 до 100 символов!)";
 	exit();
 	}

$pass = md5($pass."abcdefg");

$mysql = mysqli_connect('localhost', 'root', 'root', 'buycar');

if (!$mysql){
	die("Error");
}

$mysql-> query("INSERT INTO `registration` (`name`, `surname`, `patronymic`, `birth`, `password`) VALUES ('$name','$surname','$patronymic', '$birth','$pass')");
$mysql-> close();
header('Location: /');
?>