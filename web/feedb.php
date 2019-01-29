<?php
session_start();

$a=$_SESSION['uname'];

if($a=="")
{
header('location:.././');
}
?>
<!DOCTYPE html>
<html lang="zxx">

<head>
    <title>Milma</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="utf-8">
    <meta name="keywords" content="Arable a Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
    <script>
        addEventListener("load", function() {
            setTimeout(hideURLbar, 0);
        }, false);

        function hideURLbar() {
            window.scrollTo(0, 1);
        }
    </script>
    <link href="css/bootstrap.css" rel='stylesheet' type='text/css' />
    <link rel="stylesheet" href="css/component.css" type="text/css" media="all">
    <link href="css/style.css" rel='stylesheet' type='text/css' />
    <link rel="stylesheet" href="css/owl.theme.css" type="text/css" media="all">
    <link rel="stylesheet" href="css/owl.carousel.css" type="text/css" media="screen" property="" />
    <link href="css/minimal-slider.css" rel='stylesheet' type='text/css' />
    <link href="css/fontawesome-all.css" rel="stylesheet">
    <link href="//fonts.googleapis.com/css?family=Josefin+Sans:100,100i,300,300i,400,400i,600,600i,700,700i" rel="stylesheet">
    <link href="//fonts.googleapis.com/css?family=BenchNine:300,400,700" rel="stylesheet">
    <style>
        .select{
            text-transform: none;
    border: 1px solid;
    width: 400px;
    padding: 10px;
    margin: 10px;
        }
        </style>
</head>

<body>
    <div class="mian-content">

        <div class="header-top-w3layouts-agile">
            <div class="top-head-wthree text-left">
                <div class="row top-content-info">
                    <div class="col-lg-6 top-content-left">
                        <ul class="header-info-w3ls">
                            <li>
                                <i class="far fa-envelope"></i> <a href="mailto:info@example.com">mail@example.com</a>
                            </li>
                            <li>
                                <i class="fas fa-phone"></i> <a href="tel:+02223688199">+0222 3688 199</a>
                            </li>
                            <li>
                                <i class="far fa-clock"></i> Mon � Fri : 9:00 -17:00 </li>
                        </ul>
                    </div>
                    <div class="col-lg-6 top-content-right">
                        <div class="land-gd">
                            <div class="hd-sc-one">
                                <div class="land-image text-center">
                                    <i class="fas fa-map-signs"></i>
                                </div>
                                <div class="land-content">
                                    <h4>The Best Landscaping</h4>

                                </div>

                            </div>
                        </div>
                        <div class="land-gd">
                            <div class="hd-sc-one">
                                <div class="land-image text-center">
                                    <i class="fas fa-shield-alt"></i>
                                </div>
                                <div class="land-content">
                                    <h4>Certified Company</h4>

                                </div>
                                <div class="clearfix"></div>
                            </div>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                </div>
            </div>
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-3 top-social-icons text-center">
                        <ul class="social-icons">
                            <li class="mr-1"><a href="#"><span class="fab fa-facebook-f"></span></a></li>
                            <li class="mx-1"><a href="#"><span class="fab fa-twitter"></span></a></li>
                            <li class="mx-1"><a href="#"><span class="fab fa-google-plus-g"></span></a></li>
                            <li class="mx-1"><a href="#"><span class="fab fa-linkedin-in"></span></a></li>
                        </ul>
                    </div>
                    <div class="col-md-6 logo text-center">
                        <h1>
                            <a class="navbar-brand" href="index.html">
                            <i class="fas fa-leaf"></i>Milma</a>
                        </h1>
                    </div>                          

 


                <div class="col-md-3 top-social-icons text-center">
					
                <!--  <a class="request text-uppercase" href="#" data-toggle="modal" data-target="#exampleModalCenter">Sign In</a>
                        <a class="request text-uppercase" href="#" data-toggle="modal" data-target="#exampleModalCenter2">Sign Up</a>-->
                    </div>
                </div>
            </div>
            <div class="header-bg">
                <div class="container">
                    <header>
                        <nav class="navbar navbar-expand-lg navbar-light">
                            <button class="navbar-toggler navbar-toggler-right mx-auto" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
						<span class="navbar-toggler-icon"></span>
				   </button>

                   <div class="collapse navbar-collapse" id="navbarSupportedContent">
                                <ul class="navbar-nav mr-lg-auto text-left">
                                    <li class="nav-item active">
                                        <a class="nav-link" href="mainhome.php">Home
                                        <span class="sr-only">(current)</span>
                                    </a>
                                    </li>
                                     <li class="nav-item ">
                                        <a class="nav-link" href="ordermilk.php">Order 
                                        <span class="sr-only"></span>
                                    </a>
                                    </li>
                                    <li class="nav-item ">
                                        <a class="nav-link" href="feedb.php">Feedback<span class="sr-only"></span>
                                    </a>
</li>
                                    <li class="nav-item dropdown">
                                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <?php echo $a;?>
                                        <i class="fas fa-angle-down"></i>
                                    </a>
                                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                            <a class="dropdown-item" href="#"></a>
                                            <a class="dropdown-item" href="change.php" title="">Change Password</a>

                                            <a class="dropdown-item" href="logout.php" title="">Logout</a>
                                        </div>
                                    </li>
                                   
                                </ul>
                              
                            </div>
                        </nav>

                    </header>
                </div>
            </div>
        </div>
        <!-- main image slider container -->
		<br /><br /><br />
		<div class="container" style="text-align:center;">
   
								<center><table>
                                <h2>Feedback</h2>
                                <br>
								<tr><form method="post" action="feedbc.php">
                                <th>Name</th><td><input type="text" name="name" class="select"></td></tr>
                                <th>Email</th><td><input type="text" name="email" class="select"></td></tr>
								<th>Choose Category</th><td>
                                    <select name="category" class="select">
                                        <option>Product</option>
                                        <option>Delivery</option>
                                        <option>Employee</option>
                                    </select>
                                </td>
								</tr>
								<tr>
								<th>Feedback</th><td><textarea name="feedb" class="select"></textarea></td>
								</tr>
								<tr><td><input type="submit" value="Submit" name="submit"  /></td></form></tr>
								</table>
					
						
                                </div>
                                
    <!--//Register-->

    <!--//model-form-->
    <!-- js -->
    <script src="js/jquery-2.2.3.min.js"></script>
    <script src="js/minimal-slider.js"></script>
    <script src="js/toucheffects.js"></script>
    <script src="js/modernizr.custom.js"></script>
    <!-- carousel -->
    <script src="js/owl.carousel.js"></script>
    <script>
        $(document).ready(function() {
            $('.owl-carousel').owlCarousel({
                loop: true,
                margin: 10,
                responsiveClass: true,
                responsive: {
                    0: {
                        items: 1,
                        nav: true
                    },
                    600: {
                        items: 1,
                        nav: false
                    },
                    900: {
                        items: 1,
                        nav: false
                    },
                    1000: {
                        items: 2,
                        nav: true,
                        loop: false,
                        margin: 20
                    }
                }
            })
        })
    </script>
    <!-- //carousel -->
    <script>
        $(document).ready(function() {
            $(".dropdown").hover(
                function() {
                    $('.dropdown-menu', this).stop(true, true).slideDown("fast");
                    $(this).toggleClass('open');
                },
                function() {
                    $('.dropdown-menu', this).stop(true, true).slideUp("fast");
                    $(this).toggleClass('open');
                }
            );
        });
    </script>
    <!-- //dropdown nav -->
    <!-- stats -->
    <script src="js/jquery.waypoints.min.js"></script>
    <script src="js/jquery.countup.js"></script>
    <script>
        $('.counter').countUp();
    </script>
    <!-- //stats -->
    <!-- password-script -->
    <script>
        window.onload = function() {
            document.getElementById("password1").onchange = validatePassword;
            document.getElementById("password2").onchange = validatePassword;
        }

        function validatePassword() {
            var pass2 = document.getElementById("password2").value;
            var pass1 = document.getElementById("password1").value;
            if (pass1 != pass2)
                document.getElementById("password2").setCustomValidity("Passwords Don't Match");
            else
                document.getElementById("password2").setCustomValidity('');
            //empty string means no validation error
        }
    </script>
    <!-- //password-script -->

    <!--/ start-smoth-scrolling -->
    <script src="js/move-top.js"></script>
    <script src="js/easing.js"></script>
    <script>
        jQuery(document).ready(function($) {
            $(".scroll").click(function(event) {
                event.preventDefault();
                $('html,body').animate({
                    scrollTop: $(this.hash).offset().top
                }, 900);
            });
        });
    </script>
    <script>
        $(document).ready(function() {
            /*
            						var defaults = {
            							  containerID: 'toTop', // fading element id
            							containerHoverID: 'toTopHover', // fading element hover id
            							scrollSpeed: 1200,
            							easingType: 'linear' 
            						 };
            						*/

            $().UItoTop({
                easingType: 'easeOutQuart'
            });

        });
    </script>
    <!--// end-smoth-scrolling -->
    <!-- /js -->
    <script src="js/bootstrap.js"></script>
    <!-- //js -->
</body>

</html>