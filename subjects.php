<?php


session_start();



?>

<!doctype html>
<html class="no-js" lang="">
    
<!-- Mirrored from www.radiustheme.com/demo/html/academics/academics/lecturers2.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 31 Jan 2017 17:52:22 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
<head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>EduFocus | Subjects</title>
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
                        <h2>Our Subjects</h2>
                        <ul>
                            <li><a href="index4.php">Home</a> -</li>
                            <li>Subjects</li>
                        </ul>
                    </div>
                </div>  
            </div> 
             
            <!-- Inner Page Banner Area End Here -->
            <!-- Lecturers Page 2 Area Start Here -->  
            <div class="lecturers-page2-area">
                <div class="container" id="inner-isotope">
                   
                    
                                    <?php


                                        $course_id=$_REQUEST["course_id"];
                                        $_SESSION["course_id"]=$course_id;
                                        $obj=new database();
                                        $res=$obj->subjectdisplay($course_id);
                                        echo $row['sub_name'];

                                        while($row=mysql_fetch_assoc($res))
                                        {

                                            $sub_photo=$row["sub_photo"];
                                            $sub_name=$row["sub_name"];
                                            echo '

                           <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 diploma cse">
                           <div class="single-item">
                                <div class="lecturers-item-wrapper">
                               

                                                <a href="#"><img class="img-responsive sub_img"  src="'.$sub_photo.'" ></a>
                                    <div class="lecturers-content-wrapper">
                                       
                                    
                                        <ul class="lecturers-social join_btn">
                                            <a href="blogs.php?sub_id='.$row["sub_id"].'" class="ghost-btn">Go For Visit</a>
                                        </ul>   

                                    </div>
                                      </div>
                                                                    
                            </div>
                        </div> 
                                            ';
                                        }
                                    ?>
                                    <!--<a href="#"><img class="img-responsive" src="img/team/14.jpg" alt="team"></a>
                                    <div class="lecturers-content-wrapper">
                                        <h3><a href="#">Rosy Janner</a></h3>
                                        <span>Senior Finance Lecturer</span>
                                        <p>Eimply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industummy text.</p>
                                        <ul class="lecturers-social">
                                            <a href="courses3.html" class="ghost-btn">Join Now</a>
                                        </ul>                    
                                    </div>-->           
                           
                        <!--
                        <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 cse english">
                           <div class="single-item">
                                <div class="lecturers-item-wrapper">
                                    <a href="#"><img class="img-responsive" src="img/team/15.jpg" alt="team"></a>
                                    <div class="lecturers-content-wrapper">
                                        <h3><a href="#">Tom Steven</a></h3>
                                        <span>Senior Finance Lecturer</span>
                                        <p>Eimply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industummy text.</p>
                                        <ul class="lecturers-social">
                                             <a href="#" class="ghost-btn">Join Now</a>
                                        </ul>                    
                                    </div>
                                </div>                            
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 diploma english">
                           <div class="single-item">
                                <div class="lecturers-item-wrapper">
                                    <a href="#"><img class="img-responsive" src="img/team/16.jpg" alt="team"></a>
                                    <div class="lecturers-content-wrapper">
                                        <h3><a href="#">Luice Nishaa</a></h3>
                                        <span>Senior Finance Lecturer</span>
                                        <p>Eimply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industummy text.</p>
                                        <ul class="lecturers-social">
                                             <a href="#" class="ghost-btn">Join Now</a>
                                        </ul>                    
                                    </div>
                                </div>                            
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 cse medical">
                           <div class="single-item">
                                <div class="lecturers-item-wrapper">
                                    <a href="#"><img class="img-responsive" src="img/team/17.jpg" alt="team"></a>
                                    <div class="lecturers-content-wrapper">
                                        <h3><a href="#">Mike Hussy</a></h3>
                                        <span>Senior Finance Lecturer</span>
                                        <p>Eimply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industummy text.</p>
                                        <ul class="lecturers-social">
                                            <li><a href="#"><i class="fa fa-envelope-o" aria-hidden="true"></i></a></li>
                                            <li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                                            <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                                            <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                                        </ul>                    
                                    </div>
                                </div>                            
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 diploma english">
                           <div class="single-item">
                                <div class="lecturers-item-wrapper">
                                    <a href="#"><img class="img-responsive" src="img/team/18.jpg" alt="team"></a>
                                    <div class="lecturers-content-wrapper">
                                        <h3><a href="#">Daziy Millar</a></h3>
                                        <span>Senior Finance Lecturer</span>
                                        <p>Eimply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industummy text.</p>
                                        <ul class="lecturers-social">
                                            <li><a href="#"><i class="fa fa-envelope-o" aria-hidden="true"></i></a></li>
                                            <li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                                            <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                                            <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                                        </ul>                    
                                    </div>
                                </div>                            
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 cse english medical">
                           <div class="single-item">
                                <div class="lecturers-item-wrapper">
                                    <a href="#"><img class="img-responsive" src="img/team/19.jpg" alt="team"></a>
                                    <div class="lecturers-content-wrapper">
                                        <h3><a href="#">David Lipu</a></h3>
                                        <span>Senior Finance Lecturer</span>
                                        <p>Eimply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industummy text.</p>
                                        <ul class="lecturers-social">
                                            <li><a href="#"><i class="fa fa-envelope-o" aria-hidden="true"></i></a></li>
                                            <li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                                            <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                                            <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                                        </ul>                    
                                    </div>
                                </div>                            
                            </div>
                        </div> -->                   
                  
                </div>
            </div>
            <!-- Lecturers Page 2 Area End Here -->
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

<!-- Mirrored from www.radiustheme.com/demo/html/academics/academics/lecturers2.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 31 Jan 2017 17:52:26 GMT -->
</html>
