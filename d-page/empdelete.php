<?php
	include('conn.php');
	$id=$_GET['empid'];
	mysqli_query($conn,"delete from empreg where empid='$empid'");
	header('location:employee.php');
 
?>