<?php
					session_start();


  ?>
<!doctype html>
<html lang="en">

<!-- Mirrored from colorlib.com/preview/theme/Velvet Escape/contact.php by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 25 Feb 2019 12:46:52 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
<head>

<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<link rel="icon" href="img/favicon.png" type="image/png">
<title>map</title>

<link rel="stylesheet" href="css/bootstrap.css">
<link rel="stylesheet" href="vendors/linericon/style.css">
<link rel="stylesheet" href="css/font-awesome.min.css">
<link rel="stylesheet" href="css/magnific-popup.css">
<link rel="stylesheet" href="vendors/owl-carousel/owl.carousel.min.css">
<link rel="stylesheet" href="vendors/nice-select/css/nice-select.css">

<link rel="stylesheet" href="css/style.css">
</head>
<body>

<header class="header_area" style=" background: black;">
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
<li class="nav-item"><a class="nav-link" href="packages.php">Planning Trip</a></li>
<li class="nav-item">
<?php if (isset($_SESSION['username'])) {

			echo "<a href='suggestion.php' class='nav-link'>Suggestion</a>";


		}


     else{
         echo "<a href='login.php' class='nav-link'>Suggestion</a>";

     }

								 ?>


</li>
<li class="nav-item "><a class="nav-link" href="contact.php">Contact</a></li>
    <li class="nav-item "><a class="nav-link" href="archive-list.php">Shared places</a></li>
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



<section class="contact_area section_gap">
<div class="container">
    <div class="row d-flex justify-content-center">
<div class="ol-lg-12">
<div class="main_title">
    <?php
			$id      = $_GET['id'];
			include 'config.php';
			$quary   = "SELECT * FROM `place` WHERE place_id = $id";
			$place   = mysqli_query($LINK,$quary);
			while ($fet = mysqli_fetch_array($place)) {
echo " <h1>this map for $fet[1] </h1>
";}

        ?>

<span class="title-widget-bg"></span>
</div>
</div>
</div>
<div id="mapBox" class="mapBox" data-lat="40.701083" data-lon="-74.1522848" data-zoom="13" data-info="PO Box CT16122 Collins Street West, Victoria 8007, Australia." data-mlat="40.701083" data-mlon="-74.1522848">
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
Copyright &copy;<script data-cfasync="false" src="../../../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script><script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com/" target="_blank">Colorlib</a>

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


<div id="success" class="modal modal-message fade" role="dialog">
<div class="modal-dialog">
<div class="modal-content">
<div class="modal-header">
<button type="button" class="close" data-dismiss="modal" aria-label="Close">
<i class="fa fa-close"></i>
</button>
<h2>Thank you</h2>
<p>Your message is successfully sent...</p>
</div>
</div>
</div>
</div>

<div id="error" class="modal modal-message fade" role="dialog">
<div class="modal-dialog">
<div class="modal-content">
<div class="modal-header">
<button type="button" class="close" data-dismiss="modal" aria-label="Close">
<i class="fa fa-close"></i>
</button>
<h2>Sorry !</h2>
<p> Something went wrong </p>
</div>
</div>
</div>
</div>



<script src="js/jquery-3.2.1.min.js"></script>
<script src="js/popper.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/stellar.js"></script>
<script src="js/jquery.magnific-popup.min.js"></script>
<script src="vendors/nice-select/js/jquery.nice-select.min.js"></script>
<script src="vendors/owl-carousel/owl.carousel.min.js"></script>
<script src="js/jquery.ajaxchimp.min.js"></script>
<script src="js/mail-script.js"></script>

<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDMGMhS0_jlEF5ezpwWBfoLfvIi_KEf2Ho"></script>
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

<!-- Mirrored from colorlib.com/preview/theme/Velvet Escape/contact.php by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 25 Feb 2019 12:46:52 GMT -->
</html>