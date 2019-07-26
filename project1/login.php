<?php
        session_start();


 ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sign Up Form by Colorlib</title>
    <link rel="icon" href="img/favicon.png" type="image/png">
    <!-- Font Icon -->
    <link rel="stylesheet" href="fonts/material-icon/css/material-design-iconic-font.min.css">

    <!-- Main css -->
    <link rel="stylesheet" href="css/style1.css">
     <link href="css/main.css" rel="stylesheet" media="all">
</head>
<body>


        <div class="page-wrapper bg-gra-03 p-t-45 p-b-50">

          </section>

        <!-- Sing in  Form -->
        <section class="sign-in">
            <div class="container">
                <div class="signin-content">
                    <div class="signin-image">
                        <figure><img src="img/login/signin-image.jpg" alt="sing up image"></figure>
                        <a href="register.php" class="signup-image-link">Create an account</a>
                    </div>

                    <div class="signin-form">
                        <h2 class="form-title">Sign in</h2>
                        <form method="POST" class="register-form" id="login-form">
                            <div class="form-group">
                                <label for="your_name"><i class="zmdi zmdi-account material-icons-name"></i></label>
                                <input type="text" name="email" id="your_name" placeholder="Your Name"/>
                            </div>
                            <div class="form-group">
                                <label for="your_pass"><i class="zmdi zmdi-lock"></i></label>
                                <input type="password" name="your_pass" id="your_pass" placeholder="Password"/>
                            </div>
                            <div class="form-group">
                                <input type="checkbox" name="remember-me" id="remember-me" class="agree-term" />
                                <label for="remember-me" class="label-agree-term"><span><span></span></span>Remember me</label>
                            </div>
                            <div class="form-group form-button">
                                <input type="submit" name="submit" id="signin" class="form-submit" value="Log in"/>
                            </div>
                        </form>

<?php
include 'config.php';

     if(isset($_POST['submit'])){

   				$email = $_POST['email'];
   				$password = $_POST['your_pass'];
   				$qur = "SELECT * FROM identity";
   				$dqur = mysqli_query($LINK,$qur);
   				while ($find = mysqli_fetch_array($dqur)) {
   					if ($email==$find[3] 	&& $password==$find[2]) {
              $_SESSION['id']          = $find[0];
              $_SESSION['username']    = $find[1];
              $_SESSION['password']    = $find[2];
              $_SESSION['email']       = $find[3];
              $_SESSION['gendar']      = $find[4];
              $_SESSION['age']         = $find[5];


   								header('location:index.php');

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
                        <div class="social-login">
                            <span class="social-label">Or login with</span>
                            <ul class="socials">
                                <li><a href="#"><i class="display-flex-center zmdi zmdi-facebook"></i></a></li>
                                <li><a href="#"><i class="display-flex-center zmdi zmdi-twitter"></i></a></li>
                                <li><a href="#"><i class="display-flex-center zmdi zmdi-google"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>

    </div>
    </div>
    <!-- JS -->

</body><!-- This templates was made by Colorlib (https://colorlib.com) -->
</html>