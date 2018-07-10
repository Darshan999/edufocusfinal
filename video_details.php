<?php

    session_start();
?>
<!doctype html>
<html class="no-js" lang="">
    
<!-- Mirrored from www.radiustheme.com/demo/html/academics/academics/single-news.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 31 Jan 2017 17:53:29 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
<head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>EduFocus | Video Details</title>
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
                        <h2>Video Details</h2>
                        <ul>
                            <li><a href="index4.php">Home</a> - </li>
                            <li>Video Details</li>
                        </ul>
                    </div>
                </div>  
            </div>
            <!-- Inner Page Banner Area End Here -->
            <div class="courses-page-area2">
                <div class="container" id="inner-isotope">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">

                    
                        </div>
                    </div>
            <!-- News Details Page Area Start Here -->
          <div class="news-event-area">
                <div class="container">
                    <div class="row blog_margin">
                    <div class="col-lg-9 col-md-12 col-sm-12 col-xs-12 event-inner-area ">
                    <?php

                         $notes_id=$_REQUEST["notes_id"];
                         $obj1=new database();
                        $res1=$obj1->videocommentdisplay($notes_id);
                        $cnt=mysql_num_rows($res1);

                    ?>
                            <?php

                           
                            $obj=new database();
                                $res=$obj->notesdetails($notes_id);

                                while($row=mysql_fetch_assoc($res))
                     {

                        $notes=$row["notes"];
                        $type=$row["type"];
                       // $notes_id=$row["notes_id"];

                        $url = escapeshellcmd($notes);
                        $down=exec("youtube-dl $url -O /tmp/video.flv");

                        if($type=="video")
                        {
                          $imagelink='https://img.youtube.com/vi/'.$row["notes_img"].'/hqdefault.jpg';
                            $videolink='https://www.youtube.com/watch?v='.$row["notes"].'';
                            $download='https://ssyoutube.com/watch?v='.$row["notes"].'';

                    echo '<br/>';
                     echo '
                            
                            <a href="video_details.php"><h2 class="title-default-left">'.$row["notes_title"].'</h2></a>
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
            

                    ?>

                     <?php

                       
                        
                         echo   '<div class="course-details-comments">
                                    <h3 class="sidebar-title">('.$cnt.') Comments</h3>';
                        while($row=mysql_fetch_assoc($res1))
                        {

                             $u_photo=$row["u_photo"]; 
                                    $cmnt_desc=$row["video_cmnt_desc"];
                                    $u_name=$row["u_name"];

                               echo '
                               <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                               <div class="media">
                                            <a href="#" class="pull-left">
                                                <img alt="Comments" src="'.$u_photo.'" style=" height: 64px; width: 67px;" class="media-object">
                                            </a>
                                            <div class="media-body">
                                                <h3><a href="#"></a>'.$u_name.'</h3>
                                                
                                                <p>'.$cmnt_desc.'</p>
                                            </div>
                                        </div>
                                        </div>';
                        }

                       
                                        
                                       
                                   echo '</div>';
                     ?>

                     <?php

                         if(isset($_POST["cmntpost"]))
                                 {

                                    if(!empty($_SESSION["u_email_id"]))
                                    {
                                

                                        $fk_sub_id=$_SESSION["sub_id"];
                                        $course_id=$_SESSION["course_id"];
                                       // echo $fk_sub_id;
                                       // echo $course_id;
                                       //$fk_u_email_id="rutulthakkar8997@gmail.com";
                                        // include 'database.php';
                                        //grp member 6e ke nhi
                                        $obj1=new database();
                                        $res1=$obj1->grpmember($u_email_id,$fk_sub_id);
                                        $cnt1=mysql_num_rows($res1);
                                        //grp expert 6e ke nhi

                                        $res2=$obj1->subexpert($u_email_id,$course_id);
                                        $cnt2=mysql_num_rows($res2);
                                       // echo $cnt2;
                                           
                                        if($cnt1==1 || $cnt2==1)
                                         {



                                                    $video_cmnt_date=date("Y/m/d");
                                                     $video_cmnt_time=date("H:i:s");
                                                       
                                                        $video_cmnt_desc=$_POST["cmntdesc"];
                                                       
                                        $res=$obj->videocommentadd($video_cmnt_desc,$video_cmnt_time,$video_cmnt_date,$u_email_id,$notes_id);

                                        header('location:video_details.php?notes_id='.$notes_id.'');
                                    }
                                     else
                                        {
                                            echo "<script type='text/javascript'>alert('Plz Join Group');</script>";
                                         }
                                  
                                  }
                                    else
                                     {
                                     echo "<script type='text/javascript'>alert('Plz Join Group');</script>";

                                    //echo "plz login";
                                    }
                                }    



                     ?>
                        

                       
                                    
                                            <div class="leave-comments">
                                        <h3 class="sidebar-title">Leave A Comment</h3>
                                        <div class="row">
                                            <div class="contact-form"> 
                                                <form method="post">
                                                    <fieldset>
                                                        <div class="col-sm-12">
                                                            <div class="form-group">
                                                                <textarea placeholder="Comment" class="textarea form-control" id="form-message" name="cmntdesc" rows="8" cols="20"></textarea>
                                                                <div class="help-block with-errors"></div>
                                                            </div>
                                                        </div>
                                                        <div class="col-sm-12">
                                                            <div class="form-group margin-bottom-none">
                                                                <button type="submit" name="cmntpost" class="view-all-accent-btn">Post Comment</button>
                                                            </div>
                                                        </div>
                                                    </fieldset>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                   
                       
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
            </div>
             </div>
            </div>
            <!-- News Page Area End Here -->
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

<!-- Mirrored from www.radiustheme.com/demo/html/academics/academics/single-news.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 31 Jan 2017 17:53:30 GMT -->
</html>
