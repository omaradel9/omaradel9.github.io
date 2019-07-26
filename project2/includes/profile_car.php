<?php
					session_start();


  ?>

<!DOCTYPE html>
<html lang="en" class="theme-color-07cb79 theme-skin-dark">
<head>


	<title>SAFARNI</title>



	<!-- Google Fonts -->
	<link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Fredoka+One">
	<link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Open+Sans:300,300italic,400,400italic,600,600italic,700,700italic,800,800italic">

	<!-- Icon Fonts -->
	<link rel="stylesheet" type="text/css" href="../css/style_icomoon.css">
	<link rel="stylesheet" type="text/css" href="../css/option-panel.css">
	<link rel="stylesheet" type="text/css" href="../css/style_1.css">
	<link rel="stylesheet" type="text/css" href="../css/theme-color.css">



</head>

<body class="home header-has-img loading">
	<?php
			$id      = $_GET['id'];
			include 'config.php';
			$quary   = "SELECT * FROM `car` WHERE car_id = $id";
			$cars   = mysqli_query($LINK,$quary);
			while ($car = mysqli_fetch_array($cars)) {



	 ?>


    <div class="mobile-nav">


        <div class="mobile-nav-inner">
            <nav id="mobile-nav" class="nav">
				<ul class="clearfix">
					<li><a href="profile_2.php"><?php echo $_SESSION['username'];  ?>  <span></span></a></li>
					<li><a href="logout.php">Logout</a></li>

				</ul>
			</nav>
        </div>
    </div><!-- .mobile-nav -->

    <div class="wrapper">
        <header class="header">
            <div class="head-bg" style="background-image: url('../images/uploads/rs-cover.jpg')"></div>

            <div class="head-bar">
                <div class="head-bar-inner">
                    <div class="row">
                        <div class="col-sm-3 col-xs-6">
                            <a class="logo" href="../index.php"><span>SAFAR</span>ni</a>
							<!-- <a class="head-logo" href=""><img src="`../images/`rs-logo.png" alt="RScard"/></a> -->
                        </div>

                        <div class="col-sm-9 col-xs-6">
                            <div class="nav-wrap">
                                <nav id="nav" class="nav">
									<ul class="clearfix">

										<li><a href="profile_2.php"><?php echo $_SESSION['username'];  ?>  <span></span></a></li>
										<li><a href="logout.php">Logout</a></li>
											</ul>
								</nav>


                            </div><!-- .nav-wrap -->
                        </div>
                    </div>
                </div>
            </div>
        </header><!-- .header -->

        <div class="content">
            <div class="container">

				<!-- START: PAGE CONTENT -->
				<section id="about" class="section section-about">
					<div class="animate-up">
						<div class="section-box">
							<div class="profile">
								<div class="row">
									<div class="col-xs-5">
										<div class="profile-photo"><img src="../images/carphoto/<?php echo $car[7]; ?>" alt="<?php echo $car[2]; ?>"/></div>
									</div>
									<div class="col-xs-7">
										<div class="profile-info">
											<div class="profile-preword"><span>£&nbsp<?php echo $car[6]; ?></span></div>
											<h1 class="profile-title"><span></span> <?php echo $car[2]; ?></h1>
											<h2 class="profile-position"></h2></div>
                                            <ul class="profile-list">
                                                <li class="clearfix">
                                                    <strong class="title">Car model</strong>
                                                    <span class="cont">
																											<?php echo $car[3]; ?>
                                                    </span>
                                                </li>
                                                <li class="clearfix">
                                                    <strong class="title">City</strong>
                                                    <span class="cont"><?php echo $car[8]; ?></span>
                                                </li>
                                                <li class="clearfix">
                                                    <strong class="title">Car color	</strong>
                                                    <span class="cont"><?php echo $car[4]; ?></span>
                                                </li>
																								<li class="clearfix">
                                                    <strong class="title">Owner</strong>
                                                    <span class="cont">
																											<?php
																														$f= "SELECT * FROM `identity` WHERE user_id=$car[1]";
																														$d= mysqli_query($LINK,$f);
																														while ($s = mysqli_fetch_array($d)) {
																															if ($s[1]== $_SESSION['username']) {
																																echo "<a href='profile_2.php'>YOU</a>";
																															}
																															else {
																																echo "<a href='profile_person.php?id=$s[0]&name=$s[1]'".$s[1]."</a>&nbsp&nbsp&nbsp<a href='chat.php?id=$s[0]&name=$s[1]&img=$s[4] '>CONTACT</a>";
																															}

																														}


																										 ?>
																									 </span>
                                                </li>
																								<li class="clearfix">
                                                    <strong class="title">Date</strong>
                                                    <span class="cont"><?php echo $car[9] ?></span>
                                                </li>



												<li class="clearfix">
													<?php
													if($_SESSION['outh'] =="admin") {
														echo "<form action='profile_car.php?id=$id' method='post'> <input type='submit' name='delete' value=DELETE></form>";


														if (isset($_POST['delete'])) {
															$delete = "DELETE FROM `car` WHERE `car`.`car_id` = $id;";
															mysqli_query($LINK,$delete);
															header("Location: ../index.php");
															mysqli_close($LINK);

														}
													}

													?>
												</li>
                                            </ul>
									</div>
								</div>
							</div>
							<div class="profile-social">

							</div>
						</div>

					</div>
				</section><!-- #about -->



				<section id="experience" class="section section-experience">
					<div class="animate-up">
						<h2 class="section-title">Skills</h2>

						<div class="timeline">
							<div class="timeline-bar"></div>
							<div class="timeline-inner clearfix">
                                <div class="timeline-box timeline-box-left">
                                    <span class="dot"></span>
                                    <div class="timeline-box-inner animate-right">
                                        <span class="arrow"></span>
                                        <div class="date"></div>
                                        <h3>About car </h3>
                                        <h4></h4>
                                        <p><?php echo $car[5]; ?></p>
                                    </div>
                                </div>




							</div>
						</div>
					</div>
				</section><!-- #experience -->


<?php } ?>
				<footer id="fh5co-footer" role="contentinfo">
					<div class="container">

						<div class="row copyright">
							<div class="col-md-12 text-center">
								<p>
									<small class="block">&copy; 2016 &copy <a href="index.php">SHOWlocal </a> . All Rights Reserved.</small>

								</p>

							</div>
						</div>

					</div>
				</footer>
    <script type="text/javascript" src="../js/site.js"></script>
    <script type="text/javascript" src="../js/jquery.js"></script>
    <script type="text/javascript" src="../js/site.min.js"></script>
</body>
</html>
