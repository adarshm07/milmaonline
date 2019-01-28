<!--
	Author: W3layouts
	Author URL: http://w3layouts.com
	License: Creative Commons Attribution 3.0 Unported
	License URL: http://creativecommons.org/licenses/by/3.0/
--><?php
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
    <title>Arable Agriculture Category Bootstrap responsive Web Template | Home :: w3layouts</title>
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
                                <i class="far fa-clock"></i> Mon – Fri : 9:00 -17:00 </li>
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
                    </div>                               <?Php
							
							
							
							$con=mysqli_connect("localhost","root","","milma_magazine");
 $fetchqry = "SELECT image FROM `register` where uname='$a'";
	$result=mysqli_query($con,$fetchqry);
	$num=mysqli_num_rows($result);
	if($num > 0){
    while($row = mysqli_fetch_array($result,MYSQLI_ASSOC)){ ?>

 


                <div class="col-md-3 top-social-icons text-center">
					
					      <tr><td><img src="image/<?php echo $row['image']?>" style="width:50px;  border-radius: 50%;" /> </td>
</tr>  <?php
}}?>
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
                                <form action="#" method="post" class="form-inline my-2 my-lg-0 header-search">
                                    <input class="form-control" type="search" placeholder="Search here..." name="Search" required="">
                                    <button class="btn btn1 my-2 my-sm-0" type="submit"><i class="fas fa-search"></i></button>
                                </form>
                            </div>
                        </nav>

                    </header>
                </div>
            </div>
        </div>
        <!-- main image slider container -->
        <div class="slide-window">
            <div class="slide-wrapper" style="width:300%;">
                <div class="slide">
                    <div class="slide-caption text-center">
                        <p class="text-uppercase">The right choice</p>
                        <h3 class="text-uppercase">Improving agriculture, improving lives.</h3>
                        <div class="cont-btn">
                            <a class="btn text-uppercase" href="contact.html">
                            Contact</a>
                        </div>

                    </div>
                </div>
                <div class="slide slide2">
                    <div class="slide-caption text-center">
                        <p class="text-uppercase">Ready to go</p>
                        <h3 class="text-uppercase">High tech advantages with old fashioned service.</h3>
                        <div class="cont-btn">
                            <a class="btn text-uppercase" href="contact.html">
                            Contact</a>
                        </div>

                    </div>
                </div>
                <div class="slide slide3">
                    <div class="slide-caption text-center">
                        <p class="text-uppercase">The right choice.</p>
                        <h3 class="text-uppercase">Improving agriculture, improving lives.</h3>
                        <div class="cont-btn">
                            <a class="btn text-uppercase" href="contact.html">
                            Contact</a>
                        </div>

                    </div>
                </div>
            </div>
            <div class="slide-controller">
                <div class="slide-control-left">
                    <div class="slide-control-line"></div>
                    <div class="slide-control-line"></div>
                </div>
                <div class="slide-control-right">
                    <div class="slide-control-line"></div>
                    <div class="slide-control-line"></div>
                </div>
            </div>
        </div>
        <!-- main image slider container -->
    </div>
    <!-- end of main image slider container -->

    <!-- banner-bottom-w3layouts -->
    <div class="banner-bottom-w3layouts py-lg-5 py-3">
        <div class="container">
            <div class="inner-sec-w3ls-agileits py-lg-5 py-3">
                <h4 class="sub-tittle text-uppercase text-center">What we do</h4>
                <h3 class="tittle text-center mb-lg-5 mb-3">
                    WHAT WE OFFER</h3>
                <ul class="grid cs-style-5 row">
                    <li class="grid-info-img">
                        <figure>
                            <img src="images/g1.jpg" class="img-fluid" alt="img03">
                            <figcaption>
                                <h3>Vegitables</h3>
                                <span>Lorem ipsum </span>
                                <a href="gallery.html">Gallery</a>
                            </figcaption>
                        </figure>
                    </li>
                    <li class="grid-info-img">
                        <figure>
                            <img src="images/g2.jpg" class="img-fluid" alt="img03">
                            <figcaption>
                                <h3>Berries</h3>
                                <span>Lorem ipsum </span>
                                <a href="gallery.html">Gallery</a>
                            </figcaption>
                        </figure>
                    </li>
                    <li class="grid-info-img">
                        <figure>
                            <img src="images/g3.jpg" class="img-fluid" alt="img03">
                            <figcaption>
                                <h3>Organic Dairy</h3>
                                <span>Lorem ipsum </span>
                                <a href="gallery.html">Gallery</a>
                            </figcaption>
                        </figure>
                    </li>
                    <li class="grid-info-img">
                        <figure>
                            <img src="images/g4.jpg" class="img-fluid" alt="img03">
                            <figcaption>
                                <h3>Seeds</h3>
                                <span>Lorem ipsum </span>
                                <a href="gallery.html">Gallery</a>
                            </figcaption>
                        </figure>
                    </li>
                    <li class="grid-info-img">
                        <figure>
                            <img src="images/g5.jpg" class="img-fluid" alt="img03">
                            <figcaption>
                                <h3>Herbs</h3>
                                <span>Jacob Cummings</span>
                                <a href="gallery.html">Gallery</a>
                            </figcaption>
                        </figure>
                    </li>
                    <li class="grid-info-img">
                        <figure>
                            <img src="images/g6.jpg" class="img-fluid" alt="img03">
                            <figcaption>
                                <h3>Farm</h3>
                                <span>Lorem ipsum </span>
                                <a href="gallery.html">Gallery</a>
                            </figcaption>
                        </figure>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <!--// banner-bottom-w3layouts -->
    <!-- /bottom-last -->
    <section class="bottom-last">
        <div class="bottom-bg py-5 bs-slider-overlay text-left">
            <div class="container">
                <h3 class="tittle text-left"> WHAT WE OFFER</h3>
                <p class="text-white mb-4">Simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.Lorem ipsum dolor sit amet Neque porro quisquam est qui dolorem Lorem int ipsum dolor sit amet.</p>
                <div class="log-in pb-md-5 pb-3">
                    <a class="hover-2 btn text-uppercase" href="single.html">Read More</a>
                </div>
            </div>

        </div>
    </section>
    <!-- //bottom-last -->
    <!-- ab -->
    <section class="banner-bottom-w3layouts bg-light py-lg-5 py-md-5 py-3" id="feature">
        <div class="container">
            <div class="inner-sec-w3ls-agileits py-lg-5 py-3">
                <h4 class="sub-tittle text-uppercase text-center">Features</h4>
                <h3 class="tittle text-center"> Our Great Features</h3>
                <div class="row mt-lg-5 mt-md-4 mt-4">
                    <div class="col-lg-4 about-in text-center">
                        <div class="card">
                            <div class="card-body">
                                <i class="fas fa-list-ul mb-4"></i>
                                <h5 class="card-title">Professional Code</h5>
                                <p class="card-text">Lorem ipsum dolor sit amet consectetur elit,Adipisicing elit tempor.</p>
                            </div>
                        </div>

                    </div>
                    <div class="col-lg-4 about-in text-center">
                        <div class="card">
                            <div class="card-body">
                                <i class="far fa-lightbulb mb-4"></i>
                                <h5 class="card-title">Creative Ideas</h5>
                                <p class="card-text">Lorem ipsum dolor sit amet consectetur elit,Adipisicing elit tempor.</p>
                            </div>
                        </div>

                    </div>

                    <div class="col-lg-4 about-in text-center">
                        <div class="card">
                            <div class="card-body">
                                <i class="far fa-clone mb-4"></i>
                                <h5 class="card-title">Beautiful Blog</h5>
                                <p class="card-text">Lorem ipsum dolor sit amet consectetur elit,Adipisicing elit tempor.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 about-in mt-lg-4 text-center">
                        <div class="card">
                            <div class="card-body">
                                <i class="far fa-heart mb-4"></i>
                                <h5 class="card-title">User Friendly</h5>
                                <p class="card-text">Lorem ipsum dolor sit amet consectetur elit,Adipisicing elit tempor.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 about-in mt-lg-4 text-center">
                        <div class="card">
                            <div class="card-body">
                                <i class="fas fa-magic mb-4"></i>
                                <h5 class="card-title">Modern Design</h5>
                                <p class="card-text">Lorem ipsum dolor sit amet consectetur elit,Adipisicing elit tempor.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 about-in mt-lg-4 text-center">
                        <div class="card">
                            <div class="card-body">
                                <i class="fas fa-sliders-h mb-4"></i>
                                <h5 class="card-title">Portfolio Options</h5>
                                <p class="card-text">Lorem ipsum dolor sit amet consectetur elit,Adipisicing elit tempor.</p>
                            </div>
                        </div>
                    </div>

                </div>

            </div>
        </div>
    </section>
    <!-- //ab -->
    <section class="team-sec main-stats-inner">
        <div class="container-fluid">
            <div class="inner-sec-w3ls-agileits">
                <div class="row stats-con">
                    <div class="col-sm-3 col-6 stats_info counter_grid">

                        <i class="far fa-lightbulb"></i>
                        <p class="counter">645</p>
                        <h4>Projects Done</h4>

                    </div>
                    <div class="col-sm-3 col-6 stats_info counter_grid1">

                        <i class="far fa-heart"></i>
                        <p class="counter">563</p>
                        <h4>Satisfied Clients</h4>

                    </div>
                    <div class="col-md-6 main-stats-inner-img">

                    </div>
                    <div class="col-md-6 main-stats-inner-img two">
                    </div>
                    <div class="col-sm-3 col-6 stats_info counter_grid">

                        <i class="fas fa-magic"></i>
                        <p class="counter">1145</p>
                        <h4>Awards</h4>

                    </div>
                    <div class="col-sm-3 col-6 stats_info counter_grid2">

                        <i class="far fa-smile"></i>
                        <p class="counter">1045</p>
                        <h4>Happy Clients</h4>

                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--/team-->
    <section class="tean-sec py-md-5 py-3" id="team">
        <div class="container">
            <div class="inner-sec-w3ls-agileits py-md-5 py-3">
                <h4 class="sub-tittle text-uppercase text-center">Meet our Team</h4>
                <h3 class="tittle text-center mb-md-5 mb-4">Farmers who love their work</h3>
                <div class="row mb-3">
                    <div class="col-lg-3 team-info">
                        <div class="our-team">
                            <div class="pic">
                                <img src="images/team1.jpg" class="img-fluid" alt="" />

                            </div>
                            <div class="team-content">
                                <h3>Nathan Smith</h3>
                                <span class="post">Agronomist</span>
                            </div>
                            <ul class="social">
                                <li class="mr-1"><a href="#"><span class="fab fa-facebook-f"></span></a></li>
                                <li class="mx-1"><a href="#"><span class="fab fa-twitter"></span></a></li>
                                <li class="mx-1"><a href="#"><span class="fab fa-google-plus-g"></span></a></li>
                                <li class="mx-1"><a href="#"><span class="fab fa-linkedin-in"></span></a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-3 team-info">
                        <div class="our-team active">
                            <div class="pic">
                                <img src="images/team2.jpg" class="img-fluid" alt="" />

                            </div>
                            <div class="team-content">
                                <h3>Laura Palmer</h3>
                                <span class="post">Agronomist</span>
                            </div>
                            <ul class="social">
                                <li class="mr-1"><a href="#"><span class="fab fa-facebook-f"></span></a></li>
                                <li class="mx-1"><a href="#"><span class="fab fa-twitter"></span></a></li>
                                <li class="mx-1"><a href="#"><span class="fab fa-google-plus-g"></span></a></li>
                                <li class="mx-1"><a href="#"><span class="fab fa-linkedin-in"></span></a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-3 team-info">
                        <div class="our-team">
                            <div class="pic">
                                <img src="images/team3.jpg" class="img-fluid" alt="" />
                            </div>
                            <div class="team-content">
                                <h3>Joe Carter</h3>
                                <span class="post">Agronomist </span>
                            </div>
                            <ul class="social">
                                <li class="mr-1"><a href="#"><span class="fab fa-facebook-f"></span></a></li>
                                <li class="mx-1"><a href="#"><span class="fab fa-twitter"></span></a></li>
                                <li class="mx-1"><a href="#"><span class="fab fa-google-plus-g"></span></a></li>
                                <li class="mx-1"><a href="#"><span class="fab fa-linkedin-in"></span></a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-3 team-info">
                        <div class="our-team">
                            <div class="pic">
                                <img src="images/team4.jpg" class="img-fluid" alt="" />
                            </div>
                            <div class="team-content">
                                <h3>Melissa Cox</h3>
                                <span class="post"> Agronomist </span>
                                <ul class="social">
                                    <li class="mr-1"><a href="#"><span class="fab fa-facebook-f"></span></a></li>
                                    <li class="mx-1"><a href="#"><span class="fab fa-twitter"></span></a></li>
                                    <li class="mx-1"><a href="#"><span class="fab fa-google-plus-g"></span></a></li>
                                    <li class="mx-1"><a href="#"><span class="fab fa-linkedin-in"></span></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row mt-lg-5 mt-3">
                    <div class="col-lg-6 progress-info-content">
                        <div class="progress-one">
                            <h4 class="progress-tittle">Milk</h4>
                            <div class="progress">
                                <div class="progress-bar progress-bar-striped" role="progressbar" style="width: 10%" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </div>
                        <div class="progress-one my-lg-4">
                            <h4 class="progress-tittle">Vegitables</h4>
                            <div class="progress">
                                <div class="progress-bar progress-bar-striped bg-success" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </div>
                        <div class="progress-one">
                            <h4 class="progress-tittle">Seeds</h4>
                            <div class="progress">
                                <div class="progress-bar progress-bar-striped bg-info" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 progress-info-content">

                        <div class="progress-one">
                            <h4 class="progress-tittle">Fresh Meat</h4>
                            <div class="progress">
                                <div class="progress-bar progress-bar-striped bg-warning" role="progressbar" style="width: 70%" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </div>
                        <div class="progress-one my-lg-4">
                            <h4 class="progress-tittle">Fruits</h4>
                            <div class="progress">
                                <div class="progress-bar progress-bar-striped bg-secondary" role="progressbar" style="width: 90%" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </div>
                        <div class="progress-one">
                            <h4 class="progress-tittle">
                                Cereals</h4>
                            <div class="progress">
                                <div class="progress-bar progress-bar-striped bg-danger" role="progressbar" style="width: 100%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </div>


                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- //team -->
    <!-- /story -->
    <section class="freebies bg-light pt-md-5 pt-3">
        <div class="container freebies-intro pt-md-5">
            <div class="row">
                <div class="col-md-12">
                    <h4 class="sub-tittle text-uppercase">Our Events</h4>
                    <h3 class="tittle">Latest News</h3>
                </div>
            </div>
            <div class="row mt-4 mt-3">
                <div class="col-md-6 news-content-left">
                    <p>Lorem ipsum dolor sit amet Neque porro quisquam est qui dolorem Lorem int ipsum dolor sit amet when an unknown printer took a galley of type.Vivamus id tempor felis. Cras sagittis mi sit amet malesuada mollis. Mauris porroinit consectetur cursus tortor vel interdum.</p>
                </div>
                <div class="col-md-6 news-content-right">
                    <p>Lorem ipsum dolor sit amet Neque porro quisquam est qui dolorem Lorem int ipsum dolor sit amet when an unknown printer took a galley of type.Vivamus id tempor felis. Cras sagittis mi sit amet malesuada mollis. Mauris porroinit consectetur cursus tortor vel interdum.</p>
                </div>
            </div>
        </div>
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-6 news-grid">
                    <article class="item news fadeIn">
                        <figure class="news-overlay">
                            <figcaption class="overlay">
                                <div class="like-share-wrapper">
                                    <ul>
                                        <li>
                                            <div class="like-button-wrapper">
                                                <a href="#" class="like_button"><i class="far fa-heart"></i></a>
                                                <span class="count">98</span>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                                <div class="freebie-content">
                                    <span class="date">13/05/2018</span>
                                    <h4>Modern Design Template</h4>
                                    <div class="group log-in">
                                        <a class="hover-2 btn text-uppercase" href="single.html">Read More</a>
                                    </div>
                                </div>
                            </figcaption>
                            <img src="images/n1.jpg" class="img-fluid" alt="img03">
                        </figure>
                    </article>
                </div>
                <div class="col-md-6 news-grid">
                    <article class="item news fadeIn">
                        <figure class="news-overlay">
                            <figcaption class="overlay">
                                <div class="like-share-wrapper">
                                    <ul>
                                        <li>
                                            <div class="like-button-wrapper">
                                                <a href="#" class="like_button"><i class="far fa-heart"></i></a>
                                                <span class="count">57</span>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                                <div class="freebie-content">
                                    <span class="date">30/05/2018</span>
                                    <h4>Modern Design Template</h4>
                                    <div class="group log-in">
                                        <a class="hover-2 btn text-uppercase" href="single.html">Read More</a>
                                    </div>
                                </div>
                            </figcaption>
                            <img src="images/n2.jpg" class="img-fluid" alt="img03">
                        </figure>
                    </article>
                </div>
                <div class="col-md-6 news-grid">
                    <article class="item news fadeIn">
                        <figure class="news-overlay">
                            <figcaption class="overlay">
                                <div class="like-share-wrapper">
                                    <ul>
                                        <li>
                                            <div class="like-button-wrapper">
                                                <a href="#" class="like_button"><i class="far fa-heart"></i></a>
                                                <span class="count">49</span>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                                <div class="freebie-content">
                                    <span class="date">03/06/2018</span>
                                    <h4>Modern Design Template</h4>
                                    <div class="group log-in">
                                        <a class="hover-2 btn text-uppercase" href="single.html">Read More</a>
                                    </div>
                                </div>
                            </figcaption>
                            <img src="images/n3.jpg" class="img-fluid" alt="img03">
                        </figure>
                    </article>
                </div>
                <div class="col-md-6 news-grid">
                    <article class="item news fadeIn">
                        <figure class="news-overlay">
                            <figcaption class="overlay">
                                <div class="like-share-wrapper">
                                    <ul>
                                        <li>
                                            <div class="like-button-wrapper">
                                                <a href="#" class="like_button"><i class="far fa-heart"></i></a>
                                                <span class="count">85</span>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                                <div class="freebie-content">
                                    <span class="date">30/07/2018</span>
                                    <h4>Modern Design Template</h4>
                                    <div class="group log-in">
                                        <a class="hover-2 btn text-uppercase" href="single.html">Read More</a>
                                    </div>
                                </div>
                            </figcaption>
                            <img src="images/n4.jpg" class="img-fluid" alt="img03">
                        </figure>
                    </article>
                </div>

            </div>
        </div>
    </section>
    <!-- //story -->
    <!--/testimonials-->
    <section class="clients py-md-5 py-3" id="clients">
        <div class="container">
            <div class="inner-sec-w3ls-agileits py-md-5 py-3">
                <h4 class="sub-tittle text-uppercase text-center">Lovely Clients</h4>
                <h3 class="tittle text-center mb-md-5 mb-4">Testimonials</h3>
                <div class="owl-carousel owl-theme">
                    <div class="item">
                        <div class="feedback-info text-left">
                            <div class="feedback-top">
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit sedc dnmo eiusmod tempor incididunt ut labore.Simply dummy text of the printing and typesetting industry.</p>
                            </div>
                            <div class="feedback-grids">
                                <div class="feedback-img">
                                    <img src="images/t1.jpg" class="img-fluid rounded-circle" alt="" />
                                </div>
                                <div class="feedback-img-info">
                                    <h5>Mary Jane</h5>
                                    <p>United States
                                        <span>(Company)</span>
                                    </p>
                                </div>
                                <div class="clearfix"> </div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="feedback-info text-left">

                            <div class="feedback-top">

                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit sedc dnmo eiusmod tempor incididunt ut labore.Simply dummy text of the printing and typesetting industry.</p>
                            </div>
                            <div class="feedback-grids">
                                <div class="feedback-img">
                                    <img src="images/t3.jpg" class="img-fluid rounded-circle" alt="" />
                                </div>
                                <div class="feedback-img-info">
                                    <h5>Steven Wilson</h5>
                                    <p>United States
                                        <span>(Company)</span>
                                    </p>
                                </div>
                                <div class="clearfix"> </div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="feedback-info text-left">
                            <div class="feedback-top">
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit sedc dnmo eiusmod tempor incididunt ut labore.Simply dummy text of the printing and typesetting industry.</p>
                            </div>
                            <div class="feedback-grids">
                                <div class="feedback-img">
                                    <img src="images/t2.jpg" class="img-fluid rounded-circle" alt="" />
                                </div>
                                <div class="feedback-img-info">
                                    <h5>Peter guptill</h5>
                                    <p>Vestibulum <span>(Company)</span></p>
                                </div>
                                <div class="clearfix"> </div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="feedback-info text-left">

                            <div class="feedback-top">

                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit sedc dnmo eiusmod tempor incididunt ut labore.Simply dummy text of the printing and typesetting industry.</p>
                            </div>
                            <div class="feedback-grids">
                                <div class="feedback-img">
                                    <img src="images/t3.jpg" class="img-fluid rounded-circle" alt="" />
                                </div>
                                <div class="feedback-img-info">
                                    <h5>Steven Wilson</h5>
                                    <p>United States
                                        <span>(Company)</span>
                                    </p>
                                </div>
                                <div class="clearfix"> </div>
                            </div>
                        </div>
                    </div>


                </div>
            </div>
        </div>
    </section>
    <!--//testimonials-->
    <!-- /newsletter-->
    <div class="newsletter py-lg-5 py-4 text-center">
        <div class="newsletter-inner py-lg-5 py-4">
            <h3 class="tittle text-center mb-lg-5 mb-3">
                Don't forget to Sign up</h3>
            <div class="newsright">
                <form action="#" method="post" class="d-flex">
                    <input class="form-control" type="email" placeholder="" name="email" required="">
                    <input class="form-control" type="submit" value="Subscribe">
                </form>
            </div>
        </div>
    </div>
    <!-- //newsletter-->
    <!--footer -->
    <footer class="footer-emp-wthree bg-dark dotts py-lg-5 py-3">
        <div class="container">
            <div class="row footer-top">
                <div class="col-lg-4 footer-grid-w3ls">
                    <div class="footer-title">
                        <h3>About Us</h3>
                    </div>
                    <div class="footer-text">
                        <p>Curabitur non nulla sit amet nislinit tempus convallis quis ac lectus. lac inia eget consectetur sed, convallis at tellus. Nulla porttitor accumsana tincidunt.</p>
                        <ul class="social-icons">
                            <li class="mr-1"><a href="#"><span class="fab fa-facebook-f"></span></a></li>
                            <li class="mx-1"><a href="#"><span class="fab fa-twitter"></span></a></li>
                            <li class="mx-1"><a href="#"><span class="fab fa-google-plus-g"></span></a></li>
                            <li class="mx-1"><a href="#"><span class="fab fa-linkedin-in"></span></a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-4 footer-grid-w3ls">
                    <div class="footer-title">
                        <h3>Get in touch</h3>
                    </div>
                    <div class="contact-info">
                        <h4>Location :</h4>
                        <p>0926k 4th block building, king Avenue, New York City.</p>
                        <div class="phone">
                            <h4>Contact :</h4>
                            <p>Phone : +121 098 8907 9987</p>
                            <p>Email :
                                <a href="mailto:info@example.com">info@example.com</a>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 footer-grid-w3ls">
                    <div class="footer-title">
                        <h3>Quick Links</h3>
                    </div>
                    <ul class="links">
                        <li>
                            <a href="index.html">Home</a>
                        </li>
                        <li>
                            <a href="about.html">About</a>
                        </li>
                        <li>
                            <a href="gallery.html">Gallery</a>
                        </li>
                        <li>
                            <a href="pricing.html">Services</a>
                        </li>
                        <li>
                            <a href="contact.html">Contact Us</a>
                        </li>
                    </ul>
                    <ul class="links">
                        <li>
                            <a href="services.html">Features</a>
                        </li>
                        <li>
                            <a href="contact.html">Support</a>
                        </li>
                        <li>
                            <a href="blog.html">Blog</a>
                        </li>
                    </ul>

                    <div class="clearfix"></div>
                </div>
            </div>
            <div class="copyright-w3 mt-4">
                <p class="copy-right text-center ">&copy; 2018 Arable. All Rights Reserved | Design by
                    <a href="http://w3layouts.com/"> W3layouts </a>
                </p>
            </div>
        </div>
    </footer>
    <!-- //footer -->

    <!--model-forms-->
    <!--/Login-->
    <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header text-center">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">

                    <div class="login px-4 mx-auto mw-100">
                        <h5 class="text-center mb-4">Login Now</h5>
                        <form action="#" method="post">
                            <div class="form-group">
                                <label class="mb-2">Email address</label>
                                <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="" required="">
                                <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                            </div>
                            <div class="form-group">
                                <label class="mb-2">Password</label>
                                <input type="password" class="form-control" id="exampleInputPassword1" placeholder="" required="">
                            </div>
                            <div class="form-check mb-2">
                                <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                <label class="form-check-label" for="exampleCheck1">Check me out</label>
                            </div>
                            <button type="submit" class="btn btn-primary submit mb-4">Sign In</button>
                            <p class="text-center pb-4">
                                <a href="#" data-toggle="modal" data-target="#exampleModalCenter2"> Don't have an account?</a>
                            </p>
                        </form>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <!--//Login-->
    <!--/Register-->
    <div class="modal fade" id="exampleModalCenter2" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header text-center">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="login px-4 mx-auto mw-100">
                        <h5 class="text-center mb-4">Register Now</h5>
                        <form action="#" method="post">
                            <div class="form-group">
                                <label>First name</label>

                                <input type="text" class="form-control" id="validationDefault01" placeholder="" required="">
                            </div>
                            <div class="form-group">
                                <label>Last name</label>
                                <input type="text" class="form-control" id="validationDefault02" placeholder="" required="">
                            </div>

                            <div class="form-group">
                                <label class="mb-2">Password</label>
                                <input type="password" class="form-control" id="password1" placeholder="" required="">
                            </div>
                            <div class="form-group">
                                <label>Confirm Password</label>
                                <input type="password" class="form-control" id="password2" placeholder="" required="">
                            </div>

                            <button type="submit" class="btn btn-primary submit mb-4">Register</button>
                            <p class="text-center pb-4">
                                <a href="#">By clicking Register, I agree to your terms</a>
                            </p>
                        </form>

                    </div>
                </div>

            </div>
        </div>
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