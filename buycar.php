<?php
//require "auto.php";
$color = "Black";
//$color = $_POST['color'];
//$result1 = $mysql -> query("SELECT * FROM `color` WHERE `color`= '$color'");
//echo "<br>";
//$insertColor = $result1->fetch_assoc();
//while  ($row1 = $result1->fetch_assoc()){
//	printf($row1["color"]);
	//}

$mysql = mysqli_connect('localhost', 'root', 'root', 'buycar');
if (!$mysql){
	die("Error");
}

$result1 = $mysql -> query("SELECT * FROM `color` WHERE `color`= '$color'");
$insertColor = $result1->fetch_assoc();

$mysql->query("INSERT INTO `auto` (`color_auto`) VALUES ('$insertColor')"); //`markaAuto`,`price_auto`,`color_auto`,`defects`,`recovery_cost`
$mysql-> close();

?>