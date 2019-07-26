
<?php
      session_start();
 ?>


<!DOCTYPE html>
<html>
<head>

    <title>Safarni</title>


    <link rel="stylesheet" type="text/css" href="../css/animate.css">

    <link rel="stylesheet" type="text/css" href="../style.css">
    <link id="main" rel="stylesheet" type="text/css" href="../css/publisher.css">
    <link rel="stylesheet" type="text/css" href="../css/style.css">
    <link rel="stylesheet" type="text/css" href="../css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="../css/trip.css">




</head>
<body>
<div id="wrapper" class="behind">


    <nav class="navbar navbar-default">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="../index.php"><h3>SAFARNI</h3></a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right main-nav">
                    <li><a href="profile_2.php"><?php echo $_SESSION['username']; ?> <span></span></a></li>
                    <li><a href="#reviews" class="scrollto">logout</a></li>
                    <li><a href="#author" class="scrollto"></a></li>

                </ul>
            </div><!-- /.navbar-collapse -->
        </div><!-- /.container-fluid -->
    </nav>

    <div class="trip" >


    <div class="new_trip">
        <form enctype="multipart/form-data" method="post" action="">
        <p  align="center"><h3 align="center">Create a new trip</h3></p>
        <p><h5 style="margin-left:25px; font-size: 20px;font-family: sans-serif;">Where are you going</h5> </p>
         <input type="text" class="form-control" name="place" id="exampleInputEmail1" placeholder="Enter your place" style="width:300px;margin-left:25px;">
         <p><h5 style="margin-left:25px; font-size: 20px;font-family: sans-serif;">Date From</h5> </p>
        <input type="date"  class="form-control" name="datefrom" placeholder="Date From" style="width:140px;margin-left:25px;">
            <div class="" style="width:140px;height:100px; margin-left:185px;position:absolute;   margin-top:-95px;">
                 <p><h5 style="font-size: 20px;font-family: sans-serif;">Date To</h5> </p>
        <input type="date"  class="form-control" name="dateto" placeholder="Date To" ></div>
        <label> <h5 style="margin-left:25px; font-size: 15px;font-family: sans-serif;">
Number of people
</h5> </label>
<select class="form-control" name="nopeople" style="width:170px;margin-left:156px;position:absolute; margin-top:-39px;">
<option value="just me">just me </option>
<option value="Two people">Two people</option>
<option value="three people">three people</option>
<option value="More than three">More than three</option>
</select>
    <p><h5 style="margin-left:25px; font-size: 20px;font-family: sans-serif;">Trip duration</h5> </p>
     <input type="text" class="form-control" name="duration" id="exampleInputEmail1" placeholder="Trip duration" style="width:300px;margin-left:25px;">
     <select class="form-control" style="width:300px;margin-left:25px;" name="country">
     <option selected>--Where are you going ?--</option>
     <option value="Afghanistan">Afghanistan</option>
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

    <input type="file" class="form-control" style="width:300px;margin-left:25px;"  id="exampleInputFile" name="picture">



     <textarea type="text" class="form-control" name="details" style="width:300px;margin-left:25px;"  rows="3" cols="20" placeholder="enter trip details"   value=<?php   if(isset($_POST['cardetails']))  echo $_POST['cardetails'] ?>></textarea>


       <button type="submit" name="submit" class="btn btn-primary" style="width:200px;margin-left:70px;  font-size: 25 px;font-family: sans-serif;">Make Trip</button>

         </form>

        </div>




    </div>





    <footer>
        <div class="container">
            <div class="row">
                <div class="col-sm-6 text-left text-center-mobile">
                    <p class="copyright small muted">Copyright © 2017 Safarni</p>
                </div>
                <div class="col-sm-6 text-right text-center-mobile">
                    <div class="social">
                        <a href="#" class="facebook"><i class="fa fa-facebook"></i></a>
                        <a href="#" class="twitter"><i class="fa fa-twitter"></i></a>
                        <a href="#" class="dribbble"><i class="fa fa-dribbble"></i></a>
                        <a href="#" class="vine"><i class="fa fa-vine"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </footer>


</div>

<div class="notification-box"><span>Sending...</span></div>
<div class="mobile-nav">
    <ul class="menu">

    </ul>
</div>
<?php
if(isset($_POST['submit']))
{
        include 'config.php';
          $place        = $_POST['place'];
          $datefrom     = $_POST['datefrom'];
          $dateto       = $_POST['dateto'];
          $nopeople     = $_POST['nopeople'];
          $duration     = $_POST['duration'];
          $details      = $_POST['details'];
          $country      = $_POST['country'];
          $leader       = $_SESSION['user_id'] ;
          $picture      = $_FILES['picture']['name'];
          $tmp_pic      = $_FILES['picture']['tmp_name'];
          $location     = dirname(__FILE__). "/../images/trips/";
          move_uploaded_file($tmp_pic , $location.$picture);

          $insert    = "INSERT INTO `trips` VALUES (NULL,'$leader','$place','$datefrom','$dateto','$duration','$picture','$nopeople','$details','$country',NOW())";
          mysqli_query($LINK , $insert);



          echo "
              <div class='al alert alert-success'>
              <strong>Congratulation :)</strong> DATA ENTERED .
              </div></div>";

                mysqli_close($LINK);

      }


 ?>

<script src="../js/jquery-1.11.1.min.js"></script>
<script src="../js/owl.carousel.js"></script>
<script src="../js/wow.min.js"></script>
<script src="../js/jquery.onepagenav.js"></script>
<script src="../js/tooltip.js"></script>
<script src="../js/jquery.form-validator.js"></script>
<script src="../js/preloader.js"></script>
<script src="../js/main.js"></script>
<script src="../js/bootstrap.min.js"></script>
<link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.4/themes/smoothness/jquery-ui.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.4/jquery-ui.min.js"></script>




</body>
</html>
