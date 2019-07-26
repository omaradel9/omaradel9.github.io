<?php
        session_start();

 ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Takearound</title>


    <link id="main" rel="stylesheet" type="text/css" href="../css/publisher.css">
    <link rel="stylesheet" type="text/css" href="../css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="../css/profile.css">
    <link rel="stylesheet" href="assets/css/main.css" />
    <link rel="shortcut icon" type="image/png" href="../favicon.png"/>



</head>
<body style="background-color:#fff;">
<div id="wrapper" class="behind">


    <nav class="navbar navbar-default" style="background-color:#fff;">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="../index.php"><h3>Takearound</h3></a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right main-nav">

                      <?php
                          if (isset($_SESSION['username'])) {
                            # code...
                            echo "<li><a href='' class='scrollto'>".$_SESSION['username']."</a></li>"

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
<div class="prof_pic" style="background-image:url(../images/<?php echo $_SESSION['picture'];  ?>);"></div>
<div class="prof_info">
    <div id="name"><?php echo $_SESSION['username']; ?></div>
    <a href=""><div id="edit">Edit Profile</div></a>
    <a href="trips.php"><div id="ntrip">Add trip</div></a>
    <a href="addplace.php"><div id="nplace">Add places</div></a>
    <a href="addcar.php"><div id="guide">Add car</div></a>
    <div id="details">omar adel is developer </div>

</div>

    <script src="../js/jquery-1.11.1.min.js"></script>
    <script src="../js/owl.carousel.js"></script>
    <script src="../js/wow.min.js"></script>
    <script src="../js/jquery.onepagenav.js"></script>
    <script src="../js/tooltip.js"></script>
    <script src="../js/jquery.form-validator.js"></script>
    <script src="../js/preloader.js"></script>
    <script src="../js/main.js"></script>
    <script src="../js/bootstrap.min.js"></script>
	</body>
	</html>
