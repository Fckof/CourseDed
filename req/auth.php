<?
require_once("../connect.php");
session_start();
$log=$_POST["login"];
$pass=$_POST["pass"];
$res=$conn->query("SELECT * FROM `пользователи` WHERE `пароль`='$pass' and `логин`='$log'");
$row=$res->fetch_assoc();
if($row!=null){
	$_SESSION['user']=$row['статус'];
	$_SESSION['user_id']=$row['логин'];
	Header("Location:../index.php");
}else{
	echo "Такого пользователя не существует";
}

?>