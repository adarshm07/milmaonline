<?php

$db=mysqli_connect("localhost","root","","milma_magazine");
$id = $_POST['id'];
$name = $_POST['name'];
$email = $_POST['email'];
$category = $_POST['category'];
$feedb = $_POST['feedb'];
$query = mysqli_query($db, "INSERT INTO `feedb`(`id`, `name`, `email`, `category`, `feedb`) VALUES (NULL,'$name','$email', $category','$feedb')");
header('location:feedb.php');
?>