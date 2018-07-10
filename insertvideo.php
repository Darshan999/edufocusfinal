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
        <title>EduFocus | Add-Video</title>
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
                        <h2>Add Video</h2>
                        <ul>
                            <li><a href="index4.php">Home</a> - </li>
                            <li>Add Video</li>
                        </ul>
                    </div>
                </div>  
            </div>  
            <?php

            if(isset($_POST["videopost"]))
            {


                if(!empty($_SESSION["u_email_id"]))
                {
                     $fk_sub_id=$_REQUEST["sub_id"];
                    $notes_title=$_POST["videotitle"];
                    $notes=$_POST["video"];
                    $notes=explode('=', $notes);
                    $notes=$notes['1'];
                    $type="video";

                   
                            
                   $notes_img=$notes;
                      $flag="inactive";
                    
                  // $fk_u_email_id="dd@gmail.com";

                        //include 'database.php';
                       $obj1=new database();
                    $res1=$obj1->grpmember($u_email_id,$fk_sub_id);
                    $cnt1=mysql_num_rows($res1);
                       
                    if($cnt1==1)
                     {
                     //include 'database.php';
                $res=new database();
                $cnt=$res->insertvideo($notes_title,$notes_img,$notes,$type,$flag,$u_email_id,$fk_sub_id);

                header('location:video.php?sub_id='.$fk_sub_id.'');


                    }
                    else
                    {
                        echo "<script type='text/javascript'>alert('Plz Join Group');</script>";
                     }


                   
                 

               


                }
                else
                 {
                // echo "<script type='text/javascript'>alert('Plz Login');</script>";

                echo "<script type='text/javascript'>alert('Plz Join Group');</script>";
                  }

              }
          
            ?>

            <div class="faq-page-area" style="margin-top: 40px;">
                <div class="container">
                    <div class="row panel-group blog_margin" id="faq-accordian">
                        
                     <div class="col-lg-9 col-md-9 col-sm-8 col-xs-12 ">
                  <form action=""  enctype="multipart/form-data" method="post">
                                         
                      
                           <div class="leave-comments">
                                        <h3 class="sidebar-title">Add Video</h3>
                                        <div class="row">
                                            <div class="contact-form"> 
                                                <form>
                                                    <fieldset>
                                                        <div class="col-sm-12">
                                                            <div class="form-group">
                                                                <input type="text" name="videotitle" placeholder="Video Title" class="form-control" required="">
                                                                <div class="help-block with-errors"></div>
                                                            </div>
                                                        </div>

                                                         <div class="col-sm-12">
                                                            <div class="form-group">
                                                                <input type="text" name="video" placeholder="Enter YouTube Video Path" class="form-control" required="">
                                                                <div class="help-block with-errors"></div>
                                                            </div>
                                                        </div>
         
                                                      <!--  <div class="col-sm-12">
                                                            <div class="form-group ">
                                                                <input type="file" name="photo"  class="form-control ">
                                                                <div class="help-block with-errors"></div>
                                                            </div>
                                                        </div>-->
                                                       
                                                        <div class="col-sm-12">
                                                            <div class="form-group margin-bottom-none">
                                                                <button type="submit" name="videopost" class="view-all-accent-btn">Post Video</button>
                                                            </div>
                                                        </div>
                                                    </fieldset>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                    </form>
            </div>

                        <?php
                            echo '<div class="col-lg-3 col-md-3 col-sm-4 col-xs-12 col-md-pull-0">   
                                     <div class="sidebar">';
                            include 'sidebar.php';
                        ?>                           
               
                 </div>
            </div>
            </div>
            </div>
            </div>
            
           
                       
                    
            <!-- Faq Page Area End Here -->
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

         <!--editor -->
        <script type="text/javascript" src="ckeditor/ckeditor.js"></script>


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

<!-- Mirrored from www.radiustheme.com/demo/html/academics/academics/faq.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 31 Jan 2017 17:52:56 GMT -->
</html>
