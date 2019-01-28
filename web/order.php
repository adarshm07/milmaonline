			<?php

$db=mysqli_connect("localhost","root","","milma_magazine");
$id = $_POST['id'];
$product = $_POST['product'];
$qty = $_POST['productq'];
$address = $_POST['address'];
$status = $_POST['id'];
							$query = mysqli_query($db, "INSERT INTO `ordermilk`(`id`, `product`, `qty`, `address`, `status`) VALUES (NULL,'$product','$productq','$address', DEFAULT)");
header('location:ordermilk.php');
?>


