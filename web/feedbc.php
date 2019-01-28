<?php

$db=mysqli_connect("localhost","root","","milma_magazine");
$id = $_POST['id'];
$name = $_POST['name'];
$category = $_POST['category'];
$feedb = $_POST['feedb'];
							$query = mysqli_query($db, "INSERT INTO `feedb`(`id`, `name`, `category`, `feedb`) VALUES (NULL,'$name','$category','$feedb')");
header('location:feedb.php');
?>