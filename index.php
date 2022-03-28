<?
session_start();
include_once("connect.php");
?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="css/bootstrap.css">
	<link rel="stylesheet" href="css/style.css">
	<title>Российские фильмы</title>
</head>

<body>

	<div class="container container-fluid">
		<!--------------------------------------------------------------------------------------------navbar -->
		<nav class="navbar navbar-light bg-light">
			<div class="container-fluid">
				<div class="d-flex">
					<a href="index.php" class="navbar-brand">Фонд кино РФ</a>
					<ul class="navbar-nav mr-auto mb-2 mb-lg-0">
					<li class="nav-item">
						<a href="#" class="nav-link">Аренда аппаратуры</a>
					</li>
					</ul>
					
				</div>

				<form class="d-flex">
					<input class="form-control mr-2" type="search" placeholder="Search" aria-label="Search">
					<button class="btn btn-outline-success" type="submit">Search</button>
				</form>
			</div>
		</nav>
		<!-----------------------------------------------------------------------------------------------main -->

	</div>
	<h1 class="display-4 text-center mt-3">Список всех Российских фильмов:</h1>
	<div class="container d-flex justify-content-center main mb-4">
		<? include_once("req/getfilms.php"); ?>
		<!-- <form class="card mt-3 w-75" >
			<div class="card-body ">
				<h5 class="card-title ">Card title</h5>
				<h6 class="card-subtitle mb-2 text-muted">Card subtitle</h6>
				<p class="card-text">Some quick example text to build on the card title and make up the bulk of the card\'s content.</p>
				<button type="submit" class="btn btn-primary" value="'.$row['ID_филм'].'">Открыть</button>
			</div>
		</form> -->

	</div>

	<script src="js/bootstrap.bundle.js"></script>
</body>

</html>