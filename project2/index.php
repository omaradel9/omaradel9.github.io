<?php

				session_start();

 ?>

<!DOCTYPE html>

	<head>

	<title>SAFARNI</title>



	<link href='https://fonts.googleapis.com/css?family=Work+Sans:400,300,600,400italic,700' rel='stylesheet' type='text/css'>


	  <link rel='stylesheet' href='css/animate.css'>
	  <link rel='stylesheet' href='css/icomoon.css'>
	  <link rel='stylesheet' href='css/bootstrap.css'>
		<link rel="stylesheet" href="css/bootstrap.min.css">
 	  <link rel='stylesheet' href='css/style.css'>

    <link rel='stylesheet' href='css/style_2.css'>
		<link rel="stylesheet" href="css/stylecar.css">
		<link rel="stylesheet" href="css/main2.css">
    <link rel="stylesheet" href="css/style_3.css">
		<link rel="stylesheet" type="text/css" href="css/style_4.css">
		<link rel='stylesheet' href='css/main4.css' />

	<!-- Modernizr JS -->
	<script src='js/modernizr-2.6.2.min.js'></script>
	<!-- FOR IE9 below -->
	<!--[if lt IE 9]>
	<script src='js/respond.min.js'></script>
	<![endif]-->

	</head>
	<body>

	<div class='fh5co-loader'></div>

	<div id='page'><h3>

		<div class='container'>
			<div class='row'>
				<div class='col-xs-12 text-center'><nav class='fh5co-nav' role='navigation'>
					<div id='fh5co-logo' class='a' ><a href='index.php'>SAFARNI<strong>.</strong></a></div>
				</div>
			</div>


		</div>

        <div class='profile_p' ></div>
	</nav>

	<header id='fh5co-header' class='fh5co-cover' role='banner' style='background-image:url(images/img_bg_1.jpg);height:740px;' data-stellar-background-ratio='0.5'>
		<div class='overlay'></div>
		<div class='container'>
			<div class='row'>
				<div class='col-md-8 col-md-offset-2 text-center'>
					<div class='display-t'>
						<div class='display-tc animate-box' data-animate-effect='fadeIn'>
							<h3 style="color:#fff;position:abselute; margin-top:-150px; margin-bottom:100px">ShowLocal Web Application!</h3>
							<h1>We Are Every Where!</h1>

								 <h3><?php if (isset($_SESSION['username'])) {
									echo "<a href='includes/profile_2.php'>". $_SESSION['username']."</a>";
									# code...
								} else {
									# code...
									echo "<a href='includes/login.php'>login</a>";
								}
								 ?></h3>

								 <h2>Search What You Want</h2>

								<form class='form-inline' method="post" action="" id='fh5co-header-subscribe'>
									<div class='col-md-12 col-md-offset-0'>
										<div class='form-group'>
											<select class="form-control" style="width:300px;margin-left:-150px;  background-color:#fff;" name="search">
											<option selected>--select your city--</option>

											<option value="10th of Ramadan">10th of Ramadan</option>
											<option value="6th of October">6th of October</option>
											<option value="Alexandria">Alexandria</option>
											<option value="Aswan">Aswan</option>
											<option value="Asyut">Asyut</option>
											<option value="Banha">Banha</option>
											<option value="Beni Suef">Beni Suef</option>
											<option value="Cairo">Cairo</option>
											<option value="Damanhur">Damanhur</option>
											<option value="Damietta">Damietta</option>
											<option value="El Arish">El Arish</option>
											<option value="El Mahalla El Kubra">El Mahalla El Kubra</option>
											<option value="El Tor">El Tor</option>
											<option value="El Qantara">El Qantara</option>
											<option value="El Shorouk">El Shorouk</option>
											<option value="El Qanater El Khayreya">El Qanater El Khayreya</option>
											<option value="Faqous">Faqous</option>
											<option value="Faiyum">Faiyum</option>
											<option value="Giza">Giza</option>
											<option value="Hurghada">Hurghada</option>
											<option value="Ismailia">Ismailia</option>
											<option value="Kafr El Sheikh">Kafr El Sheikh</option>
											<option value="Luxor">Luxor</option>
											<option value="Mansoura">Mansoura</option>
											<option value="Marsa Alam">Marsa Alam</option>
											<option value="Mersa Matruh">Mersa Matruh</option>
											<option value="Minya">Minya</option>
											<option value="Mit Ghamr">Mit Ghamr</option>
											<option value="Nag Hammadi">Nag Hammadi</option>
											<option value="New Cairo">New Cairo</option>
											<option value="Port Said">Port Said</option>
											<option value="Qena">Qena</option>
											<option value="Rafah">Rafah</option>
											<option value="Ras El Bar">Ras El Bar</option>
											<option value="Ras Gharib">Ras Gharib</option>
											<option value="Ras Sedr">Ras Sedr</option>
											<option value="Sadat">Sadat</option>
											<option value="Safaga">Safaga</option>
											<option value="Saint Catherine">Saint Catherine</option>
											<option value="Sharm El Sheikh">Sharm El Sheikh</option>
											<option value="Sheikh Zuweid">Sheikh Zuweid</option>
											<option value="Shibin El Qanater">Shibin El Qanater</option>
											<option value="Shibin El Kom">Shibin El Kom</option>
											<option value="Shubra El Kheima">Shubra El Kheima</option>
											<option value="Siwa Oasis">Siwa Oasis</option>
											<option value="Sohag">Sohag</option>
											<option value="Suez">Suez</option>
											<option value="Tanta">Tanta</option>
											<option value="Tell El Kebir">Tell El Kebir</option>
											<option value="Zagazig">Zagazig</option>
											<option value="El sharkia">El sharkia</option>



									</select>
											<button type='submit' name='browse' class='btn' style="position:absolute; top:15px; right:	150px; ">Search</button>
										</div>
									</div>

								</form>
								<ul class='fh5co-social-icons'>
									<li><a href='#'><i class='icon-twitter-with-circle'></i></a></li>
									<li><a href='#'><i class='icon-facebook-with-circle'></i></a></li>
									<li><a href='#'><i class='icon-linkedin-with-circle'></i></a></li>
									<li><a href='#'><i class='icon-dribbble-with-circle'></i></a></li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</header>




	<?php
				if (!isset($_POST['browse'])) {
				echo "

<section style='margin-top:-150px;' >

<div class='container-fluid'>

		<div class='row'>
			<a href='includes/friends.php'><div class='sigma-content col-lg-3 col-md-6 sigma-bg-lightgray text-center'>
					<span class='sigma-icon'><img src='images/icons/frienship.png' /></span>

					<h2 style='margin-top:10px;'>People</h2>
				</div></a>
				<a href='includes/cars.php'><div class='sigma-content col-lg-3 col-md-6 sigma-bg-gray text-center'>
					<span class='sigma-icon'><img src='images/icons/car.png' /></span>
					<h2 style='margin-top:10px;'>Cars</h2>

				</div></a>
				<a href='includes/places.php'><div class='sigma-content col-lg-3 col-md-6 sigma-bg-darkgray text-center'>
				<span class='sigma-icon'><img src='images/icons/building.png' /></span>
					<h2 style='margin-top:10px;'>Places</h2>

				</div></a>
				<a href='includes/show_trips.php'><div class='sigma-content col-lg-3 col-md-6 sigma-bg-black text-center'>
					<span class='sigma-icon'><img src='images/icons/airplane.png' /></span>
					<h2 style='margin-top:10px;'>Trips</h2>

				</div></a>
		</div>

</div>

</section>
				";
				}
				elseif (isset($_POST['browse'])) {
					include 'includes/config.php';
					$name= $_POST['search'];
					//car database
					$cname = "car_name = '$name'";
			    $cmodel= "car_model = '$name'";
			    $rent = "car_rent   = '$name'";
			    $Publisher= "owner = '$name'";
			    $time=   "time = '$name'";
			    $city= "city = '$name'";
				//place database
	        $paddress = "place_address = '$name'";
	        $psize= "place_size = '$name'";
	        $price = "place_price = '$name'";
	        $Publisher= "owner = '$name'";
				//people database

					$username = "username = '$name'";
					$email    = "email = '$name'";
					$fristname= "frist_name = '$name'";
					$twon   = "country = '$name'";
				//trip database
					$datefrom = "date_from = '$name'";
					$tripplace= "trip_place = '$name'";
					$country  = "city = '$name'";
					$leader   = "leader = '$name'";
				//---------------------------------------------------------------------------------------------
				echo "<div id='wrapper'style='margin-top:-200px;'>
					 <div id='main'>
						 <div class='inner'>
							 <section class='tiles'>";
							 $session = $_SESSION['user_id'];
							 	$admin = 'admin';
								 $sql = "SELECT * FROM `identity` WHERE $twon AND user_id <> '$session' ANDauthority <> '$admin' ";
								 $result = mysqli_query($LINK,$sql);

								 while( $data = mysqli_fetch_array($result))
								 {
									 echo "
									 					<article class='style1'>
									 						<span class='image'>
									 							<img src='images/profiles/$data[4]' alt='' style='width:300px;height:300px;'  />
									 						</span>
									 						<a href='includes/profile_person.php?id=$data[0]&name=$data[1]'>
									 						<h2 style='font-size:20px;color:#fff;background-color:#000;margin-top:0px;'>GUIDE</h2>
									 							<h2 style='color:#fff;'>$data[1]</h2>

									 							<div class='content' >
									 								<p style='font-size:20px;color:#fff;'>$data[9]</p>
									 							</div>
									 						</a>
									 					</article>

									 				";
								 }


							 $sql = "SELECT * FROM `car` WHERE $city   ";
							 $result = mysqli_query($LINK,$sql);

							 while( $data = mysqli_fetch_array($result))
							 {
								 echo "
 												 <article class='style1'>
 													 <span class='image'>
 														 <img src='images/carphoto/$data[7]' alt='' style='width:300px;height:300px;background-size: contain;' />
 													 </span>
 													 <a href='includes/profile_car.php?id=$data[0]'>
 													 <h2 style='font-size:20px;color:#fff;background-color:#000;margin-top:0px;'>CAR</h2>
 														 <h2 style='color:#fff;'>$data[2]</h2>

 														 <div class='content' >
 															 <p style='font-size:20px;color:#fff;'>$data[5]</p>
 														 </div>
 													 </a>
 												 </article>

 											 ";
						 }

						 $sql = "SELECT * FROM `place` WHERE $city ";
						 $result = mysqli_query($LINK,$sql);

						 while( $data = mysqli_fetch_array($result))
						 {
							 echo "
	 										 <article class='style1'>
	 											 <span class='image'>
	 												 <img src='images/places/$data[5]' alt='' style='width:300px;height:300px;' />
	 											 </span>
	 											 <a href='includes/profile_place.php?id=$data[0]'>
	 											 <h2 style='font-size:20px;color:#fff;background-color:#000;margin-top:0px;'>PLACE</h2>
	 												 <h2 style='color:#fff;'>$data[2]</h2>

	 												 <div class='content' >
	 													 <p style='font-size:20px;color:#fff;'>$data[6]</p>
	 												 </div>
	 											 </a>
	 										 </article>

	 									 ";

					 }


					 $sql = "SELECT * FROM `trips` WHERE $country  ";
					 $result = mysqli_query($LINK,$sql);
					 while( $data = mysqli_fetch_array($result))
 					{
						echo "
										 <article class='style1'>
											 <span class='image'>
													 <img src='images/trips/$data[3]' alt='' style='width:300px;height:300px;background-size: contain;' />
											 </span>
											 <a href='includes/profile_trip.php?id=$data[0]'>
											 <h2 style='font-size:20px;color:#fff;background-color:#000;margin-top:0px;'>TRIP</h2>
												 <h2 style='color:#fff;'>$data[9]</h2>

												 <div class='content' >
													 <p style='font-size:20px;color:#fff;'>$data[8]</p>
												 </div>
											 </a>
										 </article>

									 ";

 				}



							 }


	 ?>
 </section>
 </div>
 </div>

 </div>

	</div>

	<div class='gototop js-top'>
		<a href='#' class='js-gotop'><i class='icon-arrow-up'></i></a>
	</div>

	 <footer id="fh5co-footer" role="contentinfo">
 		<div class="container">

 			<div class="row copyright">
 				<div class="col-md-12 text-center">
 					<p>
 						<small class="block">&copy; 2017 &copy <a href="index.php">TAKEaround </a> . All Rights Reserved.</small>

 					</p>

 				</div>
 			</div>

 		</div>
 	</footer>
	<!-- jQuery -->
	<script src='js/jquery.min.js'></script>
	<!-- jQuery Easing -->
	<script src='js/jquery.easing.1.3.js'></script>
	<!-- Bootstrap -->
	<script src='js/bootstrap.min.js'></script>
	<!-- Waypoints -->
	<script src='js/jquery.waypoints.min.js'></script>

	<!-- Stellar -->
	<script src='js/jquery.stellar.min.js'></script>

	<!-- Count Down -->
	<script src='js/simplyCountdown.js'></script>
	<!-- Main -->
	<script src='js/main.js'></script>

  <script src='js/main2.js'></script>

	<script src='js/main4.js'></script>


	</body>
</html>
