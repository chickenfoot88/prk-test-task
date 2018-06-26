<!DOCTYPE html>
<html lang="ru">

<head>

	<meta charset="utf-8">
	<!-- <base href="/"> -->

	<title>Авторизация</title>
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

	<!-- Custom HTML -->

	<div class="container">

		<div class="row">

			<div class="col">

				<form method="POST" class="form-signin">
					<h3>Авторизация пользователя:</h3>
					<hr>
					<div class="form-group">
						<label for="name">Имя:</label>
						<input type="text" class="form-control" name="name" aria-describedby="Введите имя" placeholder="Введите имя" required>
					</div>
					<div class="form-group">
						<label for="password">Пароль:</label>
						<input type="password" class="form-control" name="password" placeholder="Введите пароль" required>
					</div>
					<button type="submit" class="btn btn-primary">Войти</button>
					<a href="./login.php" class="btn btn-success">Зарегистрироваться</a>
				</form>

			</div>

		</div>

	</div>

  <?php
    session_start();
    require('connect.php');

    if(isset($_POST['name']) && isset($_POST['password'])) {
      $username = $_POST['name'];
      $password = $_POST['password'];

      $query = "SELECT * FROM users WHERE username='$username' and password='$password'";
      $result = mysqli_query($connection, $query) or die(mysqli_error($connection));
      $count = mysqli_num_rows($result);

      if ($count == 1) {
        $_SESSION['username'] = $username;
      } else {
        $fmsg = 'Ошибка';
      }
    }

      if (isset($_SESSION['username'])) {
        $username = $_SESSION['username'];
        header('Location: companies.php');
      }
    ?>

	<script src="js/scripts.min.js"></script>

</body>
</html>
