<?php
	include('conn.php');
	$id=$_GET['id'];
	mysqli_query($conn,"delete from register where id='$id'");
	header('location:adminhome.php');
 
?>