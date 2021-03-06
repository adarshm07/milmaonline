<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Login V13</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/iconic/css/material-design-iconic-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
<!--===============================================================================================-->
</head>
<body style="background-color: #999999;">
	<script type='text/javascript'>
function preview_image(event) 
{
 var reader = new FileReader();
 reader.onload = function()
 {
  var output = document.getElementById('output_image');
  output.src = reader.result;
 }
 reader.readAsDataURL(event.target.files[0]);
}
</script><style>#output_image
{
text-align:center;
 max-width:150px;
}</style>
	<div class="limiter">
		<div class="container-login100">
			<div class="login100-more" style="background-image: url('images/bg-01.jpg');"></div>

			<div class="wrap-login100 p-l-50 p-r-50 p-t-72 p-b-50">
				<form class="login100-form validate-form" method="post" enctype="multipart/form-data" >
					<span class="login100-form-title p-b-59">
						Employee Sign Up
					</span>

					<div class="wrap-input100 validate-input" data-validate="Name is required">
						<span class="label-input100">User Name</span>
						<input class="input100" type="text" name="name" placeholder="Name...">
						<span class="focus-input100"></span>
					</div>
	<div class="wrap-input100 validate-input" data-validate="Username is required">
						<span class="label-input100">Address</span>
						<input class="input100" type="text" name="address" placeholder="Address...">
						<span class="focus-input100"></span>
					</div>
					<div class="wrap-input100 validate-input" data-validate="Username is required">
						<span class="label-input100">DOB</span>
						<input class="input100" type="date" name="dob" placeholder="Address...">
						<span class="focus-input100"></span>
					</div>	<div class="wrap-input100 validate-input" data-validate="Username is required">
						<span class="label-input100">Gender</span>
						<select name="gender"><option>Male</option><option>Female</option>
						<span class="focus-input100"></span>
					</div>
					<div class="wrap-input100 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
						<span class="label-input100">Email</span>
						<input class="input100" type="text" name="email" placeholder="Email addess...">
						<span class="focus-input100"></span>
					</div>
	<div class="wrap-input100 validate-input" data-validate="Username is required">
						<span class="label-input100">Mobile</span>
						<input class="input100" type="designation" name="mobile" placeholder="Address...">
						<span class="focus-input100"></span>
					</div>
				
	<div class="wrap-input100 validate-input" data-validate="Username is required">
						<span class="label-input100">Designation</span>
						<input class="input100" type="text" name="designation" placeholder="Address...">
						<span class="focus-input100"></span>
					</div>
					<div class="wrap-input100 validate-input" data-validate = "Password is required">
						<span class="label-input100">Password</span>
						<input class="input100" type="password" name="pass" placeholder="*************">
						<span class="focus-input100"></span>
					</div>

					<div class="wrap-input100 validate-input" data-validate = "Repeat Password is required">
						<span class="label-input100">Confirm Password</span>
						<input class="input100" type="password" name="pass2" placeholder="*************">
						<span class="focus-input100"></span>
					</div>	<div class="wrap-input100 validate-input" data-validate = "Repeat Password is required">
						<span class="label-input100">Profile Pic</span>
<img id="output_image"/><input  class="input100" type="file" name="upload" accept="image/*" onChange="preview_image(event)" placeholder="Profile Picture"><span class="focus-input100"></span>
					</div>
						</button>
					<div class="flex-m w-full p-b-33">
						
						
					</div>

					<div class="container-login100-form-btn">
						<div class="wrap-login100-form-btn">
							<div class="login100-form-bgbtn"></div>
							<button class="login100-form-btn" name="register">
								Sign Up
							</button>
						</div>

						<a href="empindex.php" class="dis-block txt3 hov1 p-r-30 p-t-10 p-b-10 p-l-30">
							Sign in
							<i class="fa fa-long-arrow-right m-l-5"></i>
						</a>
					</div>
				</form>
			</div>
		</div>
	</div>
	<?php


	define('DB_SERVER', 'localhost');
	define('DB_USERNAME', 'root');
	define('DB_PASSWORD', '');
	define('DB_DATABASE', 'milma_magazine');
	$db = mysqli_connect(DB_SERVER,DB_USERNAME,DB_PASSWORD,DB_DATABASE);



	$msg = "";

if(isset($_POST['register']))
{
$date = date('Y-m-d ');
$old=$_FILES['upload']['tmp_name'];
$new="image/".$_FILES['upload']['name'];
move_uploaded_file($old,$new);
$pwd=$_POST['pass'];
$wp=md5($pwd);
if ($_POST['pass']!= $_POST['pass2'])
 {?>
 <script>alert('Oops! Password did not match! Try again.');</script>
 <?php
   
 }else{
			$query = mysqli_query($db, "INSERT INTO empreg values('null','".$_POST['name']."','".$_POST['address']."','".$_POST['dob']."','".$_POST['gender']."','".$_POST['email']."','".$_POST['mobile']."','".$_POST['designation']."','$wp','".$_FILES['upload']['name']."','$date')");
			?>
 <script>alert('Thank You! you are now registered');
 window.location.href = "web/empindex.php";</script>
 <?php
			}
		}
	

?>
				

<!--===============================================================================================-->
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/daterangepicker/moment.min.js"></script>
	<script src="vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script src="vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
	<script src="js/main.js"></script>

</body>
</html>s