<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Регистрация</title>
	<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css">
	<link rel="stylesheet" href="CSS/Style.css">
</head>
<body>
	<div class="container mt-4">
		
		<div>
<div>
	<h1>Ругистрация покупателя авто</h1>
	<form action="Registration.php" method="post">

		<input type="text" class="form-control" name="name" id="name" placeholder="Enter the name"><br>

		<input type="text" class="form-control" name="surname" id="surname" placeholder="Enter the surname"><br>

		<input type="text" class="form-control" name="patronymic" id="patronymic" placeholder="Enter the patronymic"><br>

		<input type="text"  class="form-control" name="birth" id="birth" placeholder="Birth"><br>

		<input type="password"  class="form-control" name="pass" id="pass" placeholder="Enter the password"><br>

		<button class="btn btn-success" type="submit">Зарегистрировать</button>
	</form>

<br>
</div>
<div>
	<h2>Авторизация покупателя авто</h2>
	<form action="auth.php" method="post">

		<input type="text" class="form-control" name="name" id="name" placeholder="Enter the name"><br>

		<input type="text" class="form-control" name="surname" id="surname" placeholder="Enter the surname"><br>

		<input type="password"  class="form-control" name="pass" id="pass" placeholder="Enter the password"><br>

		<button class="btn btn-success" type="submit">Авторизовать</button>
	</form>
</div>

</div>

</div>
</body>
</html>