<!doctype html>
<html class="no-js" lang="">
    
<!-- Mirrored from www.radiustheme.com/demo/html/academics/academics/contact2.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 31 Jan 2017 17:53:34 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
<head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>EduFocus | Contact Us</title>
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

        <style type="text/css">
            .peoplesay
{
    height: 112px;
width: 112px;
}

        </style>

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
                        <h2>Contact Us</h2>
                        <ul>
                            <li><a href="#">Home</a> -</li>
                            <li>Contact Us</li>
                        </ul>
                    </div>
                </div>  
            </div> 
            <!-- Inner Page Banner Area End Here -->
            <!-- Contact Us Page 2 Area Start Here -->
            <div class="contact-us-page2-area">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                            <h2 class="title-default-left title-bar-high">Information</h2>
                            <div class="contact-us-info2">   
                                <ul>
                                    <li><i class="fa fa-globe" aria-hidden="true"></i>http://www.brainoorja.com</li>
                                    <li><i class="fa fa-map-marker" aria-hidden="true"></i>India Office:
                                    1202,Matrix,b/s, Divyabhaskar Press,
                                    S.G Road,
                                    Ahmedabad-380051.
                                    India.
                                    </li>
                                    <li><i class="fa fa-phone" aria-hidden="true"></i>+919898087548
                                    </li>
                                    <li><i class="fa fa-envelope-o" aria-hidden="true"></i>info@brainoorja.com
                                    </li>
                                </ul>
                            </div>  
                        </div>  
                        <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
                            <div class="row">
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                    <h2 class="title-default-left title-bar-high">Contact With Us</h2>    
                                </div>  
                            </div>  
                            <div class="row">
                                <div class="contact-form2"> 
                                    <form id="contact-form">
                                        <fieldset>
                                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                                <div class="form-group">
                                                    <input type="text" placeholder="Name*" class="form-control" name="name" id="form-name" data-error="Name field is required" required>
                                                    <div class="help-block with-errors"></div>
                                                </div>
                                            </div>
                                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                                <div class="form-group">
                                                    <input type="email" placeholder="Email*" class="form-control" name="email" id="form-email" data-error="Email field is required" required>
                                                    <div class="help-block with-errors"></div>
                                                </div>
                                            </div>
                                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                <div class="form-group">
                                                     <textarea placeholder="Message*" class="textarea form-control" name="message" id="form-message" rows="8" cols="20" data-error="Message field is required" required></textarea>
                                                    <div class="help-block with-errors"></div>
                                                </div>
                                            </div>
                                            <div class="col-lg-4 col-md-4 col-sm-6 col-sm-12">
                                                <div class="form-group margin-bottom-none">
                                                    <button type="submit" class="default-big-btn">Send Message</button>
                                                </div>
                                            </div>
                                            <div class="col-lg-8 col-md-8 col-sm-6 col-sm-12">
                                                <div class='form-response'></div>
                                            </div>
                                        </fieldset>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="students-say-area">
                <h2 class="title-default-center">Team Members</h2> 
                <div class="container">    
                <div class="rc-carousel"
                        data-loop="true"
                        data-items="2"
                        data-margin="30"
                        data-autoplay="true"
                        data-autoplay-timeout="10000"
                        data-smart-speed="2000"
                        data-dots="true"
                        data-nav="false"
                        data-nav-speed="false"
                        data-r-x-small="1"
                        data-r-x-small-nav="false"
                        data-r-x-small-dots="true"
                        data-r-x-medium="2"
                        data-r-x-medium-nav="false"
                        data-r-x-medium-dots="true"
                        data-r-small="2"
                        data-r-small-nav="false"
                        data-r-small-dots="true"
                        data-r-medium="2"
                        data-r-medium-nav="false"
                        data-r-medium-dots="true"
                        data-r-large="2"
                        data-r-large-nav="false"
                        data-r-large-dots="true"> 
                    
            
                <div class="single-item">
                            <div class="single-item-wrapper">
                                <div class="profile-img-wrapper">
                                    <a href="#" class="profile-img"><img class="profile-img-responsive img-circle peoplesay" src="img/user/IMG_20160604_200408.jpg" alt="Testimonial"></a>
                                </div>
                                <div class="tlp-tm-content-wrapper">
                                    <h3 class="item-title"><a href="#">Darshan Dhandhukiya</a></h3>
                                    <span class="item-designation">Owner</span>
                                    <ul class="rating-wrapper">
                                    <li></li>
                                    </ul>
                                    <div class="item-content">Hello.. My name is Darshan Dhandhukiya. I am studying in the third year MSCIT at KS School Of Business Management, Gujarat University. I and my friend Rutul Thakkar have made this website for students for their daily usage. Thank You all of you who supported us.</div>
                                </div>                            
                            </div>                            
                        </div>
                        <div class="single-item">
                            <div class="single-item-wrapper">
                                <div class="profile-img-wrapper">
                                    <a href="#" class="profile-img"><img class="profile-img-responsive img-circle peoplesay" src="img/user/IMG-20160908-WA0005.jpg" alt="Testimonial"></a>
                                </div>
                                <div class="tlp-tm-content-wrapper">
                                    <h3 class="item-title"><a href="#">Rutul Thakkar</a></h3>
                                    <span class="item-designation">Owner</span>
                                    <ul class="rating-wrapper">
                                    <li></li>
                                    </ul>
                                    <div class="item-content">Hii.. I am Rutul Thakkar, doing my graduate studies in KS School Of Business Management, Gujarat University. I and my friend Darshan Dhandhukiya are trying to help the students for their daily uses and improve in their education by making this website. Thank you for supporting us..</div>
                                </div>                            
                            </div>                            
                        </div>
                        </div>
                        </div>
                        </div>

                        
            </div>
            <!-- Contact Us Page 2 Area End Here -->
            <!-- Footer Area Start Here -->
           <?php
            include 'footer.php';
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

        <!-- Google Map js -->
        <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBgREM8KO8hjfbOC0R_btBhQsEQsnpzFGQ"></script>

        <!-- Validator js -->
        <script src="js/validator.min.js" type="text/javascript"></script>

        <!-- Magic Popup js -->
        <script src="js/jquery.magnific-popup.min.js" type="text/javascript"></script>
        
        <!-- Custom Js -->
        <script src="js/main.js" type="text/javascript"></script>

    </body>

<!-- Mirrored from www.radiustheme.com/demo/html/academics/academics/contact2.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 31 Jan 2017 17:53:34 GMT -->
</html>
