<!doctype html>
<html class="no-js" lang="">
    
<!-- Mirrored from www.radiustheme.com/demo/html/academics/academics/about2.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 31 Jan 2017 17:52:16 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
<head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>EduFocus | About Us</title>
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
          if(!empty($_SESSION["u_email_id"]))
                {
                   $u_email_id=$_SESSION["u_email_id"];
                    include'./header1.php';
                    
                }
                else
                {
                     include'./header.php';   

                }

            ?>
            <!-- Header Area End Here -->
            <!-- Inner Page Banner Area Start Here -->
            <div class="inner-page-banner-area" style="background-image: url('img/banner/5.jpg');">
                <div class="container">
                    <div class="pagination-area">
                        <h2>About us</h2>
                        <ul>
                            <li><a href="#">Home</a> -</li>
                            <li>About</li>
                        </ul>
                    </div>
                </div>  
            </div> 
            <!-- Inner Page Banner Area End Here -->
            <!-- About Page 2 Area Start Here -->
            <div class="about-page2-area">
                <div class="container">
                    <div class="row about-page2-inner">
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            <h2 class="title-default-left">About Our Website</h2>
                            <p>This website is used mainly for students to maintain the detail on the basis of different subjects.They can join the respective group in particular subject. An expert can solve the query of the students. Students can ask their queries at any time. Students can upload ppt, pdf, videos, blogs and question-answer etc. , where admin can upload news and events too. Students will give the reference of the company to other students through the website so it would be helpful to the students for get the opportunity.Our website will provide a platform for the students who want to stay updated with the latest news and also stay updated with all the events going around their respective cities so they can easily participate or join the events.</p>
                            <ul>
                                <li>Solved All Queries of Students</li>
                                <li>Skilled Experts are Available</li>
                                <li>Upload/Download PPT, PDF, Blogs and Video</li>
                                <li>Ask Questions and Give Answers</li>
                                <li>Stay Updated With Latest News And Technology</li>
                                <li>Join the Events goin around their respective cities</li>
                                <li>Give the reference of the companies</li>
                            </ul>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">                            
                            <div class="video-area2 overlay-video bg-common-style video-margin-top" style="background-image: url('img/banner/6.jpg');">
                                <div class="video-content">
                                    <a class="play-btn popup-youtube" href="https://www.youtube.com/watch?v=Tjnq5StX68g"><i class="fa fa-play" aria-hidden="true"></i></a> 
                                </div> 
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- About Page 2 Area End Here -->
            <!-- Why Choose Area Start Here -->
            <div class="why-choose-area">                                
                <div class="container">
                    <h2 class="about-title">Why Choose Our Website?</h2>
                </div>
                <div class="container">
                     <div class="row">
                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                            <div class="service-box4">
                                <div class="service-box-icon">
                                    <a href="#"><i class="fa fa-user" aria-hidden="true"></i></a>
                                </div>                      
                                <h3><a href="#">Skilled Experts</a></h3>
                                <p>All the skilled experts are available for solve the any doubts or queries of the students that are arrived at anytime</p>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                            <div class="service-box4">
                                <div class="service-box-icon">
                                    <a href="#"><i class="fa fa-download" aria-hidden="true"></i></a>
                                </div>                      
                                <h3><a href="#">Upload/Download Materials</a></h3>
                                <p>Students can upload or download PPT, PDF, videos and blogs of the particular subject which they are joined.</p>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                            <div class="service-box4">
                                <div class="service-box-icon">
                                    <a href="#"><i class="fa fa-question" aria-hidden="true"></i></a>
                                </div>                      
                                <h3><a href="#">Ask Question & Give Answer</a></h3>
                                <p>Students can ask questions and also give the answer or solve their doubts by the experts or other students.</p>
                            </div>
                        </div>

                    </div>
                    <br/><br/>
                    <div class="row">
                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                            <div class="service-box4">
                                <div class="service-box-icon">
                                    <a href="#"><i class="fa fa-desktop" aria-hidden="true"></i></a>
                                </div>                      
                                <h3><a href="#">Latest News</a></h3>
                                <p>Our website will provide a platform for the students who want to stay updated with the latest news and newly arrived technology.</p>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                            <div class="service-box4">
                                <div class="service-box-icon">
                                    <a href="#"><i class="fa fa-calendar" aria-hidden="true"></i></a>
                                </div>                      
                                <h3><a href="#">Events</a></h3>
                                <p>Our website will provide a platform for the students who want to stay updated with all the events going around their respective cities so they can easily participate or join the events.</p>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                            <div class="service-box4">
                                <div class="service-box-icon">
                                    <a href="#"><i class="fa fa-users" aria-hidden="true"></i></a>
                                </div>                      
                                <h3><a href="#">Give referance of the company</a></h3>
                                <p>Students or experts will give the reference of the company to other students through the website so it would be helpful to the students for get the opportunity.</p>
                            </div>
                        </div>
                        
                    </div>
                </div>
            </div>
            <!-- Why Choose Area End Here -->
            <?php
                include 'footer.php';
            ?>
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

<!-- Mirrored from www.radiustheme.com/demo/html/academics/academics/about2.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 31 Jan 2017 17:52:17 GMT -->
</html>
