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
        <title>EduFocus | Blogs</title>
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
                        <h2>My Videos</h2>
                        <ul>
                            <li><a href="mainpage.php">Home</a> - </li>
                            <li>My Videos</li>
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
                                $res1=$obj1->myvideos($u_email_id);
                                
                                 
                                while($row1=mysql_fetch_assoc($res1))

                        {

                        $notes_id=$row1["notes_id"];
                        $notes=$row1["notes"];
                        $type=$row1["type"];

                       // $url = escapeshellcmd($notes);
                       // $down=exec("youtube-dl $url -O /tmp/video.flv");

                        if($type=="video")
                        {
                          $imagelink='https://img.youtube.com/vi/'.$row1["notes_img"].'/hqdefault.jpg';
                            $videolink='https://www.youtube.com/watch?v='.$row1["notes"].'';
                           // $download='https://ssyoutube.com/watch?v='.$row["notes"].'';

                    echo '</br>';
                     echo '
                        
                            <h2 class="title-default-left">'.$row1["notes_title"].'</h2>
                            <div class="video-area2 " style="background-image: url('.$imagelink.'); background-color: lightslategray;height: 375px;">
                                <div class="video-content">
                                    <a class="play-btn popup-youtube" href="'.$videolink.'"><i class="fa fa-play" aria-hidden="true"></i></a>


                                </div> 
                                
                            </div>
                            </br>
                                     <a href="editvideo.php?notes_id='.$notes_id.'" class="default-big-btn">Edit</a> 
                                            <a href="videoaction.php?notes_id='.$notes_id.'" class="default-big-btn">Delete</a> 
                                            </br>
                                            </br>
                                            </br>
                             
                         ';

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