<?php
$name = filter_var(trim($_POST['name']),
 FILTER_SANITIZE_STRING);

 $surname = filter_var(trim($_POST['surname']),
 FILTER_SANITIZE_STRING);

  $pass = filter_var(trim($_POST['pass']),
FILTER_SANITIZE_STRING);

$pass = md5($pass."abcdefg");

 $mysql = mysqli_connect('localhost', 'root', 'root', 'buycar');

if (!$mysql){
	die("Error");
}

  $result = $mysql -> query("SELECT * FROM `registration` WHERE `name`='$name' AND `password`='$pass'");

  $people = $result->fetch_assoc();
  if(count($people) == 0){
  	echo "Такой пользователь не найден";
  	exit();
}

  //print_r($people);
  //exit();

  $cookie = setcookie('user', $user['surname'], time() + 3600, "/");

      if($cookie == ''){
       header('Location: /');
      }

      if($cookie != ''){
        header('Location: /tmp.php');
      }

  $mysql -> close();


  //header('Location: /');

?>