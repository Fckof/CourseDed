<? 
session_start();
require_once("../connect.php");
$user=$_POST['u_id'];
$device=$_POST['d_id'];
	$clear=$conn->query("DELETE FROM `заявки_аренды` where `user_login`='$user' and `device_id`='$device'");
	if($clear){
		Header("Location:../adminReq.php");
	}

?>