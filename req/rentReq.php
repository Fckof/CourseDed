<? 
session_start();
require_once("../connect.php");
$id=$_POST['d_id'];
$user_id=$_SESSION['user_id'];
if(isset($_SESSION['user']) ){
	$check=$conn->query("SELECT * FROM `заявки_аренды` WHERE `user_login`='$user_id' and `device_id`='$id'");
	$check2=$conn->query("SELECT * FROM `текущая_аренда` WHERE `user_login`='$user_id' and `device_id`='$id'");
	$r=$check->fetch_assoc();
	$r2=$check2->fetch_assoc();
	if($r!=null or $r2!=null){
		exit("У вас уже есть заявка на эту аппаратуру или вы ее уже арендовали");
	}
	$send=$conn->query("INSERT INTO `заявки_аренды` values(NULL,'$user_id', '$id')");
	if($send){
		Header("Location:../showDevice.php");
	}
}else{
	exit("Чтобы подать заявку вы должны быть авторизованы");
}
?>