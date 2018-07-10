<?php


session_start();
$u_email_id=$_SESSION["u_email_id"];


?>

<!doctype html>
<html class="no-js" lang="">
    
<!-- Mirrored from www.radiustheme.com/demo/html/academics/academics/courses3.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 31 Jan 2017 17:52:59 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
<head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>Academics | Courses 3</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- Favicon -->
        <link rel="shortcut icon" type="image/x-icon" href="img/favicon.png">

        <!-- Normalize CSS --> 
        <link rel="stylesheet" href="css/normalize.css">

        <!-- Main CSS -->         
        <link rel="stylesheet" href="css/main.css">

        <!-- Bootstrap CSS --> 
        <link rel="stylesheet" href="css/bootstrap.min.css">

        <!-- Animate CSS --> 
        <link rel="stylesheet" href="css/animate.min.css">

        <!-- Font-awesome CSS-->
        <link rel="stylesheet" href="css/font-awesome.min.css">
        
        <!-- Owl Caousel CSS -->
        <link rel="stylesheet" href="vendor/OwlCarousel/owl.carousel.min.css">
        <link rel="stylesheet" href="vendor/OwlCarousel/owl.theme.default.min.css">
        
        <!-- Main Menu CSS -->      
        <link rel="stylesheet" href="css/meanmenu.min.css">

        <!-- nivo slider CSS -->
        <link rel="stylesheet" href="vendor/slider/css/nivo-slider.css" type="text/css" />
        <link rel="stylesheet" href="vendor/slider/css/preview.css" type="text/css" media="screen" />

        <!-- Datetime Picker Style CSS -->
        <link rel="stylesheet" href="css/jquery.datetimepicker.css">

        <!-- Magic popup CSS -->
        <link rel="stylesheet" href="css/magnific-popup.css">

        <!-- Switch Style CSS -->
        <link rel="stylesheet" href="css/hover-min.css">

        <!-- Custom CSS -->
        <link rel="stylesheet" href="style.css">

        <!-- Modernizr Js -->
        <script src="js/modernizr-2.8.3.min.js"></script>

    </head>
    <body>
        <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->

        <!-- Add your site or application content here -->
        <div id="wrapper">
            <!-- Header Area Start Here -->
              <?php
                 if($_SESSION["u_email_id"]=='')
                {
                    include'./header.php';
                }
                else
                {
                    include'./header1.php';   
                }
            ?>
            <!-- Header Area End Here -->
            <!-- Inner Page Banner Area Start Here -->
            <div class="inner-page-banner-area" style="background-image: url('img/banner/5.jpg');">
                <div class="container">
                    <div class="pagination-area">
                        <h2>Subjects</h2>
                        <ul>
                            <li><a href="index4.php">Home</a> -</li>
                            <li>Courses</li>
                        </ul>
                    </div>
                </div>  
            </div> 
            <!-- Inner Page Banner Area End Here -->
            <!-- Courses Page 2 Area Start Here -->  
            <div class="courses-page-area2">
                <div class="container" id="inner-isotope">
                <?php
                  $sub_id=$_REQUEST["sub_id"];
                  echo ' <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class=" isotop-btn"> 
                                
                                <a href="faq.php?sub_id='.$sub_id.'" class="current" data-filter="*">Questions</a>
                                <a href="blogs.php" data-filter=".cse">Blogs</a>
                                <a href="video.php" data-filter=".mathematics">Videos</a>
                                <a href="notes.php" data-filter=".english">Notes</a>
                            </div>
                        </div>
                    </div>';
                ?>
                    
                </div>
            </div>
            <!-- Courses Page 2 Area End Here -->
            
            <!-- Footer Area Start Here -->
              <?php
                include './footer.php';
            ?>

                       <!-- Footer Area End Here -->
        </div>
        <!-- Preloader Start Here -->
        <div id="preloader"></div>
        <!-- Preloader End Here -->
        <!-- jquery-->  
        <script src="js/jquery-2.2.4.min.js" type="text/javascript"></script>

        <!-- Plugins js -->
        <script src="js/plugins.js" type="text/javascript"></script>
        
        <!-- Bootstrap js -->
        <script src="js/bootstrap.min.js" type="text/javascript"></script>

        <!-- WOW JS -->     
        <script src="js/wow.min.js"></script>

        <!-- Nivo slider js -->     
        <script src="vendor/slider/js/jquery.nivo.slider.js" type="text/javascript"></script>
        <script src="vendor/slider/home.js" type="text/javascript"></script>

        <!-- Owl Cauosel JS -->
        <script src="vendor/OwlCarousel/owl.carousel.min.js" type="text/javascript"></script>
        
        <!-- Meanmenu Js -->
        <script src="js/jquery.meanmenu.min.js" type="text/javascript"></script>

        <!-- Srollup js -->
        <script src="js/jquery.scrollUp.min.js" type="text/javascript"></script>

         <!-- jquery.counterup js -->
        <script src="js/jquery.counterup.min.js"></script>
        <script src="js/waypoints.min.js"></script>

        <!-- Countdown js -->
        <script src="js/jquery.countdown.min.js" type="text/javascript"></script>

        <!-- Isotope js -->
        <script src="js/isotope.pkgd.min.js" type="text/javascript"></script>

        <!-- Magic Popup js -->
        <script src="js/jquery.magnific-popup.min.js" type="text/javascript"></script>
        
        <!-- Custom Js -->
        <script src="js/main.js" type="text/javascript"></script>

    </body>

<!-- Mirrored from www.radiustheme.com/demo/html/academics/academics/courses3.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 31 Jan 2017 17:52:59 GMT -->
</html>