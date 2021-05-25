<?php
$auto = $_POST['auto'];
$price = $_POST['price'];
$color = $_POST['color'];
$defects = $_POST['defects'];
$recoveryCost = $_POST['recoveryCost'];

$mysql = mysqli_connect('localhost', 'root', 'root', 'buycar');
if (!$mysql){
	die("Error");
}
$result0 = $mysql -> query("SELECT * FROM `auto` WHERE `id_auto`= '$auto'");
$result1 = $mysql -> query("SELECT * FROM `color` WHERE `color`= '$color'");


$result4 = $mysql -> query("SELECT * FROM `price` WHERE `id_price`= '$price'");


//while  ($row0 = $result0->fetch_assoc()) {
//	printf($row0["id_auto"]);
//}
if($auto == 1){
	echo "BMW";
}elseif($auto == 2){
	echo "Rolls";
}elseif($auto == 3){
	echo "Mercedes-Benz";
}elseif($auto == 4){
	echo "Mazda";
}elseif($auto == 5){
	echo "Mini";
}

	echo "<br>";
while  ($row1 = $result1->fetch_assoc()){
	echo "Вы выбрали ";
	printf($row1["color"]);
	}
	echo " цвет.";

echo "<br>";

////////////////////////////////

if($price == 1){

$defects = 1;
$recoveryCost = 1;

	$result2 = $mysql -> query("SELECT * FROM `defects` WHERE `id_defects`= '$defects'");
	$result3 = $mysql -> query("SELECT * FROM `recoverycost` WHERE `id_recovery`= '$recoveryCost'");

while  ($row2 = $result2->fetch_assoc()) {
	echo "Дефекты - ";
	printf($row2["defects"]);
}
	echo "<br>";
while  ($row3 = $result3->fetch_assoc()) {
	echo "Стоимость на восстановление потребуется в районе - ";
	printf($row3["recoveryCost"]);
	echo " $.";
	}
}elseif($price == 2){

	$defects = 2;
$recoveryCost = 2;

	$result2 = $mysql -> query("SELECT * FROM `defects` WHERE `id_defects`= '$defects'");
	$result3 = $mysql -> query("SELECT * FROM `recoverycost` WHERE `id_recovery`= '$recoveryCost'");

while  ($row2 = $result2->fetch_assoc()) {
	printf($row2["defects"]);
}
	echo "<br>";
while  ($row3 = $result3->fetch_assoc()) {
	echo "Стоимость на восстановление потребуется в районе - ";
	printf($row3["recoveryCost"]);
	echo " $.";
	}
}elseif($price == 3){

	$defects = 3;
$recoveryCost = 3;

	$result2 = $mysql -> query("SELECT * FROM `defects` WHERE `id_defects`= '$defects'");
	$result3 = $mysql -> query("SELECT * FROM `recoverycost` WHERE `id_recovery`= '$recoveryCost'");

while  ($row2 = $result2->fetch_assoc()) {
	printf($row2["defects"]);
}
	echo "<br>";
while  ($row3 = $result3->fetch_assoc()) {
	echo "Cтоимость на восстановление потребуется в районе - ";
	printf($row3["recoveryCost"]);
	echo " $.";
	}
}
///////////////////////
	echo "<br>";
	while  ($row4 = $result4->fetch_assoc()){
	echo "Цена автомобиля - ";
	printf($row4["price"]);
	echo " $.";
}
echo "<br>";
$exit = "<form action = \"/tmp.php\"> <button class=\"btn btn-success\" type=\"submit\">Назад</button></form>";
$buy = "<form action = \"/buycar.php\" method = \"post\" > <button class=\"btn btn-success\" type=\"submit\">Купить</button></form>";

echo "<br>".$exit." ".$buy;

//if (isset($_POST['nameauto']))

 //setcookie('COOKAUTO', $row4['price'], time() + 3600, "/");
$mysql -> close();
?>