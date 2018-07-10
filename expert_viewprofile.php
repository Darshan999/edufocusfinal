<?php

    session_start();
?>

<!doctype html>
<html class="no-js" lang="">
    
<!-- Mirrored from www.radiustheme.com/demo/html/academics/academics/single-lecturers.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 31 Jan 2017 17:52:26 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
<head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>EduFocus | Expert Profile</title>
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

        <!-- Select2 CSS -->
        <link rel="stylesheet" href="css/select2.min.css">

        <!-- Magic popup CSS -->
        <link rel="stylesheet" href="css/magnific-popup.css">

        <!-- Switch Style CSS -->
        <link rel="stylesheet" href="css/hover-min.css">

        <!-- Nouislider Style CSS -->
        <link rel="stylesheet" href="vendor/noUiSlider/nouislider.min.css">

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
                        <h2>Expert Profile</h2>
                        <ul>
                            <li><a href="#">Home</a> -</li>
                            <li>Details</li>
                        </ul>
                    </div>
                </div>  
            </div> 
            <!-- Inner Page Banner Area End Here -->
            <!-- Courses Page 3 Area Start Here -->
            <?php
                 $obj=new database();
                 $res=$obj->peruserdisplay($u_email_id);
                    while($row=mysql_fetch_assoc($res))
                    {
                        $u_name=$row["u_name"];
                        $u_mobile_no=$row["u_mobile_no"];
                        $u_desc=$row["u_desc"];
                        $u_qualification=$row["u_qualification"];
                        //$u_gender=$row["u_gender"];
                        $u_photo=$row["u_photo"];
                    }
            ?>
            <div class="lecturers-page-area">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                            <div class="lecturers-contact-info">
                                <img src="<?php echo $u_photo;?>" class="expertviewprofile img-responsive" alt="team">
                                <h2><?php echo $u_name;?></h2>
                                <h3><?php echo $u_qualification;?></h3>
                                <ul class="lecturers-social2">
                                    <li><a href="#"><i class="fa fa-envelope-o" aria-hidden="true"></i></a></li>
                                    <li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                                    <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                                    <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                                </ul>
                                <ul class="lecturers-contact">
                                    <li><i class="fa fa-phone" aria-hidden="true"></i><?php echo $u_mobile_no;?></li>
                                    <li><i class="fa fa-envelope-o" aria-hidden="true"></i><?php echo $u_email_id;?></li>
                                </ul>
                            </div>  
                        </div>  
                        <div class="col-lg-8 col-md-8 col-sm-6 col-xs-12">
                            <h3 class="title-default-left title-bar-big-left-close">About Me</h3>
                            <p><?php echo $u_desc;?></p>
                            <h3 class="title-default-left title-bar-big-left-close">Qualifications</h3>
                            <ul class="course-feature2">
                                <li><?php echo $u_qualification;?></li>
                            </ul>
                            <div class="leave-comments">
                                <h3 class="title-default-left title-bar-big-left-close">Contact With Me</h3>
                                <div class="row">
                                    <div class="contact-form"> 
                                        <form>
                                            <fieldset>
                                                <div class="col-sm-6">
                                                    <div class="form-group">
                                                        <input type="text" placeholder="Name" class="form-control">
                                                        <div class="help-block with-errors"></div>
                                                    </div>
                                                </div>
                                                <div class="col-sm-6">
                                                    <div class="form-group">
                                                        <input type="email" placeholder="Email" class="form-control">
                                                        <div class="help-block with-errors"></div>
                                                    </div>
                                                </div>
                                                <div class="col-sm-12">
                                                    <div class="form-group">
                                                        <textarea placeholder="Comment" class="textarea form-control" id="form-message" rows="8" cols="20"></textarea>
                                                        <div class="help-block with-errors"></div>
                                                    </div>
                                                </div>
                                                <div class="col-sm-12">
                                                    <div class="form-group margin-bottom-none">
                                                        <button type="submit" class="view-all-accent-btn">Post Comment</button>
                                                    </div>
                                                </div>
                                            </fieldset>
                                        </form>
                                    </div>
                                </div>
                            </div>                               
                        
                        </div>               
                    </div>
                </div>
            </div>
            <!-- Courses Page 3 Area End Here -->
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

        <!-- Select2 Js -->
        <script src="js/select2.min.js" type="text/javascript"></script>

        <!-- Nouislider Js -->
        <script src="vendor/noUiSlider/nouislider.min.js" type="text/javascript"></script>

        <!-- Validator js -->
        <script src="js/validator.min.js" type="text/javascript"></script>

        <!-- Magic Popup js -->
        <script src="js/jquery.magnific-popup.min.js" type="text/javascript"></script>
        
        <!-- Custom Js -->
        <script src="js/main.js" type="text/javascript"></script>

    </body>

<!-- Mirrored from www.radiustheme.com/demo/html/academics/academics/single-lecturers.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 31 Jan 2017 17:52:29 GMT -->
</html>
