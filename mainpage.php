<?php
session_start();


?>

<!doctype html>
<html class="no-js" lang="">
    
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>Edufocus | Home </title>
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
            

.home_slider
{
    width: 1349px !important;
    visibility: hidden !important;
    height: 528px !important;
}

.latest_news_home
{
    height: 150px !important;
}
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
        <!-- Preloader Start Here -->
        <div id="preloader"></div>
        <!-- Preloader End Here -->
        <!-- Main Body Area Start Here -->
        <div id="wrapper">

        <?php
            include'./header1.php';
        ?>
            <!-- Header Area Start Here -->

            
            <!-- Header Area End Here -->
            <!-- Slider 1 Area Start Here -->               
            <div class="slider1-area overlay-default">
                <div class="bend niceties preview-1">
                    <div id="ensign-nivoslider-3" class="slides">   
                        <img src="img/background/campus.jpg" class="home_slider" alt="slider" title="#slider-direction-1"/>
                        <img src="img/background/library1.jpg" class="home_slider" alt="slider" title="#slider-direction-2"/>
                        <img src="img/background/books.jpg" class="home_slider" alt="slider" title="#slider-direction-3"/>
                    </div>
                    <div id="slider-direction-1" class="t-cn slider-direction">
                        <div class="slider-content s-tb slide-1">
                            <div class="title-container s-tb-c">
                                <h1 class="title1">Best Education For Students</h1>
                                <p>"Education is the most powerful weapon which you can use to change the world."
                                </p>
                                
                            </div>
                        </div>
                    </div>
                    <div id="slider-direction-2" class="t-cn slider-direction">
                        <div class="slider-content s-tb slide-2">
                             <div class="title-container s-tb-c">
                                <h1 class="title1">Best Education For Students</h1>
                                <p>"Education is the key to success in life, and teachers make a lasting impact in the lives of their students."</p>
                                
                            </div>
                        </div>
                    </div>
                    <div id="slider-direction-3" class="t-cn slider-direction">
                        <div class="slider-content s-tb slide-3">
                             <div class="title-container s-tb-c">
                                <h1 class="title1">Best Education For Students</h1>
                                <p>"The goal of education is not to increase the amount of knowledge but to create the possibilities for a child to invent and discover, </br>
                                to create men who are capable of doing new things." </p>
                               
                            </div>
                        </div>
                    </div>
                </div> 
            </div>
            <!-- Slider 1 Area End Here -->
            <!-- Courses 1 Area Start Here -->
            <div class="courses1-area">
                <div class="container">    
                    <h2 class="title-default-left">Featured Courses</h2> 
                </div>
                <div class="container">    
                    <div class="rc-carousel"
                        data-loop="true"
                        data-items="4"
                        data-margin="30"
                        data-autoplay="true"
                        data-autoplay-timeout="10000"
                        data-smart-speed="2000"
                        data-dots="false"
                        data-nav="true"
                        data-nav-speed="false"
                        data-r-x-small="1"
                        data-r-x-small-nav="true"
                        data-r-x-small-dots="false"
                        data-r-x-medium="2"
                        data-r-x-medium-nav="true"
                        data-r-x-medium-dots="false"
                        data-r-small="2"
                        data-r-small-nav="true"
                        data-r-small-dots="false"
                        data-r-medium="4"
                        data-r-medium-nav="true"
                        data-r-medium-dots="false"
                        data-r-large="4"
                        data-r-large-nav="true"
                        data-r-large-dots="false">  
                        
                            
                            <?php

                                 //require 'database.php';
                                 $obj=new database();
                                 $res=$obj->coursedisplay();
                                 while ($row=mysql_fetch_array($res,MYSQL_ASSOC)) 
                                {
                
                            echo '
                            <div class="courses-box1">
                                <div class="single-item-wrapper">
                                <div class="courses-img-wrapper hvr-bounce-to-bottom">
                                    <img class="img-responsive" src="'.$row["course_photo"].'" alt="courses" style="height: 200px;
width: 300px;">
                                    <a href=""><i class="fa fa-link" aria-hidden="true"></i></a>
                                </div>
                                <div class="courses-content-wrapper">
                                    <center><h3 class="item-title"><a href="subjects.php?course_id='.$row["course_id"].'">'.$row["course_name"].'</a></h3></center>
                                    
                                </div>
                                </div>
                                </div>'; 
                            }
                                ?>                           
                                                        
                        
                                             
                    </div> 
                </div>  
            </div>  
            <!-- Courses 1 Area End Here -->
            <!-- Lecturers Area Start Here -->
            <div class="lecturers-area distance_experthome ">
                <div class="container">    
                    <h2 class="title-default-left">Our Experts</h2> 
                </div>
                <div class="container">    
                    <div class="rc-carousel"
                        data-loop="true"
                        data-items="4"
                        data-margin="30"
                        data-autoplay="true"
                        data-autoplay-timeout="10000"
                        data-smart-speed="2000"
                        data-dots="false"
                        data-nav="true"
                        data-nav-speed="false"
                        data-r-x-small="1"
                        data-r-x-small-nav="true"
                        data-r-x-small-dots="false"
                        data-r-x-medium="2"
                        data-r-x-medium-nav="true"
                        data-r-x-medium-dots="false"
                        data-r-small="3"
                        data-r-small-nav="true"
                        data-r-small-dots="false"
                        data-r-medium="4"
                        data-r-medium-nav="true"
                        data-r-medium-dots="false"
                        data-r-large="4"
                        data-r-large-nav="true"
                        data-r-large-dots="false"> 
                        <?php

                         $obj=new database();
                         $res=$obj->expertdisplay();
                         while ($row=mysql_fetch_array($res,MYSQL_ASSOC)) 
                         {
                

                        echo' 
                        <div class="single-item">
                            <div class="lecturers1-item-wrapper">
                                <div class="lecturers-img-wrapper">
                                    <a href="exp_profile.php?u_email_id='.$row["u_email_id"].'"><img class="img-responsive" style="height: 262px;width: 272px;" src="'.$row["u_photo"].'" alt="team"></a>
                                </div>
                                <div class="lecturers-content-wrapper">
                                    <h3 class="item-title"><a href="exp_profile.php?u_email_id='.$row["u_email_id"].'">'.$row["u_name"].'</a></h3>
                                    <span class="item-designation">'.$row["u_qualification"].'</span>
                                    
                                </div>                            
                            </div>                            
                        </div>';
                    }
                        ?>                      
                    </div> 
                </div>  
            </div>  
            <!-- Lecturers Area End Here -->
            <!-- News and Event Area Start Here -->
            
            <div class="news-event-area">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 news-inner-area">
                            <h2 class="title-default-left">Latest News</h2>
                            
                            <?php
                                
                                $res=$obj->newsuserdisplay();
                         while ($row=mysql_fetch_array($res,MYSQL_ASSOC)) 
                         {
                                echo '
                                <ul class="news-wrapper latest_news_home">
                                <li>
                                    <div class="news-img-holder">
                                        <a href="#"><img src="'.$row["news_photo"].'" class="img-responsive homepage" style="height: 101px;
width: 150px;" alt="news"></a>
                                    </div>
                                    <div class="news-content-holder">
                                        <h3><a href="news_details.php?news_id='.$row["news_id"].'">'.$row["news_title"].'</a></h3>
                                        <div class="post-date">'.$row["news_date"].'</div>
                                        
                                    </div>
                                </li>
                                </ul></br>
                                ';
                            }
                                ?>
                                                           
                            <div class="news-btn-holder">
                                <a href="news.php" class="view-all-accent-btn">View All</a>
                            </div>
                        </div>

                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 event-inner-area">
                            <h2 class="title-default-left">Upcoming Events</h2>
                           
                            <?php
                             $res=$obj->eventuserdisplay();
                         while ($row=mysql_fetch_array($res,MYSQL_ASSOC)) 
                         {
                            $event_date=$row["event_date"];
                          //  echo $event_date;
                            $day=substr($event_date,8,2);
                            $month=substr($event_date,5,2);
                            $monthName = date("F", mktime(0, 0, 0, $month, 10));
                            $year=substr($event_date,0,4);

                                echo ' <ul class="event-wrapper"><li>
                                    <div class="event-calender-wrapper">
                                        <div class="event-calender-holder">
                                            <h3>'.$day.'</h3>
                                            <p>'.$monthName.'</p>
                                            <span>'.$year.'</span>
                                        </div>
                                    </div>
                                    <div class="event-content-holder">
                                        <h3><a href="event_details.php?event_id='.$row["event_id"].'">'.$row["event_title"].'</a></h3>
                                        
                                        <ul>
                                            <li>'.$row["event_address"].'</li>
                                            <div class="post-date">'.$row["event_date"].'</div>    
                                        </ul>
                                    </div>
                                </li> </ul>
                                </br>';
                            }
                                ?>
                                
                           
                            <div class="event-btn-holder">
                                <a href="event.php" class="view-all-primary-btn">View All</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- News and Event Area End Here -->
           <!-- Counter Area Start Here -->
            <div class="counter-area bg-primary-deep" style="background-image: url('img/banner/4.jpg');">
                <div class="container">
                    <div class="row">
                        <?php

                            $res=$obj->expertdisplay();
                            $count=mysql_num_rows($res);
                        ?>
                        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 counter1-box wow fadeInUp" data-wow-duration=".5s" data-wow-delay=".20s">
                            <h2 class="about-counter title-bar-counter" data-num="<?php echo $count; ?>"><?php echo $count; ?></h2>
                            <p>EXPERTS</p>
                        </div>

                        <?php

                            $res=$obj->coursedisplay();
                            $count=mysql_num_rows($res);
                        ?>
                        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 counter1-box wow fadeInUp" data-wow-duration=".5s" data-wow-delay=".40s">
                            <h2 class="about-counter title-bar-counter" data-num="<?php echo $count; ?>">20</h2>
                            <p>COURSES</p>
                        </div>

                        <?php

                            $res=$obj->subdisplay();
                            $count=mysql_num_rows($res);
                        ?>
                        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 counter1-box wow fadeInUp" data-wow-duration=".5s" data-wow-delay=".60s">
                            <h2 class="about-counter title-bar-counter" data-num="<?php echo $count; ?>">56</h2>
                            <p>SUBJECTS</p>
                        </div>

                        <?php

                            $res=$obj->studisplay();
                            $count=mysql_num_rows($res);
                        ?>
                        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 counter1-box wow fadeInUp" data-wow-duration=".5s" data-wow-delay=".80s">
                            <h2 class="about-counter title-bar-counter" data-num="<?php echo $count; ?>">77</h2>
                            <p>REGISTERED STUDENTS</p>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Counter Area End Here -->

            <!-- Students Say Area Start Here -->
            <div class="students-say-area">
                <h2 class="title-default-center">What Our Students Say</h2> 
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
                                    <a href="#" class="profile-img"><img class="profile-img-responsive img-circle peoplesay" src="img/user/darshan.jpg" alt="Testimonial"></a>
                                </div>
                                <div class="tlp-tm-content-wrapper">
                                    <h3 class="item-title"><a href="#">Darshan Dhandhukiya</a></h3>
                                    <span class="item-designation">Student</span>
                                    <ul class="rating-wrapper">
                                    <li></li>
                                    </ul>
                                    <div class="item-content">This website is very useful to me because I am always aware of latest news and events held in my cities.</div>
                                </div>                            
                            </div>                            
                        </div>
                        <div class="single-item">
                            <div class="single-item-wrapper">
                                <div class="profile-img-wrapper">
                                    <a href="#" class="profile-img"><img class="profile-img-responsive img-circle peoplesay" src="img/user/rutul/.jpg" alt="Testimonial"></a>
                                </div>
                                <div class="tlp-tm-content-wrapper">
                                    <h3 class="item-title"><a href="#">Rutul Thakkar</a></h3>
                                    <span class="item-designation">Students</span>
                                    <ul class="rating-wrapper">
                                    <li></li>
                                    </ul>
                                    <div class="item-content">Its very useful to read blogs and ask any type of questions and easily solve my doubts with the help of the expert </div>
                                </div>                            
                            </div>                            
                        </div>
                        <div class="single-item">
                            <div class="single-item-wrapper">
                                <div class="profile-img-wrapper">
                                    <a href="#" class="profile-img"><img class="profile-img-responsive img-circle peoplesay" src="img/user/5.jpg" alt="Testimonial"></a>
                                </div>
                                <div class="tlp-tm-content-wrapper">
                                    <h3 class="item-title"><a href="#">Arpita Gandhi</a></h3>
                                    <span class="item-designation">Expert</span>
                                    <ul class="rating-wrapper">
                                        <li></li>
                                        <li></li>
                                    </ul>
                                 <div class="item-content">All experts can easily interact with the students in this website and students can also personally contact with us.</div>
                                </div>                            
                            </div>                            
                        </div>
                        <div class="single-item">
                            <div class="single-item-wrapper">
                                <div class="profile-img-wrapper">
                                    <a href="#" class="profile-img"><img class="profile-img-responsive img-circle peoplesay" src="img/user/darshan.jpg" alt="Testimonial"></a>
                                </div>
                                <div class="tlp-tm-content-wrapper">
                                    <h3 class="item-title"><a href="#">Darshan Dhandhukiya</a></h3>
                                    <span class="item-designation">Student</span>
                                    <ul class="rating-wrapper">
                                    <li></li>
                                    </ul>
                                    <div class="item-content">This website is very useful to me because I am always aware of latest news and events held in my cities.</div>
                                </div>                            
                            </div>                            
                        </div>
                        <div class="single-item">
                            <div class="single-item-wrapper">
                                <div class="profile-img-wrapper">
                                    <a href="#" class="profile-img"><img class="profile-img-responsive img-circle peoplesay" src="img/user/rutul.jpg" alt="Testimonial"></a>
                                </div>
                                <div class="tlp-tm-content-wrapper">
                                    <h3 class="item-title"><a href="#">Rutul Thakkar</a></h3>
                                    <span class="item-designation">Students</span>
                                    <ul class="rating-wrapper">
                                    <li></li>
                                    </ul>
                                    <div class="item-content">Its very useful to read blogs and ask any type of questions and easily solve my doubts with the help of the expert </div>
                                </div>                            
                            </div>                            
                        </div>
                        <div class="single-item">
                            <div class="single-item-wrapper">
                                <div class="profile-img-wrapper">
                                    <a href="#" class="profile-img"><img class="profile-img-responsive img-circle peoplesay" src="img/user/5.jpg" alt="Testimonial"></a>
                                </div>
                                <div class="tlp-tm-content-wrapper">
                                    <h3 class="item-title"><a href="#">Arpita Gandhi</a></h3>
                                    <span class="item-designation">Expert</span>
                                    <ul class="rating-wrapper">
                                        <li></li>
                                        <li></li>
                                    </ul>
                                 <div class="item-content">All experts can easily interact with the students in this website and students can also personally contact with us.</div>
                                </div>                            
                            </div>                            
                        </div>
                        
                    </div> 
                </div>  
            </div>  
            <!-- Students Say Area End Here -->
            <!-- Students Join 1 Area Start Here -->
            
            <!-- Students Join 1 Area End Here -->
            <?php
                include './footer.php';
            ?>
        </div>
        <!-- Main Body Area End Here -->
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

<!-- Mirrored from www.radiustheme.com/demo/html/academics/academics/index4.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 31 Jan 2017 17:52:02 GMT -->
</html>
