<?php
session_start();


	define('DB_SERVER', 'localhost');
	define('DB_USERNAME', 'root');
	define('DB_PASSWORD', 'password');
	define('DB_DATABASE', 'milma_magazine');
	$db = mysqli_connect(DB_SERVER,DB_USERNAME,DB_PASSWORD,DB_DATABASE);

$pwd=$_POST['pass'];
$wp=md5($pwd);
$s="select * from register where uname='".$_POST['user']."' and pwd='$wp'";
$result=mysqli_query($db,$s);
		$row=mysqli_fetch_array($result,MYSQLI_ASSOC);


if(mysqli_num_rows($result) >= 1)
{
$_SESSION['uname']=$_POST['user'];

if($_POST['user']=='admin'&&$_POST['password']=="123"){
header('location:d-page/adminhome.php');
}else
header('location:web/mainhome.php');
}
else
{
header('location:index.php');
}
?>
