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
	<title>Активные</title>
</head>

<body>

	<div class="container container-fluid">
		<!--------------------------------------------------------------------------------------------navbar -->
		<?include_once("header.php")?>
		<!-----------------------------------------------------------------------------------------------main -->

	</div>
	<h1 class="display-4 text-center mt-3">Текущая аренда пользователей:</h1>
	<div class="container d-flex justify-content-center main mb-4">
		<? include_once("req/adminactive.php"); ?>
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