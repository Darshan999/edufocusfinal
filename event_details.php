<?php

    session_start();
?>
<!doctype html>
<html class="no-js" lang="">
    
<!-- Mirrored from www.radiustheme.com/demo/html/academics/academics/single-event.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 31 Jan 2017 17:53:33 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
<head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>EduFocus | Event Details</title>
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
    <div class="countdown">

  <span id="clock1234"></span>
</div>
    
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
                        <h2>Event Details</h2>
                        <ul>
                            <li><a href="#">Home</a> -</li>
                            <li>Event Details</li>
                        </ul>
                    </div>
                </div>  
            </div>  
            <!-- Inner Page Banner Area End Here -->
            <!-- Event Details Page Area Start Here -->
            <div class="event-details-page-area">
                <div class="container">
                    <div class="row"> 
                        <div class="col-lg-9 col-md-9 col-sm-8 col-xs-12">
                            <div class="event-details-inner">
                            <?php

                                $event_id=$_REQUEST["event_id"];
                                $obj=new database();
                                $res=$obj->eventdetails($event_id);
                              


                                while($row=mysql_fetch_assoc($res))
                                {

                                    $sysdate=date("Y/m/d");
                                   // echo $sysdate;
                                    $eve_date=$row["event_date"];
                                    // echo $row["event_date"];
                                    $row["event_date"] = date("Y/m/d", strtotime($row["event_date"]));
                                                                                    
                                    //echo $row["event_date"];die;
                            $timeForCountDown = $row["event_date"].' '.$row["event_time"];
                            //echo  strtotime($timeForCountDown); 
                            $timeForCountDown = date("Y/m/d H:i:s", strtotime($timeForCountDown));
                            $event_time=$row["event_time"];
                            $event_date=$row["event_date"];
                            $day=substr($event_date,8,2);
                            $month=substr($event_date,5,2);
                            $monthName = date("F", mktime(0, 0, 0, $month, 10));
                            $year=substr($event_date,0,4);
                            $event_date=$day.' '.$monthName.' '.$year;


                      

                         //echo $timeForCountDown;die;
                                echo '<div class="event-details-img">
                                    <div class="countdown-content">
                                        <div id="countdown"></div>
                                    </div>
                                    <a href="#"><img src="'.$row["event_photo"].'" alt="event" class="img-responsive blog_img"></a>
                                </div>
                                <h2 class="title-default-left-bold-lowhight"><a href="#">'.$row["event_title"].'</a></h2>
                                <ul class="event-info-inline title-bar-sm-high">
                                    <li><i class="fa fa-calendar" aria-hidden="true"></i>'.$event_date.'</li>
                                    <li><i class="fa fa-map-marker" aria-hidden="true"></i>'.$row["event_address"].'</li>
                                </ul>
                                <p>'.$row["event_desc"].'</p>

                                ';
                            }
                                ?>

                                <?php


                           if(isset($_POST["joinevent"]))
                                 {

                                    if(!empty($_SESSION["u_email_id"]))
                                    {
                                
                       

                                     if($sysdate != $eve_date)
                                    {
                                        if($sysdate < $eve_date)
                                        {

                                            $joinevent_desc=$_POST["joineventdesc"];
                                        //$fk_event_id=$_REQUEST["event_id"];

                                            $res=$obj->insertevent($joinevent_desc,$u_email_id,$event_id);

                                            header('location:event_details.php?event_id='.$event_id.'');
                                         }
                                           
                                         else
                                         {
                                            echo "<script type='text/javascript'>alert('Event Expired');</script>";
                                         } 
                                     }
                                  
                                  }
                                    else
                                     {
                                     echo "<script type='text/javascript'>alert('Plz Login');</script>";

                                    //echo "plz login";
                                    }
                                }    


                     ?>
                     
<?php 

                  
                             echo  ' <div class="leave-comments">
                                    <h3 class="sidebar-title">Join Event</h3>
                                    <div class="row">
                                        <div class="contact-form"> 
                                            <form method="post">
                                                <fieldset>
                                                   
                                                    <div class="col-sm-12">
                                                        <div class="form-group">
                                                            <textarea placeholder="Comment" class="textarea form-control" id="form-message" name="joineventdesc" rows="8" cols="20" required></textarea>
                                                            <div class="help-block with-errors"></div>
                                                        </div>
                                                    </div>
                                                  
                                                    <div class="col-sm-12">
                                                        <div class="form-group margin-bottom-none">
                                                            <button type="submit" class="view-all-accent-btn" name="joinevent">Join Event</button>
                                                        </div>
                                                    </div>
                                             </fieldset>
                                            </form>
                                        </div>
                                    </div>
                                </div>';
                           
                            ?>
                            </div>
                        
                            
                        </div>               
                    </div>
                </div>
            </div>
            <!-- Event Details Page Area End Here -->
            <!-- Footer Area Start Here -->
           <?php
            include'./footer.php';
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
      <script type="text/javascript">
        $(function(){
var timeForCountDown = "<?php echo $timeForCountDown;?>";

$('#countdown').countdown(timeForCountDown, function(event) {
    var format = '%H:%M:%S';
    if(event.offset.totalDays > 0) {
    format = '%-d day%!d ' + format;
  }
   $(this).html(event.strftime(format));
  //var totalHours = event.offset.totalDays * 24 + event.offset.hours;
  //$(this).html(event.strftime(totalHours + ' hr %M min %S sec'));
});

 });
        </script>
    </body>

<!-- Mirrored from www.radiustheme.com/demo/html/academics/academics/single-event.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 31 Jan 2017 17:53:34 GMT -->
</html>