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
        <title>EduFocus | Company Profile</title>
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
        <style type="text/css">
            .referencebtn
            {
                width: 150px !important;
float: right !important;
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
                  // $u_email_id=$_SESSION["u_email_id"];
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
                        <h2>Company Profile</h2>
                        <ul>
                            <li><a href="#">Home</a> -</li>
                            <li>Details</li>
                        </ul>
                    </div>
                </div>  
            </div> 
            <!-- Inner Page Banner Area End Here -->
            <!-- Courses Page 3 Area Start Here -->
           

            <div class="brand-area">
                <div class="container">    
                    <div class="rc-carousel"
                        data-loop="true"
                        data-items="4"
                        data-margin="30"
                        data-autoplay="true"
                        data-autoplay-timeout="1000"
                        data-smart-speed="1000"
                        data-dots="false"
                        data-nav="false"
                        data-nav-speed="false"
                        data-r-x-small="2"
                        data-r-x-small-nav="false"
                        data-r-x-small-dots="false"
                        data-r-x-medium="3"
                        data-r-x-medium-nav="false"
                        data-r-x-medium-dots="false"
                        data-r-small="4"
                        data-r-small-nav="false"
                        data-r-small-dots="false"
                        data-r-medium="4"
                        data-r-medium-nav="false"
                        data-r-medium-dots="false"
                        data-r-large="4"
                        data-r-large-nav="false"
                        data-r-large-dots="false"> 

                        <?php 

                          $obj=new database();
                         $res=$obj->companydisplay();
                         while($row=mysql_fetch_assoc($res))
                         {

                            $company_id=$row["company_id"];
                        echo '
                        <div class="brand-area-box">

             <a href="'.$row["company_web_name"].'"><img src="'.$row["company_logo"].'" class="company_img_slidebar" alt="brand"></a>

                        </div> '; 

                         }

                        ?>                      
                    </div> 
                </div>  
            </div> 

             
             <div class="courses-page-area2">
                <div class="container" id="inner-isotope">
                    <div class="row">

                        
                        <div class="form-group">

                                                    

                                                     <a href="insertcompany.php" name="insblog" class="sidebar-search-btn-full disabled default-big-btn referencebtn" >Give Reference</a>

                        </div>
                                                 

                        
                    </div>

             <?php

                       
                                // $obj=new database();
                                 $res=$obj->companyuserdisplay();
                                
                         echo   '<div class="course-details-comments"> ';
                        while($row=mysql_fetch_assoc($res))
                        {

                             $u_photo=$row["u_photo"]; 
                                    $company_title=$row["company_title"];
                                    $company_name=$row["company_name"];

                               echo '
                               <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                               <div class="media">
                                            <a href="#" class="pull-left">
                                                <img alt="Comments" src="'.$u_photo.'" style=" height: 64px; width: 67px;" class="media-object">
                                            </a>
                                            <div class="media-body">
                                                <h3><a href="company_details.php?company_id='.$row["company_id"].'">'.$company_name.'</a></h3>
                                                
                                                <p>'.$company_title.'</p>
                                            </div>
                                        </div>
                                        </div>';
                        }

                       
                                        
                                       
                                   echo '</div>';
                     ?>

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
