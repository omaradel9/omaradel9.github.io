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



    <div class="mobile-nav">


        <div class="mobile-nav-inner">
            <nav id="mobile-nav" class="nav">
				<ul class="clearfix">
					<li><a href="index.html#about">About</a></li>
					<li><a href="index.html#experience">Skills</a></li>
					<li><a href="index.html#experiencee">Service</a></li>
					<li><a href="chat.php">Contact <span></span></a></li>
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
										<li><a href="index.html#about">About</a></li>

										<li><a href="index.html#experience">Skills</a></li>
										<li><a href="index.html#experiencee">Service</a></li>
										<li><a href="chat.php">Contact <span></span></a></li>
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
										<div class="profile-photo"><img src="../images/profiles/<?php echo $_SESSION['picture']; ?>" alt="<?php echo $_SESSION['username']; ?>"/></div>
									</div>
									<div class="col-xs-7">
										<div class="profile-info">
											<div class="profile-preword"><span>£&nbsp<?php echo $_SESSION['salary']; ?></span></div>
											<h1 class="profile-title"><span>I'm</span> <?php echo $_SESSION['username']; ?></h1>
											<h2 class="profile-position"></h2></div>
                                            <ul class="profile-list">
                                                <li class="clearfix">
                                                    <strong class="title">Age</strong>
                                                    <span class="cont">
																											<?php
																												$date = $_SESSION['birthdate'];
																												$date2 = date("Y-m-d");;
																												$today = strtotime(date($date2));
																												$today2 = strtotime(date($date));
																												$sec= $today - $today2;
																												$year = $sec /31536000;
																												if (is_int($year)) {
																														echo $year;
																												}
																												else{
																													echo round($year);
																												}

																											?>
                                                    </span>
                                                </li>
                                                <li class="clearfix">
                                                    <strong class="title">City</strong>
                                                    <span class="cont"><?php echo $_SESSION['country']; ?></span>
                                                </li>
                                                <li class="clearfix">
                                                    <strong class="title">E-mail</strong>
                                                    <span class="cont"><?php echo $_SESSION['email']; ?></span>
                                                </li>


                                                <li class="clearfix">
                                                    <a href="addcar.php"><strong class="title"><span class="button">Add car</span></strong></a>
														<a href="addplace.php"><strong class="title"><span class="button">Add place</span></strong></a>
															<a href="trips.php"><strong class="title"><span class="button">Add trip</span></strong></a>

													<?php
													if($_SESSION['outh'] =="admin") {
														echo "<a href='register.php'><strong class='title'><span class='button'>Add user</span></strong></a>";


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
                                        <h3>About Me </h3>
                                        <h4></h4>
                                        <p><?php echo $_SESSION['about']; ?></p>
                                    </div>
                                </div>

                                <div class="timeline-box timeline-box-right">
                                    <span class="dot"></span>
                                    <div class="timeline-box-inner animate-left">
                                        <span class="arrow"></span>
                                        <div class="date"></div>
                                        <h3>I Wish You .</h3>
                                        <h4></h4>
                                        <p><?php echo $_SESSION['iwish']; ?></p>
                                    </div>
                                </div>

                                <div class="timeline-box timeline-box-left">
                                    <span class="dot"></span>
                                    <div class="timeline-box-inner animate-right">
                                        <span class="arrow"></span>
                                        <div class="date"></div>
                                        <h3>Activities</h3>
                                        <h4></h4>
                                        <p><?php echo $_SESSION['activities']; ?></p>
                                    </div>
                                </div>


							</div>
						</div>
					</div>
				</section><!-- #experience -->

				<section id="experiencee"  class="section section-blog">
					<div class="animate-up">
						<h2  class="section-title">Service</h2>

												<div class="blog-grid">
														<div class="grid-sizer"></div>
														<?php
															include 'config.php';
														$id = $_SESSION['user_id'];
														$quary = "SELECT * FROM `place` WHERE leader = $id";
														$do    = mysqli_query($LINK,$quary);
														while ($data = mysqli_fetch_array($do)) {
															# code...

													echo "

													<div class='grid-item'>
															<article class='post-box'>
																	<div class='post-media'>
																			<div class='post-image'>
																					<a href='profile_place.php?id=$data[0]'><img src='../images/places/$data[5]' alt=''> </a>
																			</div>
																	</div>

																	<div class='post-data'>
																			<a href=''><time class='post-datetime' style='width:100px;height:40px;' datetime='2015-03-13T07:44:01+00:00'>
																					<span class='day'>PLACE</span>
																					<span class='month'></span>
																			</time></a>

																			<h3 class='post-title'>
																					<a href='single-image.html'>".$data[2]."</a>
																			</h3>

																			<div class='post-info'>
																					<a href=''><i class='icon icon-user'></i>by";

																					$f= "SELECT * FROM `identity` WHERE user_id=$data[1]";
																					$d= mysqli_query($LINK,$f);
																					while ($s = mysqli_fetch_array($d)) {
																						if ($s[1]== $_SESSION['username']) {
																							echo "<a href='profile_2.php'>YOU</a>";
																						}
																						else {
																							echo "<a href='profile_person.php?id=$s[0]'>".$s[1]."</a>&nbsp&nbsp&nbsp<a href='profile_2.php#contact'>CONTACT</a>";
																						}

																					}




												echo"
																					</a>

																			</div>
																	</div>
															</article>
													</div>

													";
													}

													$quary = "SELECT * FROM `car` WHERE owner = $id";
													$do    = mysqli_query($LINK,$quary);
													while ($data = mysqli_fetch_array($do)) {
														# code...

												echo "

												<div class='grid-item'>
														<article class='post-box'>
																<div class='post-media'>
																		<div class='post-image'>
																				<a href='profile_car.php?id=$data[0]'><img src='../images/carphoto/$data[7]' alt=''> </a>
																		</div>
																</div>

																<div class='post-data'>
																		<a href=''><time class='post-datetime' style='width:100px;height:40px;' datetime='2015-03-13T07:44:01+00:00'>
																				<span class='day'>CAR</span>
																				<span class='month'></span>
																		</time></a>

																		<h3 class='post-title'>
																				<a href='single-image.html'>".$data[2]."</a>
																		</h3>

																		<div class='post-info'>
																				<a href=''><i class='icon icon-user'></i>by";

																				$f= "SELECT * FROM `identity` WHERE user_id=$data[1]";
																				$d= mysqli_query($LINK,$f);
																				while ($s = mysqli_fetch_array($d)) {
																					if ($s[1]== $_SESSION['username']) {
																						echo "<a href='profile_2.php'>YOU</a>";
																					}
																					else {
																						echo "<a href='profile_person.php?id=$s[0]'>".$s[1]."</a>&nbsp&nbsp&nbsp<a href='profile_2.php#contact'>CONTACT</a>";
																					}

																				}




								echo"
																				</a>

																		</div>
																</div>
														</article>
												</div>

												";
												}

												$quary = "SELECT * FROM `trips` WHERE leader = $id";
												$do    = mysqli_query($LINK,$quary);
												while ($data = mysqli_fetch_array($do)) {
													# code...

											echo "

											<div class='grid-item'>
													<article class='post-box'>
															<div class='post-media'>
																	<div class='post-image'>
																			<a href='show_trip.php?id=$data[0]'><img src='../images/trips/$data[3]' alt=''> </a>
																	</div>
															</div>

															<div class='post-data'>
																	<a href=''><time class='post-datetime' style='width:100px;height:40px;' datetime='2015-03-13T07:44:01+00:00'>
																			<span class='day'>TRIP</span>
																			<span class='month'></span>
																	</time></a>

																	<h3 class='post-title'>
																			<a href='single-image.html'>".$data[9]."</a>
																	</h3>

																	<div class='post-info'>
																			<a href=''><i class='icon icon-user'></i>by";

																			$f= "SELECT * FROM `identity` WHERE user_id=$data[1]";
																			$d= mysqli_query($LINK,$f);
																			while ($s = mysqli_fetch_array($d)) {
																				if ($s[1]== $_SESSION['username']) {
																					echo "<a href='profile_2.php'>YOU</a>";
																				}
																				else {
																					echo "<a href='profile_person.php?id=$s[0]'>".$s[1]."</a>&nbsp&nbsp&nbsp<a href='profile_2.php#contact'>CONTACT</a>";
																				}

																			}




										echo"
																			</a>

																	</div>
															</div>
													</article>
											</div>

											";
											}

?>

						</div>
					</div>
				</section><!-- #blog -->



				<section id="contact" class="section section-contact">

				</section><!-- #contact -->

				<footer id="fh5co-footer" role="contentinfo">
					<div class="container">

						<div class="row copyright">
							<div class="col-md-12 text-center">
								<p>
									<small class="block">&copy; 2017 &copy <a href="index.php">SHOWlocal </a> . All Rights Reserved.</small>

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
