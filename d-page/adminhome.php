<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<link rel="icon" type="image/png" href="assets/img/favicon.ico">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />



	<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />


    <!-- Bootstrap core CSS     -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet" />

    <!-- Animation library for notifications   -->
    <link href="assets/css/animate.min.css" rel="stylesheet"/>

    <!--  Light Bootstrap Table core CSS    -->
    <link href="assets/css/light-bootstrap-dashboard.css?v=1.4.0" rel="stylesheet"/>



    <!--     Fonts and icons     -->
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Roboto:400,700,300' rel='stylesheet' type='text/css'>
    <link href="assets/css/pe-icon-7-stroke.css" rel="stylesheet" />

</head>
<body>

<div class="wrapper">
    <div class="sidebar" data-color="purple" data-image="assets/img/sidebar-5.jpg">

    <!--

        Tip 1: you can change the color of the sidebar using: data-color="blue | azure | green | orange | red | purple"
        Tip 2: you can also add an image using data-image tag

    -->

    	<div class="sidebar-wrapper">
            <div class="logo">
             <h2 style="font-weight:bolder;">MILMA</h2>
            </div>

            <ul class="nav">
                <li class="active">
                    <a href="adminhome.php">
                        <i class="pe-7s-user"></i>
                        <p>View Users</p>
                    </a>
                </li>
                <li>
                    <a href="employee.php">
                        <i class="pe-7s-user"></i>
                        <p>View Employees</p>
                    </a>
                </li>
                <li>
                    <a href="orders.php">
                        <i class="pe-7s-user"></i>
                        <p>View Orders</p>
                    </a>
                </li>
			
            </ul>
    	</div>
    </div>

    <div class="main-panel">
        <nav class="navbar navbar-default navbar-fixed">
            <div class="container-fluid">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navigation-example-2">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="#">Dashboard</a>
					 <a class="navbar-brand" href="logout.php">Logout</a>
                </div>
                <div class="collapse navbar-collapse">
                    <ul class="nav navbar-nav navbar-left">
                        <li>
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                <i class="fa fa-dashboard"></i>
								<p class="hidden-lg hidden-md">Dashboard</p>
                            </a>
                        </li>
                       
						<li class="separator hidden-lg"></li>
                    </ul>
                </div>
            </div>
        </nav>


        <div class="content">
            <div class="container-fluid">

                        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
                         <div class="container">
	<div style="height:50px;"></div>
	<div class="well" style="margin:auto; padding:auto; width:80%;">
	<span style="font-size:25px; color:blue"><center><strong>Users</strong></center></span>	
		<div style="height:50px;"></div>
		<table class="table table-striped table-bordered table-hover">
			<thead>
				<th>Firstname</th>
				<th>Lastname</th>
				<th>Email</th>
				<th>Action</th>
            </thead>
            
            <?php
				include('conn.php');
 
				$query=mysqli_query($conn,"select * from `register` where uname!='admin'");
				while($row=mysqli_fetch_array($query)){
					?>

                   
                      <tbody><br />
                        <tr>
                          <td>
                             <?Php echo $row['uname'];    ?>
                          </td>
                          <td>
                            <?Php echo $row['lname'];    ?>
                          </td>
                        
                          <td>
                              <?Php echo $row['email'];    ?>
                          </td>
                          <td>
							<a href="#del<?php echo $row['id']; ?>" data-toggle="modal" class="btn btn-danger"><span class="glyphicon glyphicon-trash"></span> Delete</a>
							<?php include('button.php'); ?>
						</td>
					</tr>
					<?php
				}
 
			?>
			</tbody>
		</table>
	</div>
                  

                          
                        </div>
                    </div>

                    </div>
                </div>
</div>


              


     

    </div>
</div>


</body>

    <!--   Core JS Files   -->
    <script src="assets/js/jquery.3.2.1.min.js" type="text/javascript"></script>
	<script src="assets/js/bootstrap.min.js" type="text/javascript"></script>



	<script type="text/javascript">
    	$(document).ready(function(){

        	demo.initChartist();

        	$.notify({
            	icon: 'pe-7s-gift',
            	message: "Welcome <b>Admin"

            },{
                type: 'info',
                timer: 4000
            });

    	});
	</script>

</html>
