<?
session_start();
require_once("../connect.php");
$log=$_POST['loginReg'];
$pass=$_POST['passReg'];
$res=$conn->query("SELECT `логин` FROM `пользователи` WHERE `логин`='$log'");
if(!$res){
	exit("Пользователь с таким логином уже существует!");
}
$add=$conn->query("INSERT INTO `пользователи` VALUES('$log','$pass','USER')");
if($add){
	$_SESSION['user']="USER";
	$_SESSION['user_id']=$log;
	Header("Location:../index.php");
}
?>