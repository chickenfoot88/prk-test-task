<!DOCTYPE html>
<html lang="ru">

<head>

	<meta charset="utf-8">
	<!-- <base href="/"> -->

	<title>Регистрация</title>
	<meta name="description" content="">

	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

	<!-- Template Basic Images Start -->
	<meta property="og:image" content="path/to/image.jpg">
	<link rel="icon" href="img/favicon/favicon.ico">
	<link rel="apple-touch-icon" sizes="180x180" href="img/favicon/apple-touch-icon-180x180.png">
	<!-- Template Basic Images End -->

	<!-- Custom Browsers Color Start -->
	<meta name="theme-color" content="#000">
	<!-- Custom Browsers Color End -->

	<link rel="stylesheet" href="css/main.min.css">

</head>

<body>
	<?php require('connect.php');
		if(isset($_POST['name']) && isset($_POST['password'])) {
			$username = $_POST['name'];
			$email = $_POST['email'];
			$password = $_POST['password'];

			$query = "INSERT INTO users (username, email, password) VALUES ('$username', '$email', '$password') ";
			$result = mysqli_query($connection, $query);

			if ($result) {
				$smsg = 'Регистрация прошла успешно';
			} else {
				$fmsg = 'Ошибка';
			}

		}
	?>

	<!-- Custom HTML -->

	<div class="container">

		<div class="row">

			<div class="col">

				<form method="POST" class="form-signin">
					<h3>Регистрация пользователя:</h3>
					<hr>

					<? if(isset($smsg)) { ?> <div class="alert alert-success" role="alert"> <? echo $smsg; ?> </div> <? } ?>

					<? if(isset($fmsg)) { ?> <div class="alert alert-danger" role="alert"> <? echo $fmsg; ?> </div> <? } ?>

					<div class="form-group">
						<label for="name">Имя:</label>
						<input type="text" class="form-control" name="name" aria-describedby="Введите имя" placeholder="Введите имя" required>
					</div>
					<div class="form-group">
						<label for="email">Email адрес:</label>
						<input type="email" class="form-control" name="email" aria-describedby="emailHelp" placeholder="Введите email" required>
					</div>
					<div class="form-group">
						<label for="password">Пароль:</label>
						<input type="password" class="form-control" name="password" placeholder="Введите пароль" required>
					</div>
					<button type="submit" class="btn btn-primary">Зарегистрируйте меня</button>
					<a href="./login.php" class="btn btn-success">Авторизоваться</a>
				</form>

			</div>

		</div>

	</div>

	<script src="js/scripts.min.js"></script>

</body>
</html>
