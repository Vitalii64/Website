<!DOCTYPE html>
<html lang="ru">
<head>

	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title></title>
	<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css">

</head>
<body>

<!-- <?php
if($_COOKIE['COOKAUTO'] == ''): 
?> -->
<pre>
	"Выберите и введите номер авто, который собираетесь приобрести"
	1. BMW;
	2. Rolls;
	3. Mercedes-Benz;
	4. Mazda;
	5. Mini.

</pre>
<form action="auto.php" method="post">

<input type="text" class="form-control" name="auto" id="auto" placeholder="Enter the number auto"><br>

<pre>
	Выберите цвет автомобиля!
	1. Black;
	2. White;
	3. Green.
</pre>
<input type="text" class="form-control" name="color" id="color" placeholder="Enter the color"><br>

<!--

<input type="text" class="form-control" name="defects" id="defects" placeholder="Enter the IDdefects"><br>

<input type="text" class="form-control" name="recoveryCost" id="recoveryCost" placeholder="Enter the IDrecoveryCost"><br> 

-->
<pre>
	Введите номер цены по которой хотите приобрести автомобиль. Цены варьируются в диапазоне от 13000 $ до 60000 $.
	Все зависит от состояния автомобиля и количество дефектов в нем!
	1 -> 60000 $
	2 -> 35000 $
	3 -> 27000 $
	4 -> 13000 $
</pre>

<input type="text" class="form-control" name="price" id="price" placeholder="Enter the price"><br> 

<button class="btn btn-success" type="submit"> Найти</button>
</form>
<br>

	<form action="exit2.php" method="post">
<button class="btn btn-success" type="submit">Выход</button>
</form>

<!--<?php else: ?>
	<p>Авто найдено</p>
	<?=$_COOKIE['COOKAUTO']?>
	<form action="exit.php" method="post">
<button class="btn btn-success" type="submit">Выход</button>
</form>

<?php endif; ?> -->

</body>
</html>