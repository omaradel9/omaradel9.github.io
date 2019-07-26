<?php
					session_start();


  ?>
<!doctype html>
<html lang="en">

<!-- Mirrored from colorlib.com/preview/theme/Velvet Escape/packages.php by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 25 Feb 2019 12:46:22 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
<head>

<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<link rel="icon" href="img/favicon.png" type="image/png">
<title>Packages</title>

<link rel="stylesheet" href="css/bootstrap.css">
<link rel="stylesheet" href="vendors/linericon/style.css">
<link rel="stylesheet" href="css/font-awesome.min.css">
<link rel="stylesheet" href="css/magnific-popup.css">
<link rel="stylesheet" href="vendors/owl-carousel/owl.carousel.min.css">
<link rel="stylesheet" href="vendors/nice-select/css/nice-select.css">

<link rel="stylesheet" href="css/style.css">
 <link rel="stylesheet" type="text/css" href="css/select2.min.css">
	<link rel="stylesheet" type="text/css" href="css/main1.css">
</head>
<body>

<header class="header_area">
<div class="main_menu">
<nav class="navbar navbar-expand-lg navbar-light">
<div class="container">

<a class="navbar-brand logo_h" href="index.php"><img src="img/1.png" alt=""></a>
<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
<span class="icon-bar"></span>
<span class="icon-bar"></span>
<span class="icon-bar"></span>
</button>

<div class="collapse navbar-collapse offset" id="navbarSupportedContent">
<ul class="nav navbar-nav menu_nav ml-auto">
<li class="nav-item"><a class="nav-link" href="index.php">Home</a></li>
<li class="nav-item "><a class="nav-link" href="packages.php">Planning Trip</a></li>
<li class="nav-item active "><a class="nav-link" href="packages.php">Suggestion</a></li>

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


<section class="banner_area ">
<div class="banner_inner overlay d-flex align-items-center">
<div class="container">
<div class="banner_content">
<div class="page_link">
<a href="index.php">Home</a>
<a href="packages.php">planning Trip</a>
</div>
<h2>Trip Planning</h2>
</div>
</div>
 </div>
</section>
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
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com/" target="_blank">Colorlib</a>

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
	<script src="js/select2.min.js"></script>
	<script>
		$(".js-select2").each(function(){
			$(this).select2({
				minimumResultsForSearch: 20,
				dropdownParent: $(this).next('.dropDownSelect2')
			});
		})
		$(".js-select2").each(function(){
			$(this).on('select2:open', function (e){
				$(this).parent().next().addClass('eff-focus-selection');
			});
		});
		$(".js-select2").each(function(){
			$(this).on('select2:close', function (e){
				$(this).parent().next().removeClass('eff-focus-selection');
			});
		});

	</script>

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

<!-- Mirrored from colorlib.com/preview/theme/Velvet Escape/packages.php by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 25 Feb 2019 12:46:22 GMT -->
</html>