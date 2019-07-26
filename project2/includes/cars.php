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

	<!-- Icon Fonts -->.
  <link rel='stylesheet' href='../css/bootstrap.css'>
  <link rel="stylesheet" href="../css/bootstrap.min.css">
  <link rel='stylesheet' href='../css/style.css'>
	<link rel="stylesheet" type="text/css" href="../css/style_icomoon.css">
	<link rel="stylesheet" type="text/css" href="../css/option-panel.css">
	<link rel="stylesheet" type="text/css" href="../css/style_1.css">
	<link rel="stylesheet" type="text/css" href="../css/theme-color.css">
  <link rel="stylesheet" href="../css/main2.css">




</head>

<body class="home header-has-img loading">



    <div class="mobile-nav">


        <div class="mobile-nav-inner">
            <nav id="mobile-nav" class="nav">
				<ul class="clearfix">

					<li><a href="profile_2.php"><?php echo $_SESSION['username']; ?> <span></span></a></li>
					<li><a href="logout.php">Logout</a></li>

				</ul>
			</nav>
        </div>
    </div><!-- .mobile-nav -->

    <div class="wrapper" >
        <header class="header" >
            <div class="head-bg" style="background-image:url(../images/car1.jpg);"></div>

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

										<li><a href="profile_2.php"><?php echo $_SESSION['username']; ?> <span></span></a></li>
										<li><a href="logout.php">Logout</a></li>
											</ul>
								</nav>


                            </div><!-- .nav-wrap -->
                        </div>
                    </div>
                </div>
            </div>
        </header><!-- .header -->

        <div class="content" >
            <div class="container" >

				<!-- START: PAGE CONTENT -->
				<section id="about" class="section section-about" style="height:auto;">
          <form class='form-inline' method="post" action="" id='fh5co-header-subscribe'>
            <div class='col-md-12 col-md-offset-0'>
              <div class='form-group'>
                <select class="form-control" style="width:400px;margin-left:0px;  background-color:#fff;" name="search">
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
                <button type='submit' name='browse' class='btn btn-danger' style="position:absolute; top:-5px; right:	440px; height:55px; ">Search</button>
              </div>
            </div>

          </form>
				</section><!-- #about -->


        <section id='experiencee'  class='section section-blog' style='margin-top:100px;'>
          <div class='animate-up'>

                        <div class='blog-grid'>
                            <div class='grid-sizer'></div>
        <!----------------------------------------------------------------------->
        <?php
                    include 'config.php';


                    if (isset($_POST['browse'])) {
                      # code...
                      $search = $_POST['search'];
                      $city   = "city = '$search'";
                      $quary = "SELECT * from`car` WHERE $city ";
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
                        <a href='profile_car.php?id=$data[0]'>".$data[2]."</a>
                    </h3>

                    <div class='post-info'>
                        <a href=''><i class='icon icon-user'></i>by ";

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
echo "
												</a>

                    </div>
                </div>
            </article>
        </div>

        ";
        }
        }
        else {
          $quary = "SELECT * FROM `car`";
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
                        <a href='profile_car.php?id=$data[0]'>".$data[2]."</a>
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
        }
        ?>



        <!--------------------------------------------------->

            </div>
          </div>

        </section>

</div>
</div>

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
      <script src='../js/main2.js'></script>

</body>
</html>
