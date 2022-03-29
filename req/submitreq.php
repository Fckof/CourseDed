<? 
session_start();
require_once("../connect.php");
$user=$_POST['u_id'];
$device=$_POST['d_id'];
	$clear=$conn->query("DELETE FROM `заявки_аренды` where `user_login`='$user' and `device_id`='$device'");
	$send=$conn->query("INSERT INTO `текущая_аренда` VALUES(NULL,'$user', '$device')");
	if($send and $clear){
		Header("Location:../adminReq.php");
	}

?>