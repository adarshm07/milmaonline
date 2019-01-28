<?php
	include('conn.php');
 
	$id=$_GET['id'];
 
	$firstname=$_POST['uname'];
	$lastname=$_POST['lname'];
	$address=$_POST['email'];
 
	mysqli_query($conn,"update register set uname='$uname', lname='$lname', email='$email' where id='$id'");
	header('location:adminhome.php');
 
?>