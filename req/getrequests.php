<?
$user=$_SESSION["user_id"];
	$res=$conn->query("SELECT `d`.`Наименование`, `d`.`Год_выпуска`, `d`.`Стоимость_аренды` FROM `заявки_аренды` as z 
	INNER JOIN `аппаратура` AS d ON d.`ID_аппаратуры`=`z`.`device_id` WHERE z.user_login='$user'");
$i=1;
while($row=$res->fetch_assoc()){
	if($i%4):?>
	<hr><form class="card mt-3 " style="width: 20rem;height:20rem;" action="req/rentReq.php" method="GET">
				<div class="card-body d-flex flex-column justify-content-around text-center">
					<h5 class="card-title "><? echo $row['Наименование'];?></h5>
					<h6 class="card-subtitle mb-2 text-muted">Год выпуска: <? echo $row['Год_выпуска'];?></h6>
					<p class="card-text">Стоимость аренды: <? echo $row['Стоимость_аренды'];?> Р</p>
					<button type="button" name="d_id" class="btn btn-primary" >Заявка в рассмотрении</button>
				</div>
			</form><hr>
		
	<?else:?>
		<hr><form class="card mt-4 mb-1 card-row" style="width: 62.5rem;height:15rem;" action="req/rentReq.php" method="GET">
				<div class="card-body d-flex flex-column justify-content-around text-center">
				<h5 class="card-title "><? echo $row['Наименование'];?></h5>
				<h6 class="card-subtitle mb-2 text-muted"><? echo $row['Год_выпуска'];?></h6>
				<p class="card-text">Стоимость аренды <? echo $row['Стоимость_аренды'];?> Р</p>
				<button type="button" name="d_id" class="btn btn-primary" >Заявка в рассмотрении</button></div>
			</form><hr>;
			
	<?endif;
		$i+=1;
	}
		?>