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
                        <h2>Blogs</h2>
                        <ul>
                            <li><a href="index4.php">Home</a> - </li>
                            <li>Blogs</li>
                        </ul>
                    </div>
                </div>  
            </div>  
               <div class="service2-area"> 
                <div class="search-area">
                    <div class="container">
                         <div class="row search-inner searchbar_color">
                             <div class="col-lg-2 col-md-3 col-sm-3 col-xs-12">
                                <div class="search-title">
                                    <span><i class="fa fa-search" aria-hidden="true"></i> Search Blog</span>
                                </div>
                            </div>
                            <div class="col-lg-8 col-md-6 col-sm-6 col-xs-12">
                                <div class="search-input">
                                    <form>
                                        <input type="text" class="search-form" placeholder="Blogs Keywords . . ." required="">  
                                    </form>
                                </div>
                            </div>
                            <div class="col-lg-2 col-md-3 col-sm-3 col-xs-12">
                                <div class="search-submit">
                                    <a href="#" class="join-now-btn" >Search</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                </div>
            <!-- Inner Page Banner Area End Here -->
             <div class="courses-page-area2 search_margin">
                <div class="container" id="inner-isotope">
                <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">

                  <?php

                        include 'innerheader.php';

                        
                    ?>

                    </div>
                    </div>
            <!-- News Page Area Start Here -->
            <div class="news-page-area">
                <div class="container">
                    <div class="row blog_margin"> 
                        <div class="col-lg-9 col-md-9 col-sm-8 col-xs-12" >
                            <div class="row">
                            <?php

                               
                                $sub_id=$_REQUEST["sub_id"];
                                $_SESSION["sub_id"]=$sub_id;
                            
                                $cnt=0;
                                $i=0;
                             $obj=new database();
                                $res=$obj->bloguserjoin($sub_id);
                                
                                $date=date("d-M");
                                $year=date("Y");

                                while($row=mysql_fetch_assoc($res))
                                {
                                    $blog_id=$row["blog_id"];
                                $sortcontent=substr($row["blog_desc"],0,300)." ...";
                                echo '
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" >
                                    <div class="news-box">
                                        <div class="news-img-holder">
                                            <img src="'.$row["blog_photo"].'" class="img-responsive blog_img" alt="research" >
                                            <ul class="news-date1">
                                                <li>
                                                    '.$date.'
                                                </li>
                                                <li>
                                                    '.$year.'
                                                </li>
                                            </ul>
                                        </div>
                                        <h2 class="title-default-left-bold"><a href="#">'.$row["blog_title"].'</a></h2>
                                        <ul class="title-bar-high news-comments">
                                            <li><a href="#"><i class="fa fa-user" aria-hidden="true"></i><span>By</span> '.$row["u_name"].'</a></li>
                                            <li><a href="#"><i class="fa fa-comments-o" aria-hidden="true"></i><span>(03)</span> Comments</a></li>
                                        </ul>
                                        <p>'.$sortcontent.'</p>
                                        <a href="blogs_details.php?blog_id='.$blog_id.'" class="default-big-btn">Read MOre</a>
                                    </div>
                                </div>';
                            }
                                ?>
                                <form method="post" id="pagination-form">
                                
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                    <ul class="pagination-center">
                                        <li class="active"><a href="#" class="page">1</a></li>
                                        <li><a href="#" class="page">2</a></li>
                                        <li><a href="#" class="page">3</a></li>
                                        <li><a href="#" class="page">4</a></li>
                                    </ul>
                                </div>     
                                </form>                           
                            </div>
                        </div>

                        <?php

                             echo '
                                
                   
                  <div class="col-lg-3 col-md-3 col-sm-4 col-xs-12 col-md-pull-0">   
                <div class="sidebar">
                                <div class="sidebar-box">
                                    
                                        
                                        <div class="sidebar-find-course">
                                            <form id="checkout-form">
                                                
                                                <div class="form-group">

                                                    

                                                     <a href="insertblog.php?sub_id='.$sub_id.'" name="insblog" class="sidebar-search-btn-full disabled default-big-btn">Insert Blog</a>

                                                </div>
                                                 
                                               
                                                
                                            </form>
                                        </div>
                                    
                                </div>';
                       

                        ?>
                           <?php

                 include 'sidebar.php';

                 echo '<div class="sidebar-box">
                                    <div class="sidebar-box-inner">
                                        <h3 class="sidebar-title">Latest Blogs</h3>
                                        <div class="sidebar-latest-research-area">';
        

                     $obj2=new database();
                     $res2=$obj2->latestblog($sub_id);
                     while($row2=mysql_fetch_assoc($res2))

                     {
                        $blog_id=$row2["blog_id"];
                        $blog_photo=$row2["blog_photo"];
                echo '
                                                    <ul>
                                                <li>
                                                    <div class="latest-research-img">
                                                        <a href="#"><img src="'.$blog_photo.'" class="img-responsive" alt="skilled"></a>
                                                    </div>
                                                    <div class="latest-research-content">
                                                        <h4>'.$row2["blog_date"].'</h4>
                                                        <a href="blogs_details.php?blog_id='.$blog_id.'"> <p>'.$row2["blog_title"].'</p></a>
                                                    </div>
                                                </li></br>
                                                
                                            </ul>
                                       ';
                      } 

               
                         echo ' </div>
                                    </div>
                                </div>';         
                    ?>
            </div>         
                    </div>
                </div>
            </div>
            
            </div>
            </div> 

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
