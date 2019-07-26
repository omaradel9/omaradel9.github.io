<?php

				session_start();

 ?>

<!DOCTYPE html>

	<head>

	<title>Takearound</title>




	<link href='https://fonts.googleapis.com/css?family=Work+Sans:400,300,600,400italic,700' rel='stylesheet' type='text/css'>
<link rel="shortcut icon" type="image/png" href="../favicon.png"/>

	<link rel="stylesheet" href="../css/animate.css">
	<link rel="stylesheet" href="../css/icomoon.css">
	<link rel="stylesheet" href="../css/bootstrap.css">
	<link rel="stylesheet" href="../css/style.css">
	<link rel="stylesheet" href="../css/overwrite.css">
    <link rel="stylesheet" href="../css/loginform.css">
    <link rel="stylesheet" href="../css/style_2.css">


	<!-- Modernizr JS -->
	<script src="../js/modernizr-2.6.2.min.js"></script>
	<!-- FOR IE9 below -->
	<!--[if lt IE 9]>
	<script src="js/respond.min.js"></script>
	<![endif]-->

	</head>
	<body>

	<div class="fh5co-loader"></div>

	<div id="page"><h3>

		<div class="container">
			<div class="row">
				<div class="col-xs-12 text-center"><nav class="fh5co-nav" role="navigation">
					<div id="fh5co-logo" class="a" ><a href="../index.html">Takearound<strong>.</strong></a></div>
				</div>
			</div>


		</div>

        <div class="profile_p" ></div>
	</nav>

	<header id="fh5co-header" class="fh5co-cover" role="banner" style="background-image:url(../images/img_bg_1.jpg);height:740px;" data-stellar-background-ratio="0.5">
		<div class="overlay"></div>
		<div class="container">
			<div class="row">
				<div class="col-md-8 col-md-offset-2 text-center">
					<div class="display-t">
						<div class="display-tc animate-box" data-animate-effect="fadeIn">
							<h1>We Are Every Where!</h1>

								<h2>Search What You Want</h2> <h3><?php if (isset($_SESSION['username'])) {
									echo "<a href='includes/profile.php'>". $_SESSION['username']."</a>";
									# code...
								} else {
									# code...
									echo "<a href='includes/login.php'>login</a>";
								}
								 ?></h3>

								<form class="form-inline" id="fh5co-header-subscribe">
									<div class="col-md-12 col-md-offset-0">
										<div class="form-group">
											<input type="text" class="form-control" id="email" placeholder="Get You Want">
											<button type="submit" class="btn btn-">Search</button>
										</div>
									</div>

								</form>
								<ul class="fh5co-social-icons">
									<li><a href="#"><i class="icon-twitter-with-circle"></i></a></li>
									<li><a href="#"><i class="icon-facebook-with-circle"></i></a></li>
									<li><a href="#"><i class="icon-linkedin-with-circle"></i></a></li>
									<li><a href="#"><i class="icon-dribbble-with-circle"></i></a></li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</header>
		
	<footer id="fh5co-footer" role="contentinfo">
		<div class="container">

			<div class="row copyright">
				<div class="col-md-12 text-center">
					<p>
						<small class="block">&copy; 2016 &copy <a href="index.html">SAFARNI </a> . All Rights Reserved.</small>

					</p>
					<p>
						<ul class="fh5co-social-icons">
							<li><a href="#"><i class="icon-twitter"></i></a></li>
							<li><a href="#"><i class="icon-facebook"></i></a></li>
							<li><a href="#"><i class="icon-linkedin"></i></a></li>
							<li><a href="#"><i class="icon-dribbble"></i></a></li>
						</ul>
					</p>
				</div>
			</div>

		</div>



	</footer>
	</div>

	<div class="gototop js-top">
		<a href="#" class="js-gotop"><i class="icon-arrow-up"></i></a>
	</div>
	<?php
		include 'config.php';
			if (isset($_POST['login'])) {
				$email = $_POST['email'];
				$password = $_POST['pass'];
				$qur = "SELECT * FROM identity";
				$dqur = mysqli_query($LINK,$qur);
				while ($find = mysqli_fetch_array($dqur)) {
					if ($email==$find[3] 	&& $password==$find[2]) {
								header('location:includes/cars.html');

					}

					# code...
				}
				# code...
			}
	 ?>
	<!-- jQuery -->
	<script src="../js/jquery.min.js"></script>
	<!-- jQuery Easing -->
	<script src="../js/jquery.easing.1.3.js"></script>
	<!-- Bootstrap -->
	<script src="../js/bootstrap.min.js"></script>
	<!-- Waypoints -->
	<script src="../js/jquery.waypoints.min.js"></script>

	<!-- Stellar -->
	<script src="../js/jquery.stellar.min.js"></script>

	<!-- Count Down -->
	<script src="../js/simplyCountdown.js"></script>
	<!-- Main -->
	<script src="../js/main.js"></script>


	</body>
</html>
