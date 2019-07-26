 	 	<?php

						session_start();

		 ?>

	<!DOCTYPE html>
	<html lang="en">
	<head>
	    <meta charset="UTF-8">
	    <title>velvet</title>

	    <link rel="stylesheet" type="text/css" href="css/animate.css">

	    <link rel="stylesheet" type="text/css" href="style.css">
	    <link id="main" rel="stylesheet" type="text/css" href="css/publisher.css">
	    <link rel="stylesheet" type="text/css" href="css/style.css">
	    <link rel="stylesheet" type="text/css" href="css/bootstrap.css">

			<link rel="stylesheet" type="text/css" href="css/trip.css">



	</head>
	<body>
	<div id="wrapper" class="behind">


	    <nav class="navbar navbar-default">
	        <div class="container">
	            <!-- Brand and toggle get grouped for better mobile display -->
	            <div class="navbar-header">

	                <a class="navbar-brand" href="index.php"><h3>velvet</h3></a>
	            </div>

	        </div><!-- /.container-fluid -->
	    </nav>


	<form method="post" action="" enctype="multipart/form-data">

		<div class="trip" >


			<div class="new_trip" style="height:750px;"align="center">
					<form enctype="multipart/form-data" method="post" action="">
					<p  align="center"><h3 align="">Add your place</h3></p>

                        <p><h5 style="margin-left:25px; font-size: 20px;font-family: sans-serif;">Place name</h5> </p>
                        <input type="text" class="form-control" name="name" id="exampleInputEmail1" placeholder="name" style="width:300px;margin-left:25px;"><p  align="center">

                        <p><h5 style="margin-left:25px; font-size: 20px;font-family: sans-serif;">Place location</h5> </p>
					<input type="text" class="form-control" name="location" id="exampleInputEmail1" placeholder="location" style="width:300px;margin-left:25px;"><p  align="center">


                        <div class="form-group">
						<p><h5 style="margin-left:25px; font-size: 20px;font-family: sans-serif;">Place picture</h5> </p>
						 <input type="file" class="form-control" style="width:300px;margin-left:25px;"  id="exampleInputFile" name="placepicture">


					 </div>
                        <p><h5 style="margin-left:25px; font-size: 20px;font-family: sans-serif;">type of holidays</h5> </p>

                             <select class="form-control" style="width:300px;margin-left:25px;" name="type">
                                 <option selected>--type of holidays--</option>

                                 <option value="Romantic">Romantic</option>
                                 <option value="Camping">Camping</option>
                                 <option value="Relaxation">Relaxation</option>
                                 <option value="Family">Family</option>
                                 <option value="Adventure">Adventure</option>

                             </select>
                        <p><h5 style="margin-left:25px; font-size: 20px;font-family: sans-serif;">season</h5> </p>
                             <select class="form-control" style="width:300px;margin-left:25px;" name="season">
                                 <option value="" selected>--select season---</option>
                                 <option value="Summer">Summer</option>
                                 <option value="Winter"> Winter</option>
                             </select>
                        <p><h5 style="margin-left:25px; font-size: 20px;font-family: sans-serif;">main activities</h5> </p>
                             <select class="form-control" style="width:300px;margin-left:25px;" name="activities">
                                 <option value="" selected>--select main activities---</option>
                                 <option value="Relaxing/Spa">Relaxing/Spa</option>
                                 <option value="Clubbing/partying"> Clubbing/partying</option>
                                 <option value="Sightseeing"> Sightseeing</option>
                                 <option value="Sports activity"> Sports activity</option>
                                 <option value="Indoor / Outdoor activites"> Indoor / Outdoor activites</option>
                                 <option value="Shopping"> Shopping</option>
                             </select>
                        <p><h5 style="margin-left:25px; font-size: 20px;font-family: sans-serif;">travel theme</h5> </p>
                             <select class="form-control" style="width:300px;margin-left:25px;" name="theme">
                                 <option value="" selected>--select travel theme---</option>
                                 <option value="historical sites">historical sites</option>
                                 <option value="natural beauty">natural beauty</option>
                                  <option value="beach">beach</option>
                                  <option value="island">island</option>
                                  <option value="shopping">shopping</option>
                                  <option value="culture and art">culture and art</option>
                                  <option value="hot springs">hot springs</option>
                             </select>
             <p><h5 style="margin-left:25px; font-size: 20px;font-family: sans-serif;">living place</h5> </p>
                             <select class="form-control" style="width:300px;margin-left:25px;" name="living">
                                 <option value="" selected>--select living place---</option>
                                 <option value="All inclusive stays">All inclusive stays</option>
                                 <option value="Youth hostel stays">Youth hostel stays</option>
                                  <option value="Home stays">Home stays</option>
                                  <option value="Stays in luxury hotels / Appart'hotel">Stays in luxury hotels / Appart'hotel</option>
                                  <option value="Camping">Camping <stays></stays></option>
                                  <option value="Other">Other</option>

                             </select>

                       <p><h5 style="margin-left:25px; font-size: 20px;font-family: sans-serif;">travel budget</h5> </p>
                             <select class="form-control" style="width:300px;margin-left:25px;" name="budget">
                                 <option value="" selected>--select travel budget---</option>
                                 <option value="less than 500">less than 500</option>
                                  <option value="between 500 and 1500">between 500 and 1500</option>
                                  <option value="between 1500 and 2500">between 1500 and 2500</option>
                                  <option value="between 2500 and 4000">between 2500 and 4000</option>
                                  <option value="more than 4000">more than 4000</option>

                             </select>

					<p><h5 style="margin-left:25px; font-size: 20px;font-family: sans-serif;">More details</h5> </p>
					<textarea class="form-control" name="details" id="exampleInputEmail1" placeholder="more detail please" style="width:300px;margin-left:25px;"></textarea>

				 <button type="submit" name="submit" class="btn btn-primary" style="width:200px;margin:30px;  font-size: 25 px;font-family: sans-serif;">Add place</button>

					 </form>

					</div>




			</div>
	</form>


	</div>




	<?php

	if(isset($_POST['submit']))
	{
	        include 'config.php';
	        $picture      = $_FILES['placepicture']['name'];
	        $tmp_pic      = $_FILES['placepicture']['tmp_name'];
	        $location     = dirname(__FILE__). "/img/";
	        move_uploaded_file($tmp_pic , $location.$picture);

	          $location    = $_POST['location'];
	          $name        = $_POST['name'];
              $type        = $_POST['type'];
	          $details     = $_POST['details'];
			  $season      = $_POST['season'];
              $activities  = $_POST['activities'];
              $theme	   = $_POST['theme'];
              $living	   = $_POST['living'];
              $budget 	   = $_POST['budget'];

	          $insert    = "INSERT INTO `place` VALUES (NULL,'$name','$location','$type','$picture','$details','$season','$activities','$theme','$budget','$living',NOW())";
	          mysqli_query($LINK , $insert);




	                mysqli_close($LINK);

	      }
				?>


	</body>

	<script src="../js/owl.carousel.js"></script>
	<script src="../js/wow.min.js"></script>
	<script src="../js/jquery.onepagenav.js"></script>
	<script src="../js/tooltip.js"></script>
	<script src="../js/jquery.form-validator.js"></script>
	<script src="../js/preloader.js"></script>
	<script src="../js/main.js"></script>
	<script src="../js/bootstrap.min.js"></script>
	</html>
