<?php
include 'config.php';
				session_start();
//if(isset($_SESSION['id'])){


 ?>
<!doctype html>
<html lang="en">

<!-- Mirrored from colorlib.com/preview/theme/Velvet Escape/ by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 25 Feb 2019 12:45:55 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
<head>

<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<link rel="icon" href="img/favicon.png" type="image/png">
<title>Velvet Escape Adventure</title>

<link rel="stylesheet" href="css/bootstrap.css">
<link rel="stylesheet" href="vendors/linericon/style.css">
<link rel="stylesheet" href="css/font-awesome.min.css">
<link rel="stylesheet" href="css/magnific-popup.css">
<link rel="stylesheet" href="vendors/owl-carousel/owl.carousel.min.css">
<link rel="stylesheet" href="vendors/nice-select/css/nice-select.css">

<link rel="stylesheet" href="css/style.css">
</head>
<body>

<header class="header_area">
<div class="main_menu">
<nav class="navbar navbar-expand-lg navbar-light">
<div class="container">

<a class="navbar-brand logo_h" href="index.php"><img src="img/1.PNG" alt=""></a>
<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
<span class="icon-bar"></span>
<span class="icon-bar"></span>
<span class="icon-bar"></span>
</button>

<div class="collapse navbar-collapse offset" id="navbarSupportedContent">
<ul class="nav navbar-nav menu_nav ml-auto">
<li class="nav-item active"><a class="nav-link" href="index.php">Home</a></li>

<li class='nav-item'>
    <?php if (isset($_SESSION['username'])) {
									echo "<a class='nav-link' href='packages.php'>Planning Trip</a>";
									# code...
								} else {
									# code...
									echo "<a class='nav-link' href='login.php'>Planning Trip</a>";
								}
								 ?>
</li>";

<li class="nav-item submenu dropdown">
     <?php if (isset($_SESSION['username'])) {

			echo "<a href='suggestion.php' class='nav-link'>Suggestion</a>";


		}


     else{
         echo "<a href='login.php' class='nav-link'>Suggestion</a>";

     }

								 ?>


<li class="nav-item"><a class="nav-link" href="contact.php">Contact</a></li>
</ul>
<ul class="nav navbar-nav ml-auto">
<li class="nav-item">
   <?php if (isset($_SESSION['username'])) {
									echo "<a href='logout.php' class='primary-btn'>". $_SESSION['username']."</a>";
									# code...
								} else {
									# code...
									echo "<a href='login.php' class='primary-btn'>login</a>";
								}
								 ?>

</li>
<li class="nav-item">
<button type="button" class="search nav-link">
<i class="lnr lnr-magnifier" id="search"></i>
</button>
</li>
</ul>
</div>
</div>
</nav>
<div class="search_input" id="search_input_box">
<div class="container">
<form class="d-flex justify-content-between">
<input type="text" class="form-control" id="search_input" placeholder="Search Here">
<button type="submit" class="btn"></button>
<span class="lnr lnr-cross" id="close_search" title="Close Search"></span>
</form>
</div>
</div>
</div>
</header>


<section class="home_banner_area">
<div class="banner_inner">
<div class="container">
<div class="row fullscreen d-flex align-items-center justify-content-center">
<div class="banner_content">
<p>Plan a trip to Santorini Village</p>
<h2>Velvet Escape Adventure</h2>
</div>
</div>
</div>
</div>
</section>


<section class="feature-area section_gap_top">
<div class="container">
<div class="row align-items-end justify-content-left">
<div class="col-lg-12">
<div class="main_title">
<p>We’re Offering these Popular Services</p>
<h1>Getting Adventure with Services</h1>
<span class="title-widget-bg"></span>
</div>
</div>
</div>
<div class="row">

<div class="col-lg-4 col-md-6">
<div class="single-feature">
<div class="feature-details">
<h5>Desert Riding Turning <br>
So much Flowery</h5>
<p>
Lorem ipsum dolor sit amet, consecter adipisicing elit, sed do eiusmod tempor incididunt.
</p>
<a href="#" class="primary-btn mb-40">Read More</a>
</div>
<div class="feature-thumb">
<img class="img-fluid" src="img/service/s1.png" alt="">
</div>
</div>
</div>

<div class="col-lg-4 col-md-6">
<div class="single-feature">
<div class="feature-details">
<h5>Relaxation in the <br>
Local Beach Campfire</h5>
<p>
Lorem ipsum dolor sit amet, consecter adipisicing elit, sed do eiusmod tempor incididunt.
</p>
<a href="#" class="primary-btn mb-40">Read More</a>
</div>
<div class="feature-thumb">
<img class="img-fluid" src="img/service/s2.png" alt="">
</div>
</div>
</div>

<div class="col-lg-4 col-md-6">
<div class="single-feature">
<div class="feature-details">
<h5>Forest Exploration <br>
with Energy Package</h5>
<p>
Lorem ipsum dolor sit amet, consecter adipisicing elit, sed do eiusmod tempor incididunt.
</p>
<a href="#" class="primary-btn mb-40">Read More</a>
</div>
<div class="feature-thumb">
<img class="img-fluid" src="img/service/s3.png" alt="">
</div>
</div>
</div>
</div>
</div>
</section>


<div class="cta-area section_gap">
<div class="container">
<div class="row">
<div class="col-lg-5">
<h1>Get Ready for
Real time Adventure</h1>
<p>
Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt
ut labore et dolore magna aliqua. Ut enim ad minim veniam quis nostrud exercitation.
</p>
     <?php if (isset($_SESSION['username'])) {
									echo "<a href='packages.php' class='primary-btn'>planning  a Trip</a>";
									# code...
								} else {
									# code...
									echo "<a href='login.php' class='primary-btn'>planning  a Trip</a>";
								}
								 ?>

</div>
<div class="offset-lg-1 col-lg-6">
<img class="cta-img img-fluid" src="img/cta-img.png" alt="">
</div>
</div>
</div>
</div>



<?php
include 'config.php';
                       $id =  $_SESSION['id'];
   				$qur = "SELECT * FROM question WHERE user_id = '$id'";
   				$dqur = mysqli_query($LINK,$qur);
   				while ($find = mysqli_fetch_array($dqur)) {


              $_SESSION['user_id']           = $user_id             = $find[0];
              $_SESSION['number_of_people']  = $number_of_people    = $find[1];
              $_SESSION['duration']          = $duration            = $find[2];
              $_SESSION['type']              = $type                = $find[3];
              $_SESSION['season']            = $season              = $find[4];
              $_SESSION['activities']        = $activities          = $find[5];
              $_SESSION['theme']             = $theme               = $find[6];
              $_SESSION['budget']            = $budget              = $find[7];
              $_SESSION['living']            = $living              = $find[8];

   					}

 if (isset($user_id)){
             echo"           <section class='popular-places-area section_gap_bottom'>
							<div class='container'>
								<div class='row d-flex justify-content-center'>
									<div class='col-lg-12'>
										<div class='main_title'>
											<p>We’re Offering these Trip Packages </p>
											<h1>Popular Places Around the World</h1>
											<span class='title-widget-bg'></span>
										</div>
									</div>

								</div>
							</div>
							<div class='popular-places-slider owl-carousel'>

";

								 $sql = "SELECT * FROM `place` WHERE place_category = '$type' OR place_season = '$season' OR in_place = '$activities' OR place_theme = '$theme' OR place_range = '$budget' OR place_stay = '$living' LIMIT $duration  ";
								 $result = mysqli_query($LINK,$sql);

								 while( $data = mysqli_fetch_array($result))
								 {
									 echo "
							
								<a href='img/$data[4]' class='single-popular-places d-block img-gal'>
									<div class='popular-places-img'>
										<img src='img/$data[4]' alt=''>
									</div>
									<div class='popular-places-text'>
										<p>$data[1]</p>
										<h4>
											$data[5]
										</h4>
									</div>
								</a>

							";
								 }}
								  else{ echo"
<section class='popular-places-area section_gap_bottom'>
							<div class='container'>
								<div class='row d-flex justify-content-center'>
									<div class='col-lg-12'>
										<div class='main_title'>
											<p>We’re sorry </p>
											<h1>we haven't any information about you .</h1>
											<span class='title-widget-bg'></span>
										</div>
									</div>
								</div>
							</div>
								    ";
                                 }





?>
</div>
</section>


<section class="team_area">
<div class="container">
<div class="row d-flex justify-content-center">
<div class="col-lg-12">
<div class="main_title">
<p>We’re Offering these Trip Packages</p>
<h1>Intelligent Team Members</h1>
<span class="title-widget-bg"></span>
</div>
</div>
</div>
<div class="row team_inner">
<div class="col-lg-3 col-md-6">
<div class="team_item">
<div class="team_img">
<img class="img-fluid w-100" src="img/team/team-1.jpg" alt="">
<div class="hover">
<h4>Randy Weaver</h4>
<p>Senior Barrister at law</p>
</div>
</div>
</div>
</div>
<div class="col-lg-3 col-md-6">
<div class="team_item">
<div class="team_img">
<img class="img-fluid w-100" src="img/team/team-2.jpg" alt="">
<div class="hover">
<h4>Randy Weaver</h4>
<p>Senior Barrister at law</p>
</div>
</div>
</div>
</div>
<div class="col-lg-3 col-md-6">
<div class="team_item">
<div class="team_img">
<img class="img-fluid w-100" src="img/team/team-3.jpg" alt="">
<div class="hover">
<h4>Randy Weaver</h4>
<p>Senior Barrister at law</p>
</div>
</div>
</div>
</div>
<div class="col-lg-3 col-md-6">
<div class="team_item">
<div class="team_img">
<img class="img-fluid w-100" src="img/team/team-4.jpg" alt="">
<div class="hover">
<h4>Randy Weaver</h4>
<p>Senior Barrister at law</p>
</div>
</div>
</div>
</div>
</div>
</div>
</section>




<footer class="footer-area">
<div class="footer_top section_gap_top">
<div class="container">
<div class="row">
<div class="col-lg-3 col-md-6 col-sm-6">
<div class="single-footer-widget">
<h5 class="footer_title">About Agency</h5>
<p class="about-text">The world has become so fast paced that people don’t want to stand by reading a page of information, they would much rather look at a presentation and understand the message. It has come to a point where images and videos are used more to </p>
</div>
</div>
<div class="col-lg-2 col-md-6 col-sm-6">
<div class="single-footer-widget">
<h5 class="footer_title">Navigation Links</h5>
<div class="row">
<div class="col-5">
<ul class="list">
<li><a href="#">Home</a></li>
<li><a href="#">Features</a></li>
<li><a href="#">Services</a></li>
<li><a href="#">Portfolio</a></li>
</ul>
</div>
<div class="col-5">
<ul class="list">
<li><a href="#">Team</a></li>
<li><a href="#">Pricing</a></li>
<li><a href="#">Blog</a></li>
<li><a href="#">contact</a></li>
</ul>
</div>
</div>
</div>
</div>
<div class="col-lg-3 col-md-6 col-sm-6">
<div class="single-footer-widget">
<h5>Newsletter</h5>
<p>For business professionals caught between high OEM price and mediocre print and graphic output, </p>
<div class="footer-newsletter" id="mc_embed_signup">
<form target="_blank" novalidate="true" action="https://spondonit.us12.list-manage.com/subscribe/post?u=1462626880ade1ac87bd9c93a&amp;id=92a4423d01" method="get" class="form-inline">
<div class="d-flex flex-row">
<input class="form-control" name="EMAIL" placeholder="Enter Email" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter Email '" required="" type="email">
<button class="click-btn btn btn-default"><span class="lnr lnr-location" aria-hidden="true"></span></button>
<div style="position: absolute; left: -5000px;">
<input name="b_36c4fd991d266f23781ded980_aefe40901a" tabindex="-1" value="" type="text">
</div>
</div>
<div class="info"></div>
</form>
</div>
</div>
</div>
<div class="col-lg-3  col-md-6 col-sm-6">
<div class="single-footer-widget mail-chimp">
<h5 class="mb-20">Instragram Feed</h5>
<ul class="instafeed d-flex flex-wrap">
<li><img src="img/i1.jpg" alt=""></li>
<li><img src="img/i2.jpg" alt=""></li>
<li><img src="img/i3.jpg" alt=""></li>
<li><img src="img/i4.jpg" alt=""></li>
<li><img src="img/i5.jpg" alt=""></li>
<li><img src="img/i6.jpg" alt=""></li>
<li><img src="img/i7.jpg" alt=""></li>
<li><img src="img/i8.jpg" alt=""></li>
</ul>
</div>
</div>
</div>
</div>
</div>
<div class="copyright">
<div class="container">
<div class="row">
<div class="col-lg-6 col-md-12">
<p>
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by VelVet Team

</p>
</div>
<div class="col-lg-6 col-md-12 text-right">
<div class="social-icons">
<a href="#"><i class="fa fa-facebook"></i></a>
<a href="#"><i class="fa fa-twitter"></i></a>
<a href="#"><i class="fa fa-dribbble"></i></a>
<a href="#"><i class="fa fa-behance"></i></a>
</div>
</div>
</div>
</div>
</div>
</footer>



<script src="js/jquery-3.2.1.min.js"></script>
<script src="js/popper.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/stellar.js"></script>
<script src="js/jquery.magnific-popup.min.js"></script>
<script src="vendors/nice-select/js/jquery.nice-select.min.js"></script>
<script src="vendors/owl-carousel/owl.carousel.min.js"></script>
<script src="js/owl-carousel-thumb.min.js"></script>
<script src="js/jquery.ajaxchimp.min.js"></script>
<script src="js/mail-script.js"></script>

<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCjCGmQ0Uq4exrzdcL6rvxywDDOvfAu6eE"></script>
<script src="js/gmaps.min.js"></script>
<script src="js/theme.js"></script>

<script async src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-23581568-13');
</script>
</body>

<!-- Mirrored from colorlib.com/preview/theme/Velvet Escape/ by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 25 Feb 2019 12:46:11 GMT -->
</html>