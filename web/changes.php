                  	   <?php

$db=mysqli_connect("localhost","root","password","milma_magazine");

$pwd=$_POST['op'];
$pwdd=$_POST['np'];
$e=$_POST['email'];
$wp=md5($pwd);
$wpp=md5($pwdd);
$s="UPDATE  `register` SET  `pwd` =  '$wpp' WHERE  `register`.`email` ='$e'";
mysqli_query($db,$s);
header('location:change.php');
?>



