<?php
	include('conn.php');
 
	$uname=$_POST['uname'];
	$lname=$_POST['lname'];
	$email=$_POST['email'];
 
	mysqli_query($conn,"insert into register (uname, lname, email) values ('$uname', '$lname', '$email')");
	header('location:adminhome.php');
 
?>