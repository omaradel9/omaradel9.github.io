<?php
    session_start();

     ?>


<html>
      <head>
              <title>Insert Car</title>
  <link id="main" rel="stylesheet" type="text/css" href="../css/publisher.css">
              <link rel="stylesheet" href="../css/bootstrap.css" >
              <link rel="stylesheet" href="../css/show_style.css" >
              <link rel="stylesheet" href="../css/site.css" >


      </head>

  <body>




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
                <a class="navbar-brand" href="../index.php"><h3>SAFARNI  </h3></a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right main-nav">

                      <?php
                          if (isset($_SESSION['username'])) {
                            # code...
                            echo "<li><a href='profile.php' class='scrollto'>".$_SESSION['username']."</a></li>"

                              ."<li><a href='logout.php' class='scrollto'>logout</a></li>";
                          }
                        else {
                          echo " <li><a href='login.php' class='scrollto'>login</a></li>";
                        }
                           ?>


                    <li><a href="#author" class="scrollto"></a></li>

                </ul>
            </div><!-- /.navbar-collapse -->
        </div><!-- /.container-fluid -->
    </nav>
<div class="backimage"></div>
<div class="all_cont">



    <strong style="margin-left:130px; ">INSET YOUR CAR</strong><br /><br />

    <form action=""  method="post" enctype="multipart/form-data"  >

<div class="form-group">

  <input type="text"  name="carname" class="al form-control input" id="exampleInputEmail1" placeholder="enter car name" required value=<?php   if(isset($_POST['carname']))  echo $_POST['carname'] ?> >

</div>

<div class="form-group">

<input type="text"  name="carmodel" class="al form-control input" id="exampleInputEmail112" placeholder="enter car model" required   value=<?php   if(isset($_POST['carmodel']))  echo $_POST['carmodel'] ?> >

</div>

        <div class="form-group">

          <select class="form-control" style="width:300px;margin-left:50px;  background-color:#fff;" name="city">
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

</div>

<div class="form-group">

<input type="text"  name="carcolor" class="al form-control input" id="exampleInputEmail12" placeholder="enter car color" required     value=<?php   if(isset($_POST['carcolor']))  echo $_POST['carcolor'] ?> >

</div>
<div class="form-group">

<input type="text"  name="carrent" class="al form-control input" id="exampleInputEmail112" placeholder="enter car rent" required   value=<?php   if(isset($_POST['carmodel']))  echo $_POST['carmodel'] ?> >

</div>

  <div class="form-group">

     <input type="file" class="al form-control input"  id="exampleInputFile" name="carpicture">


   </div>

<div class="form-group">

<textarea type="text" class="al  form-control input" name="cardetails"  rows="3" cols="20" placeholder="enter car details"   value=<?php   if(isset($_POST['cardetails']))  echo $_POST['cardetails'] ?>></textarea>

</div>




<div class="form-group">
<button type="submit"  name="submit" class="nal btn btn-success">Add Car</button>
</div>

<?php

if(isset($_POST['submit']))
{
        include 'config.php';
        $picture      = $_FILES['carpicture']['name'];
        $tmp_pic      = $_FILES['carpicture']['tmp_name'];
        $location     = dirname(__FILE__). "/../images/carphoto/";
        move_uploaded_file($tmp_pic , $location.$picture);




          $name         = $_POST['carname'];
          $model        = $_POST['carmodel'];
          $color        = $_POST['carcolor'];
          $details      = $_POST['cardetails'];
          $rent         = $_POST['carrent'];
          $city         = $_POST['city'];
          $owner        = $_SESSION['user_id'];

             $insert    = "INSERT INTO `car` VALUES (NULL,'$owner','$name','$model','$color','$details','$rent','$picture','$city',NOW())";

          mysqli_query($LINK , $insert);




          echo "
              <div class='al alert alert-success'>
              <strong>Congratulation :)</strong> DATA ENTERED .
              </div></div>";

                mysqli_close($LINK);

      }










 ?>

</table>



</form>


</body>







</html>
