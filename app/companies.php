<!DOCTYPE html>
<html lang="ru">

<head>

	<meta charset="utf-8">
	<!-- <base href="/"> -->

	<title>Компании</title>
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
	<nav class="navbar navbar-expand-lg navbar-light bg-light d-flex">
		<?php
		echo "<a href=\"./logout.php\" class=\"btn btn-success ml-auto\">Logout</a>";
		?>
	</nav>

	<div class="container">

		<div class="row">

			<div class="col">

				<h2 class="h2">Список компаний</h2>

				<div class="">
					<?php
						require('./connect.php');
							$sql = mysqli_query($connection, "SELECT * FROM 'companies'");
							$result = mysqli_stmt_fetch($sql);
							echo $result;
							// while ($result = mysqli_stmt_fetch($sql)) {
								// echo $result['id'].": ".$result['name']."<br>";
						// }
						?>
				</div>
			</div>

		</div>

	</div>



	<script src="js/scripts.min.js"></script>

</body>
</html>
