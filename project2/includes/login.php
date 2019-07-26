<?php
        session_start();


 ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>takearound</title>

    <link rel="shortcut icon" type="image/png" href="../favicon.png"/>

    <link rel="stylesheet" type="text/css" href="../css/register.css">



</head>
<body>


<!-- multistep form -->
<form id="msform" action="login.php" method="post" enctype="multipart/form-data">

  <fieldset>
    <h2 class="fs-title">Create your account</h2>
<br>


    <input type="text" name="email" placeholder="Email" />
    <input type="password" name="pass" placeholder="Password" />




    <input type="submit" name="submit" class="submit action-button" value="login" />

<?php
include 'config.php';

     if(isset($_POST['submit'])){

   				$email = $_POST['email'];
   				$password = $_POST['pass'];
   				$qur = "SELECT * FROM identity";
   				$dqur = mysqli_query($LINK,$qur);
   				while ($find = mysqli_fetch_array($dqur)) {
   					if ($email==$find[3] 	&& $password==$find[2]) {
              $_SESSION['user_id']     = $find[0];
              $_SESSION['username']    = $find[1];
              $_SESSION['password']    = $find[2];
              $_SESSION['email']       = $find[3];
              $_SESSION['picture']     = $find[4];
              $_SESSION['gendar']      = $find[5];
              $_SESSION['fristname']   = $find[6];
              $_SESSION['lastname']    = $find[7];
              $_SESSION['outh']        = $find[8];
              $_SESSION['country']     = $find[9];
              $_SESSION['about']       = $find[10];
              $_SESSION['intro']       = $find[11];
              $_SESSION['iwish']       = $find[12];
              $_SESSION['activities']  = $find[13];
              $_SESSION['salary']      = $find[14];
              $_SESSION['birthdate']   = $find[15];

   								header('location:../index.php');

   					}
            else {

                continue;
            }

   					# code...
   				}
   				# code...
          echo "<input type='text' placeholder='Password not matched' />";
   			}




?>
<br>
<h3><a href="register.php">Signup </a></h3>
</fieldset>

</form>



  </body>
</html>
