<?php


session_start();


?>

<!doctype html>
<html class="no-js" lang="">
    
<!-- Mirrored from www.radiustheme.com/demo/html/academics/academics/news1.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 31 Jan 2017 17:53:20 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
<head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>EduFocus | Notes</title>
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

        <link rel="stylesheet" type="text/css" href="css/EduFocus.css">
        <!-- Modernizr Js -->
        <script src="js/modernizr-2.8.3.min.js"></script>

        <style> 


</style>
    
    <script type="text/javascript">
    function del()
    {
      return confirm("Are you sure you wanna delete this post?");
    }
    </script>

    </head>
    <body>
        <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->

        <!-- Add your site or application content here -->
        <div id="wrapper">
            <!-- Header Area Start Here -->
            <?php
               
                    include'./header1.php';
                    
               

            ?>
            <!-- Header Area End Here -->
            <!-- Inner Page Banner Area Start Here -->
            <div class="inner-page-banner-area" style="background-image: url('img/banner/5.jpg');">
                <div class="container">
                    <div class="pagination-area">
                        <h2>My Notes</h2>
                        <ul>
                            <li><a href="mainpage.php">Home</a> - </li>
                            <li>My Notes</li>
                        </ul>
                    </div>
                </div>  
            </div>  
            <!-- Inner Page Banner Area End Here -->
             <div class="courses-page-area2">
                <div class="container" id="inner-isotope">
                <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">

                  <?php

                        include 'mypost_innerheader.php';

                        
                    ?>

                    </div>
                    </div>
            <!-- News Page Area Start Here -->



            <div class="news-page-area">
                <div class="container">
                    <div class="row blog_margin"> 
                        <div class="col-lg-9 col-md-9 col-sm-8 col-xs-12">
                            <div class="row">
                           
                            <?php

                               
                             
                            
                                $u_email_id=$_SESSION["u_email_id"];
                                $obj1=new database();
                                $res1=$obj1->mynotes($u_email_id);
                                
                                 
                                while($row1=mysql_fetch_assoc($res1))
                                {
                                    $date=date("d-M");
                                    $year=date("Y");

                                    $notes=$row1["notes"];
                                    $type=$row1["type"];
                                    $notes_id=$row1["notes_id"];
                                           
                                            if($type=="pdf" || $type=="PDF")
                                            {
                                                 $notes_img='img/notes/1.png';
                                            }
                                            else if($type=="ppt" || $type=="PPT")
                                            {
                                                 $notes_img='img/notes/2.png';
                                            }
                                        if($type=="pdf" || $type=="ppt" || $type=="PDF" || $type=="PPT")
                                        {

                                         
                                         

                                      echo ' 
                                      <form method="post">
                                      <div class="col-lg-4 col-md-6 col-sm-6 col-xs-6">

                                            <div class="product-box1">
                                                <ul class="product-social">


                        
                                                    
                                                    <li><a href='.$notes.' name="check"><i class="fa fa-eye" aria-hidden="true"></i></a></li>
                                                </ul>
                                                <div class="product-img-holder">
                                                    <a href="#"><img class="img-responsive" src='.$notes_img.' alt="product"></a>
                                                </div>
                                                <div class="product-content-holder">
                                                    <h3><a href="#">'.$row1["notes_title"].'</a></h3>
                                                    
                                                </div>

                                            </div> 
                                            <a href="editnotes.php?notes_id='.$notes_id.'" class="default-big-btn notes_btn">Edit Notes</a> </br></br>  
                                            <a href="notesaction.php?notes_id='.$notes_id.'" class="default-big-btn notes_btn">Delete Notes</a> </br></br>                                          
                                        </div>';

                                        
     
     }
                            }
                                ?>
                                
                                                              
                            </div>
                        </div>

                        
                        
                          </div>
                          </div>
                          </div>
            </div>         
                    </div>
                </div>
          
            <!-- News Page Area End Here -->
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

<!-- Mirrored from www.radiustheme.com/demo/html/academics/academics/news1.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 31 Jan 2017 17:53:24 GMT -->
</html>