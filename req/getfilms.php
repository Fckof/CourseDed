<?
	$res=$conn->query("SELECT * FROM `фильмы`");
$i=1;
while($row=$res->fetch_assoc()){
	if($i%4){
	print '<hr><form class="card mt-3 " style="width: 20rem;height:20rem;" action="req/showCurFilm.php" method="GET">
				<div class="card-body d-flex flex-column justify-content-around">
					<h5 class="card-title ">'.$row['Окончательно название'].'</h5>
					<h6 class="card-subtitle mb-2 text-muted">'.$row['Рабочее название'].'</h6>
					<p class="card-text">'.$row['Описание'].'</p>
					<button type="button" name="film_id" class="btn btn-primary" value="">Сборы: '.$row['сборы'].' Р</button>
				</div>
			</form><hr>';
		}
	else{
		print '<hr><form class="card mt-4 mb-2 card-row" style="width: 62.5rem;height:15rem;">
				<div class="card-body d-flex flex-column justify-content-around">
					<h5 class="card-title ">'.$row['Окончательно название'].'</h5>
					<h6 class="card-subtitle mb-2 text-muted">'.$row['Рабочее название'].'</h6>
					<p class="card-text">'.$row['Описание'].'</p>
					<button type="button" name="film_id" class="btn btn-primary" value="">Сборы: '.$row['сборы'].' Р</button>
				</div>
			</form><hr>';
	}
		$i+=1;
	}
?>