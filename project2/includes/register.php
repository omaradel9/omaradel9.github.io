
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>takearound</title>


    <link rel="stylesheet" type="text/css" href="../css/register.css">
    <link rel="stylesheet" type="text/css" href="../css/log.css">




</head>
<body>

<!-- multistep form -->
<form id="msform" action="register.php" method="post" enctype="multipart/form-data">

  <fieldset>
    <h2 class="fs-title">Create your account</h2>
<br>

    <input type="text" name="uname" placeholder="Username" />
    <input type="text" name="email" placeholder="Email" />
    <input type="password" name="pass" placeholder="Password" />
    <input type="password" name="cpass" placeholder="Confirm Password" />
    <input type="text" name="fname" placeholder="First Name" />
    <input type="text" name="lname" placeholder="Last Name" />
    <input type="text" name="salary" placeholder="Salary" />
    <input type="date" name="date" placeholder="Birthdate" />
    <input type="text" name="" placeholder="Activities" disabled/>
    <input type="checkbox" name="active" value="sport" id="rb5" />  <label  for="rb5" >Sport</label>
    <input type="checkbox" name="active" value="music" id="rb6" />  <label  for="rb6" >Music</label>
    <input type="checkbox" name="active" value="travel" id="rb7" />  <label  for="rb7" >Travel</label>





    <select class="form-control" name="country">
    <option selected>--select your city--</option>
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



            <input type="radio" name="gendar" value="male" id="rb2" />
            <label  for="rb2" >Male</label>
            <input type="radio" name="gendar" value="female" id="rb3" />
            <label  for="rb3">Female</label>



					<input  name="profile" type="file" class="input">
          <textarea type="text" name="intro" placeholder="Intro" /></textarea>
          <textarea type="text" name="about" placeholder="About" /></textarea>
          <textarea type="text" name="iwish" placeholder="I wish you" /></textarea>
    <input type="submit" name="submit" class="submit action-button" value="Submit" />

<?php
include 'config.php';

     if(isset($_POST['submit'])){
                $username  = $_POST['uname'];
                $email     = $_POST['email'];
                $password  = $_POST['pass'];
                $cpassword = $_POST['cpass'];
                $frist_name=$_POST['fname'];
                $last_name =$_POST['lname'];
                $gendar    = $_POST['gendar'];
                $about    = $_POST['about'];
                $iwish    = $_POST['iwish'];
                $active    = $_POST['active'];
                $intro    = $_POST['intro'];
                $birthdate    = $_POST['date'];
                $salary    = $_POST['salary'];
                $country   = $_POST['country'];
                $picture   = $_FILES['profile']['name'];
                $tmp_pic   = $_FILES['profile']['tmp_name'];
                $location  = dirname(__FILE__)."/../images/profiles/";

          move_uploaded_file($tmp_pic , $location.$picture);



                    $qur  =   "INSERT INTO `identity` VALUES (NULL,'$username','$password' ,'$email', '$picture' , '$gendar' , '$frist_name', '$last_name','user','$country','$about','$intro','$iwish','$active','$salary','$birthdate',NOW());";
                     mysqli_query($LINK, $qur);



                     mysqli_close($LINK);

          }










?>
<br />
<h3><a href="login.php">Login </a></h3>
</fieldset>

</form>



  </body>
</html>
