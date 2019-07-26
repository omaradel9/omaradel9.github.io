<?php
					session_start();


  ?>
<!doctype html>
<html lang="en">

<!-- Mirrored from colorlib.com/preview/theme/Velvet Escape/book-trip.php by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 25 Feb 2019 12:46:24 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
<head>

<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<link rel="icon" href="img/favicon.png" type="image/png">
<title>suggestion of your planning</title>
<link href="//netdna.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <link rel="stylesheet" href="style.css">

<link rel="stylesheet" href="css/bootstrap.css">
<link rel="stylesheet" href="vendors/linericon/style.css">
<link rel="stylesheet" href="css/font-awesome.min.css">
<link rel="stylesheet" href="css/magnific-popup.css">
<link rel="stylesheet" href="vendors/owl-carousel/owl.carousel.min.css">
<link rel="stylesheet" href="vendors/nice-select/css/nice-select.css">
<link rel="stylesheet" href="css/style2.css">

    <link rel="stylesheet" href="css/comment.css">


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





<section class="trip-area section_gap">
<div class="container">
<div class="row justify-content-center">
<div class="col-lg-12 col-md-10">
<div class="trip-form-section">
        <?php
                $id      = $_GET['id'];
                include 'config.php';
                $quary   = "SELECT * FROM `place` WHERE place_id = $id";
                $place   = mysqli_query($LINK,$quary);
                while ($fet = mysqli_fetch_array($place)) {
    echo " <h1>$fet[1] <br>
    is your next Tour</h1>";

            ?>
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">

        <?php


echo"
                <
                div class='carousel-inner' >
    <div class='carousel-item active' >
      <img class='d-block w-100' src = 'img/$fet[4]' alt = 'First slide' >
    </div >
   
</div >";
                }?>
    <br>
 <?php

    $post_id = '1'; // yor page ID or Article ID
?>
        <form  method="post" action="" enctype="multipart/form-data" class="contact100-form validate-form">
<div class="container12">
	<div class="rate">
		<div id="1" class="btn-1 rate-btn"><input type="radio"  name="rate" value="1"></div>
        <div id="2" class="btn-2 rate-btn"><input type="radio"  name="rate" value="2"></div>
        <div id="3" class="btn-3 rate-btn"><input type="radio"  name="rate" value="3"></div>
        <div id="4" class="btn-4 rate-btn"><input type="radio"  name="rate" value="4"></div>
        <div id="5" class="btn-5 rate-btn"><input type="radio"  name="rate" value="5"></div>
	</div>
    

     <textarea class="form-control" name="comment" id="exampleFormControlTextarea1" rows="3"></textarea>
    <br>
    
    <button type="submit" name = "submit" class="btn btn-primary">Comment</button>    <button type="submit" name = "share" class="btn btn-primary">share</button>

    </form>
<!-- ***** Single Widget ***** -->
        <div class="col-12 col-md-6 col-lg-4">

                        <div class="single-widget followers-widget mb-50">
                            <a href="#" class="facebook"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                            <a href="#" class="twitter"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                            <a href="#" class="google"><i class="fa fa-google" aria-hidden="true"></i></a>
                        </div>
                         </div>

                        <!-- ***** Single Widget ***** -->

</div>




 </div>
                            </div>
</div>

<div class="row">
<div class="col-sm-12">

   <span class='text-muted'><h3 style=' margin-left:90px;' >Rates :
    <?php

   $quaryrate   = "SELECT * FROM `rate` WHERE place_id = $id";
			$rate   = mysqli_query($LINK,$quaryrate);
			while ($rates = mysqli_fetch_array($rate)) {
                    $average =( array_sum($rates) / count($rates))/ 100;
  }  echo $average ;
    ?>
   </h3></span>";

</div><!-- /col-sm-12 -->
</div><!-- /row -->
<div class="row" >
     <?php

				$quary   = "SELECT * FROM `comment` WHERE place_id = $id";
			$place   = mysqli_query($LINK,$quary);
			while ($fet = mysqli_fetch_array($place)) {
            $quary3   = "SELECT * FROM `identity` WHERE user_id = $fet[1]";
			$name   = mysqli_query($LINK,$quary3);
			while ($fetname1 = mysqli_fetch_array($name)) {
			    $fetname  = $fetname1[1];
                 }
echo"
                
      <div class='col-sm-1' style='width:10px; highet:10px'>
        <div class='thumbnail'>
            <img class='img-responsive user-photo' src='https://ssl.gstatic.com/accounts/ui/avatar_2x.png'>
        </div><!-- /thumbnail -->
    </div><!-- /col-sm-1 -->

    <div class='col-sm-5'>
        <div class='panel panel-default'>
            <div class='panel-heading''>
               <strong>$fetname</strong> <span class='text-muted'>$fet[4]</span>
            </div>
            <div class='panel-body'>
               $fet[3]
            </div><!-- /panel-body -->
        </div><!-- /panel panel-default -->
    </div><!-- /col-sm-5 -->
    

";
                }?>




</div>
</div>
</div>

</section>
<?php

	if(isset($_POST['submit'])) {
        include 'config.php';
        $rate = $_POST['rate'];
        $user_id = $_SESSION['id'];
        $comment = $_POST['comment'];
        $insert = "INSERT INTO `rate` VALUES ( NULL,'$user_id','$id','$rate',NOW())";

        mysqli_query($LINK, $insert);
        $insert = "INSERT INTO `comment` VALUES ( NULL,'$user_id','$id','$comment',NOW())";

        mysqli_query($LINK, $insert);
                mysqli_close($LINK);

}
	elseif(isset($_POST['share'])) {
	    $user_id = $_SESSION['id'];
        $insert = "INSERT INTO `share` VALUES ( NULL,'$user_id','$id','shared',NOW())";

        mysqli_query($LINK, $insert);
        mysqli_close($LINK);
    }


				?>


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
<p>
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


 <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
<script>
$(function(){
   $('.rate-btn').hover(function(){
   $('.rate-btn').removeClass('rate-btn-hover');
      var therate = $(this).attr('id');
      for (var i = therate; i >= 0; i--) {
   $('.btn-'+i).addClass('rate-btn-hover');
       };
     });

   $('.rate-btn').click(function(){
      var therate = $(this).attr('id');
      var dataRate = 'act=rate&post_id=<?php echo $post_id; ?>&rate='+therate; //
   $('.rate-btn').removeClass('rate-btn-active');
      for (var i = therate; i >= 0; i--) {
   $('.btn-'+i).addClass('rate-btn-active');
      };
   $.ajax({
      type : "POST",
      url : "ajax.php",
      data: dataRate,
      success:function(){}
    });
  });
});
</script>
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
<script src="//netdna.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>

</body>

<!-- Mirrored from colorlib.com/preview/theme/Velvet Escape/book-trip.php by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 25 Feb 2019 12:46:24 GMT -->
</html>