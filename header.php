<nav class="navbar navbar-light bg-light">
	<form class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true" method="POST" action="req/auth.php">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title" id="exampleModalLabel">Вход</h5>
					<button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
						<span aria-bs-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body">
					<div class="mb-3">
						<label for="formGroupExampleInput" class="form-label">Логин</label>
						<input type="text" name="login" class="form-control" id="formGroupExampleInput" >
					</div>
					<div class="mb-3">
						<label for="formGroupExampleInput2" class="form-label">Пароль</label>
						<input type="password" name="pass" class="form-control" id="formGroupExampleInput2" >
					</div>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Закрыть</button>
					<button type="submit" class="btn btn-primary">Войти</button>
				</div>
			</div>
		</div>
	</form>
	
	<form class="modal fade" id="exampleModal1" tabindex="-1" aria-labelledby="exampleModalLabel1" aria-hidden="true" method="POST" action="req/registr.php">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title" id="exampleModalLabel1">Регистрация</h5>
					<button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
						<span aria-bs-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body">
					<div class="mb-3">
						<label for="formGroupExampleInput1" class="form-label">Логин</label>
						<input type="text" name="loginReg" class="form-control" id="formGroupExampleInput1" placeholder="Example input placeholder">
					</div>
					<div class="mb-3">
						<label for="formGroupExampleInput2" class="form-label">Пароль</label>
						<input type="password" name="passReg" class="form-control" id="formGroupExampleInput2" placeholder="Another input placeholder">
					</div>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Закрыть</button>
					<button type="submit" class="btn btn-primary">Зарегестрироваться</button>
				</div>
			</div>
		</div>
	</form>
	<!-- ---------------------------------------------------------navbar -->
	<div class="container-fluid">
		<div class="d-flex">
			<a href="index.php" class="navbar-brand">Фонд кино-технологий РФ</a>
			<ul class="navbar-nav mr-auto mb-2 mb-lg-0 flex-row">
				<li class="nav-item me-3 ms-3">
					<a href="showDevice.php" class="nav-link">Аренда аппаратуры</a>
				</li>
				<?if(isset($_SESSION['user']) and $_SESSION['user_id']!='admin'):?>
				<li class="nav-item me-3 ms-3">
					<a href="showRequests.php" class="nav-link">Заявки</a>
				</li>
				<li class="nav-item me-3 ms-3">
					<a href="showActive.php" class="nav-link">Активная аренда</a>
				</li>
				<?endif;?>
				<? if(isset($_SESSION['user']) and $_SESSION['user_id']=='admin'): ?>
					<li class="nav-item me-3 ms-3">
						<a href="adminReq.php" class="nav-link">Рассмотреть</a>
					</li>
					<li class="nav-item me-3 ms-3">
						<a href="adminActive.php" class="nav-link">Активные</a>
					</li>
					<?endif;?>
			</ul>

		</div>
		<div class="d-flex">
			<form class="d-flex me-5" method="GET">
				<input class="form-control me-1" type="search" placeholder="Search" aria-label="Search">
				<button class="btn btn-outline-success" type="submit">Искать</button>
			</form>
			<? if (isset($_SESSION['user'])) : ?>
				<a href="req/exit.php" class="btn btn-outline-danger">Выход</a>
			<? else : ?>
				<button type="button" class="btn btn-info btn-md me-2" data-bs-toggle="modal" data-bs-target="#exampleModal">
					Вход
				</button>
				<button type="button" class="btn btn-warning btn-md ms-2 " data-bs-toggle="modal" data-bs-target="#exampleModal1">
					Регистрация
				</button>
			<? endif; ?>
		</div>
	</div>
</nav>