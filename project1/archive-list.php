<?php
					session_start();


  ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- The above 4 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <!-- Title -->
    <title>Newsfeed</title>

    <!-- Favicon -->
   <link rel="icon" href="img/favicon.png" type="image/png">
    <!-- Stylesheet -->
    <link rel="stylesheet" href="style.css">

</head>

<body>



    <!-- ##### Breadcrumb Area Start ##### -->
    <div class="vizew-breadcrumb">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.php"><i class="fa fa-home" aria-hidden="true"></i> Home</a></li>

                            <li class="breadcrumb-item active" aria-current="page">shared places</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <!-- ##### Breadcrumb Area End ##### -->

    <!-- ##### Archive List Posts Area Start ##### -->
    <div class="vizew-archive-list-posts-area mb-80">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12 col-lg-8">
                    <!-- Archive Catagory & View Options -->
                    <div class="archive-catagory-view mb-50 d-flex align-items-center justify-content-between">
                        <!-- Catagory -->
                        <div class="archive-catagory">
                            <h4><i class="fa fa-travel" aria-hidden="true">   <img src="img/icon.png" style=" width: 50px; " alt=""></i> <T></T>avels </h4>
                        </div>
                        <!-- View Options -->
                        <div class="view-options">

                            <a href="archive-list.html" class="active"><i class="fa fa-list-ul" aria-hidden="true"></i></a>
                        </div>
                    </div>
<?php

                include 'config.php';
                $share   = "SELECT * FROM `share` ";
                $share1   = mysqli_query($LINK,$share);
                while ($shared = mysqli_fetch_array($share1)) {
                     $id_shared = $shared[2];
                }
                $quary   = "SELECT * FROM `place` WHERE place_id = $id_shared";
                $place   = mysqli_query($LINK,$quary);
                while ($fet = mysqli_fetch_array($place)) {

echo "<!-- Single Post Area -->
                    <div class='single-post-area style-2'>
                    
                        <div class='row align-items-center'>
                            <div class='col-12 col-md-6'>
                                <!-- Post Thumbnail -->
                                <div class='post-thumbnail'>
                                <a href='trips.php?id= $fet[0]' >
                                    <img src='img/$fet[4]' alt=''>

                                    <!-- Video Duration -->
                                    <span class='video-duration'>05.03</span>
                                </div>
                            </div>
                            <div class='col-12 col-md-6'>
                                <!-- Post Content -->
                                <div class='post-content mt-0'>
                                    <a href='#' class='post-cata cata-sm cata-success'>$fet[6]</a>
                                    <a href='single-post.html' class='post-title mb-2'>$fet[8]</a>
                                    <div class='post-meta d-flex align-items-center mb-2'>
                                        <a href='#' class='post-author'>By velvet</a>
                                        <i class='fa fa-circle' aria-hidden='true'></i>
                                        <a href='#' class='post-date'>$fet[11]</a>
                                    </div>
                                    <p class='mb-2'>$fet[5]</p>
                                    
                                </div>
                            </div>
                        </div></a>";
                }

            ?>

                </div>

                </div>

                <div class="col-12 col-md-6 col-lg-4">
                    <div class="sidebar-area">

                        <!-- ***** Single Widget ***** -->
                        <div class="single-widget followers-widget mb-50">
                            <a href="#" class="facebook"><i class="fa fa-facebook" aria-hidden="true"></i><span class="counter">198</span><span>Fan</span></a>
                            <a href="#" class="twitter"><i class="fa fa-twitter" aria-hidden="true"></i><span class="counter">220</span><span>Followers</span></a>
                            <a href="#" class="google"><i class="fa fa-google" aria-hidden="true"></i><span class="counter">140</span><span>Subscribe</span></a>
                        </div>

                        <!-- ***** Single Widget ***** -->

                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ##### Archive List Posts Area End ##### -->


    <!-- ##### Footer Area End ##### -->


</body>

</html>