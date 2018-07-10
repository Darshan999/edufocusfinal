<?php

    session_start();
?>
<!doctype html>
<html class="no-js" lang="">
    
<!-- Mirrored from www.radiustheme.com/demo/html/academics/academics/courses3.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 31 Jan 2017 17:52:59 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
<head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>EduFocus | Videos</title>
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
                        <h2>Videos</h2>
                        <ul>
                            <li><a href="index4.php">Home</a></li>
                            
                        </ul>
                    </div>
                </div>  
            </div> 
            <!-- Inner Page Banner Area End Here -->
             <div class="service2-area"> 
                <div class="search-area">
                    <div class="container">
                         <div class="row search-inner searchbar_color">
                             
                            <div class="col-lg-8 col-md-6 col-sm-6 col-xs-12">
                                <div class="search-input searchbar_inputtext">
                                    <form action="" method="post">

                                        <input type="text" value="<?php if(isset($_POST['txttitle']) && $_POST['txttitle'] !== "") { echo $_POST['txttitle'];}?>" name="txttitle" class="search-form" placeholder="videos Keywords . . ." required="">  
                                    
                                </div>
                            </div>
                            <div class="col-lg-2 col-md-3 col-sm-3 col-xs-12">
                                <div class="search-submit blogsearchbarbutton">
                                    <input type="submit" name="btntitlesearch" value="Search" class="join-now-btn"/>
                                </div>
                            </div>
                            </form>
                        </div>
                    </div>
                    <div class="container searchbar_dropdown1">
                         <div class="row search-inner searchbar_colordrop searchbar_dropdown2">
                          <div class="search-title searchbyuser">
                                    <span><i class="fa fa-search" aria-hidden="true"></i> Search By User</span>
                                </div>
                            <div class="col-lg-8 col-md-6 col-sm-6 col-xs-12">

                                <div class="search-input searchbar_inputtext">
                                    <form>
                                        
                                        <select class="form-control m-bot15 dropdown" onChange="window.location='searchvideo.php?u_email_id='+this.value">
                                        <option>Select User</option>

                                        <?php

                                         $sub_id=$_REQUEST["sub_id"];
                                         $_SESSION["sub_id"]=$sub_id;
                                  //       $sub_id=$_SESSION["sub_id"];
                                         //include 'database.php';
                                         $obj=new database();
                                         $res=$obj->searchvideoUser($sub_id);

                                         while($row=mysql_fetch_assoc($res))
                                         {
                                            echo '<option value='.$row["u_email_id"].'>'.$row["u_name"].'</option>';
                                         }   
                                        ?>
                                        </select>
                                        
                                    </form>
                                </div>
                            </div>
                             
                        </div>
                </div>
                </div>
                </div> 

            <!-- Courses Page 2 Area Start Here -->  
            <div class="courses-page-area2 search_margin">
                <div class="container" id="inner-isotope">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                     <?php
                        include 'innerheader.php';
                    ?>
                    </div>
                    </div>
            <!-- Courses Page 2 Area End Here -->
            <div class="news-event-area">
                <div class="container">
                    <div class="row blog_margin">
                    <div class="col-lg-9 col-md-12 col-sm-12 col-xs-12 event-inner-area ">


         <!--  search mate--><?php
                    if(isset($_POST["btntitlesearch"]))
                     {
                        $searchtitle=$_POST["txttitle"];
                       $searchtitle=strtolower($searchtitle);
                        $obj1=new database();
                        $res1=$obj1->searchvideobytitle1($searchtitle,$sub_id);

                          while($row1=mysql_fetch_assoc($res1))
                         {

                            $notes=$row1["notes"];
                          $type=$row1["type"];
                          $notes_id=$row1["notes_id"];

                            $res1=$obj->videocommentcount($notes_id);
                                 $cnt=mysql_num_rows($res1);


                             $url = escapeshellcmd($notes);
                            $down=exec("youtube-dl $url -O /tmp/video.flv");

                         if($type=="video")
                         {
                             $imagelink='https://img.youtube.com/vi/'.$row1["notes_img"].'/hqdefault.jpg';
                            $videolink='https://www.youtube.com/watch?v='.$row1["notes"].'';
                            $download='https://ssyoutube.com/watch?v='.$row1["notes"].'';

                             echo '</br>';
                              echo '
                        
                            <a href="video_details.php?notes_id='.$notes_id.'"><h2 class="title-default-left">'.$row1["notes_title"].'</h2></a>
                            <ul class="title-bar-high news-comments video_titlecmt">
                                            <li><a href="#"><i class="fa fa-user" aria-hidden="true"></i><span>By</span> '.$row1["u_name"].'</a></li>
                                            <li><a href="#"><i class="fa fa-comments-o" aria-hidden="true"></i><span>('.$cnt.')</span> Comments</a></li>
                            </ul>
                            <div class="video-area2 " style="background-image: url('.$imagelink.'); background-color: lightslategray;height: 375px;">
                                <div class="video-content">
                                    <a class="play-btn popup-youtube" href="'.$videolink.'"><i class="fa fa-play" aria-hidden="true"></i></a>


                                </div> 
                                
                            </div>
                            <br/>

                            <a  href="'.$download.'" class="default-big-btn "><i class="fa fa-download"> &nbsp;&nbsp; Download</i></a> 

                            <br/><br/>
                            ';
                                    

                        }
                  }
                    
                }//search if end
                else
                {
                        $sub_id=$_REQUEST["sub_id"];
                     $obj=new database();
                     $res=$obj->notesuserjoin($sub_id);

                     while($row=mysql_fetch_assoc($res))
                     {

                        $notes=$row["notes"];
                        $type=$row["type"];
                        $notes_id=$row["notes_id"];

                          $res1=$obj->videocommentcount($notes_id);
                                 $cnt=mysql_num_rows($res1);


                        $url = escapeshellcmd($notes);
                        $down=exec("youtube-dl $url -O /tmp/video.flv");

                        if($type=="video")
                        {
                          $imagelink='https://img.youtube.com/vi/'.$row["notes_img"].'/hqdefault.jpg';
                            $videolink='https://www.youtube.com/watch?v='.$row["notes"].'';
                            $download='https://ssyoutube.com/watch?v='.$row["notes"].'';

                    echo '<br/>';
                     echo '
                            
                            <a href="video_details.php?notes_id='.$notes_id.'"><h2 class="title-default-left">'.$row["notes_title"].'</h2></a>
                            <ul class="title-bar-high news-comments video_titlecmt">
                                            <li><a href="#"><i class="fa fa-user" aria-hidden="true"></i><span>By</span> '.$row["u_name"].'</a></li>
                                            <li><a href="#"><i class="fa fa-comments-o" aria-hidden="true"></i><span>('.$cnt.')</span> Comments</a></li>
                            </ul>
                            <div class="video-area2 " style="background-image: url('.$imagelink.'); background-color: lightslategray;height: 375px;">
                                <div class="video-content">
                                    <a class="play-btn popup-youtube" href="'.$videolink.'"><i class="fa fa-play" aria-hidden="true"></i></a>


                                </div> 
                                
                            </div>
                            <br/>
                            <a  href="'.$download.'" class="default-big-btn "><i class="fa fa-download"> &nbsp;&nbsp; Download</i></a> 

                            <br/><br/>


                            ';
                            
                         

                        }


                }
            }//else end

                    ?>
                 
                    
                    
                        </div>
                        <?php


                 
                     echo '
                                
                   
                  <div class="col-lg-3 col-md-3 col-sm-4 col-xs-12 col-md-pull-0">   
                <div class="sidebar">
                                <div class="sidebar-box">
                                    
                                        
                                        <div class="sidebar-find-course">
                                            <form id="checkout-form">
                                                
                                                <div class="form-group">
                                                    <a href="insertvideo.php?sub_id='.$sub_id.'" name="insnote" class="sidebar-search-btn-full disabled default-big-btn">Add Video</a>
                                                </div>
                                                
                                            </form>
                                        </div>
                                    
                                </div>';
                       
                       ?>     
               <?php

                 include 'sidebar.php';

                 

                    ?>

                      
                        <!--<div class="col-lg-6 col-md-12 col-sm-12 col-xs-12 event-inner-area">
                            <h2 class="title-default-left">Campus Video Tour</h2>
                            <div class="video-area2 overlay-video bg-common-style" style="background-image: url('img/banner/2.jpg');">
                                <div class="video-content">
                                    <a class="play-btn popup-youtube" href="http://www.youtube.com/watch?v=1iIZeIy7TqM"><i class="fa fa-play" aria-hidden="true"></i></a>
                                </div> 
                            </div>
                        </div>-->

                </div>
                </div>
                
                
                    </div>
                   
                </div>
</div>
</div>
</div>
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

<!-- Mirrored from www.radiustheme.com/demo/html/academics/academics/courses3.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 31 Jan 2017 17:52:59 GMT -->
</html>

