<?php

    session_start();
    $sub_id=$_SESSION["sub_id"];
 $u_email_id1=$_SESSION["email"];
?>
<!doctype html>
<html class="no-js" lang="">
    
<!-- Mirrored from www.radiustheme.com/demo/html/academics/academics/faq.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 31 Jan 2017 17:52:56 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->

<head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>EduFocus | Questions</title>
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
                        <h2>Questions-Answers</h2>
                        <ul>
                            <li><a href="">Home</a> -</li>
                            <li>Questions</li>
                        </ul>
                    </div>
                </div>  
            </div> 
            <div class="service2-area"> 
                <div class="search-area">
                    <div class="container">
                         <div class="row search-inner searchbar_color">
                             
                            
                                         
                        <div class="col-lg-8 col-md-6 col-sm-6 col-xs-12">

                                <div class="search-input searchbar_inputtext">
                                    <form method="get">
                                        
                                        <select class="form-control m-bot15 dropdown search_dropdown22" onChange="window.location='searchquebyuser.php?que_title='+this.value">
                                        <option>Choose Questions From Selected User</option>

                                        <?php 

                                       // $u_email_id=$_GET['u_email_id'];
                                        // $sub_id=$_REQUEST["sub_id"];
                                        // $_SESSION["sub_id"]=$sub_id;
                                  //       $sub_id=$_SESSION["sub_id"];
                                         //include 'database.php';
                                         $obj=new database();
                                         $res=$obj->searchuserquestions($sub_id,$u_email_id1);

                                         

                                         while($row=mysql_fetch_assoc($res))
                                         {
                                            $sortcontent=substr($row["que_title"],0,73)." ...";


                                            $selected='';
                                         if(isset($_GET['que_title']) && $_GET['que_title'] == $sortcontent ) { 
                                                $selected='selected';
                                            }
                                         
                                         
                                            echo '<option '.$selected.'>'.$sortcontent.'</option>';
                                             
                                         }   
                                        ?>
                                        </select>
                                        
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="container searchbar_dropdown1">
                         <div class="row search-inner searchbar_colordrop searchbar_dropdown2">
                         <div class="search-title searchbyuser">
                                    <span><i class="fa fa-search" aria-hidden="true"></i> Search By User</span>
                                </div>
                             
                            <div class="col-lg-8 col-md-6 col-sm-6 col-xs-12">
                                <div class="search-input searchbar_inputtext">
                                    <form method="get">
                                      
                                        
                                        <select class="form-control m-bot15 dropdown" onChange="window.location='searchque.php?u_email_id='+this.value">
                                        <option>Select User</option>

                                        <?php




                                       //  $sub_id=$_REQUEST["sub_id"];
                                        // $_SESSION["sub_id"]=$sub_id;
                                  //       $sub_id=$_SESSION["sub_id"];
                                         //include 'database.php';
                                         $obj=new database();
                                         $res=$obj->searchqueUser($sub_id);

                                         while($row=mysql_fetch_assoc($res))
                                         {

                                             $selected='';
                                            if(isset($_SESSION['email']) && $_SESSION['email'] == $row["u_email_id"]) { 
                                                $selected='selected';
                                            }

                                            echo '<option '.$selected.' value='.$row["u_email_id"].'>'.$row["u_name"].'</option>';
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
            <!-- Faq Page Area Start Here -->
            <div class="faq-page-area">
                <div class="container">
                    <div class="row panel-group blog_margin" id="faq-accordian">
                        
                     <div class="col-lg-9 col-md-9 col-sm-8 col-xs-12 ">

                     <?php //search mate

                    

                            //require "database.php";
                        //$sub_id=$_REQUEST["sub_id"];

                    //   $que_id=$_SESSION["que_id"];

               // $u_email_id=$_REQUEST["u_email_id"];
                      $que_title1=$_REQUEST["que_title"];
                      //echo $que_title;
                      //echo $u_email_id1;
                      //echo $sub_id;
                      $len=strlen($que_title1);
                    //  echo $len-4;
                      $que_title12=substr($que_title1,0,$len-4);
                       //echo $que_title12;

                        $cnt=0;
                       $i=0;
                        $obj=new database();
                        $res=$obj->searchquebyuser($que_title12,$sub_id,$u_email_id1);
                          
                        while($row=mysql_fetch_assoc($res))
                        {
                           // echo  $_SESSION["u_email_id"];
                            

                        //    $u_email_id=$_REQUEST["u_email_id"];
                            
                           
                            $que_id=$row["que_id"];

                            //answer display
                             $obj1=new database();
                             $res1=$obj1->answeruserdisplay($que_id);
                             $cnt1=mysql_num_rows($res1);

                           $i=$i+1;
                             $cnt=$cnt+1;

                           if($cnt1>0)
                           {
                        echo  ' 
                        </br>
                         <div class="faq-box-wrapper">
                                <div class="faq-box-item panel panel-default">
                                    <div class="panel-heading active">
                                        <div class="panel-title faq-box-title">
                                            <h3>
                                                <a aria-expanded="false"  class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseOne'.$i.'"><span class="faq-box-count">'.$cnt.'</span>'.$row["que_title"].'
                                                </a>
                                 
                                            </h3>
                                        </div>
                                    </div>';

                            }
                            else
                            {
                                echo '<div class="faq-box-wrapper">
                                <div class="faq-box-item panel panel-default">
                                    <div class="panel-heading active">
                                        <div class="panel-title faq-box-title">
                                            <h3>
                                                <a  href="ans.php?que_id='.$que_id.'"><span class="faq-box-count">'.$cnt.'</span>'.$row["que_title"].'
                                                </a>
                                 
                                            </h3>
                                        </div>
                                    </div>';
                            }

                                
                           
                           
                           
                             $c=0;
                                while($row1=mysql_fetch_assoc($res1))
                                {
                                    $c=$c+1;
                                   
                                   // if($cnt1>0)
                                   // {
                                        if($c==1)
                                        {
                                        echo ' <div aria-expanded="false" id="collapseOne'.$i.'" role="tabpanel" class="panel-collapse collapse">
                                            <div class="panel-body faq-box-body">
                                                <p>'.$row1["ans_desc"].'</p>
                                                
                                                  <a href="ans.php?que_id='.$que_id.'" class="default-big-btn active">Read More </a>
                                     
                                        
                                            </div>
                                        </div> ';
                                        }
                                        
                                  //  }
                                  /*  else
                                    {

                                        echo '

                                            <div aria-expanded="false" id="collapseOne'.$i.'" role="tabpanel" class="panel-collapse collapse ">
                                            <div class="panel-body faq-box-body">
                                               
                                        <a href="ans.php?que_id='.$que_id.'" class="default-big-btn active">Read More </a>

                                        </div>
                                        </div> ';
                                    }*/
                                   
                                  
                                }
                                echo '                  
                                </div></div>

                                            <div class="inner-product-details-right">
                                                <ul>
                                                    <a href="#"><li><i class="fa fa-star" aria-hidden="true"></i></li></a>
                                                    <a href="#"><li><i class="fa fa-star" aria-hidden="true"></i></li></a>
                                                    <a href="#"><li><i class="fa fa-star" aria-hidden="true"></i></li></a>
                                                    <a href="#"><li><i class="fa fa-star" aria-hidden="true"></i></li></a>      
                                                    <a href="#"><li><i class="fa fa-star" aria-hidden="true"></i></li></a>
                                                </ul>
                                            </div>
                                ';
                      
                    }
             
  
                      ?>

                           
                    
                </div>
                 <?php


                 //$u_email_id=$_SESSION["u_email_id"];    
                     echo '
                                
                   
                  <div class="col-lg-3 col-md-3 col-sm-4 col-xs-12 col-md-pull-0">   
                <div class="sidebar">
                                <div class="sidebar-box">
                                    
                                        
                                        <div class="sidebar-find-course">
                                            <form id="checkout-form">

                                                 
                                                <div class="form-group">

                                                  

                                                    <a href="insertque.php?sub_id='.$sub_id.'" name="insque" class="sidebar-search-btn-full disabled default-big-btn">Insert Question</a>

                                                </div>
                                                </form>
                                        </div>
                                    
                                </div>';
                       
                       ?>     
                
                   
            
                <?php

                 include 'sidebar.php';

                 echo '<div class="sidebar-box">
                                    <div class="sidebar-box-inner">
                                        <h3 class="sidebar-title">Latest Questions</h3>
                                        <div class="sidebar-latest-research-area">';
        

                     $obj2=new database();
                     $res2=$obj2->latestque($sub_id);
                     while($row2=mysql_fetch_assoc($res2))

                     {
                        $que_id=$row2["que_id"];

                echo '
                                                    <ul>
                                                <li>
                                                    <div class="latest-research-img">
                                                        <a href="#"><img src="img/sidebar/8.jpg" class="img-responsive" alt="skilled"></a>
                                                    </div>
                                                    <div class="latest-research-content">
                                                        <h4>'.$row2["que_date"].'</h4>
                                                        <a href="ans.php?que_id='.$que_id.'"> <p>'.$row2["que_title"].'</p></a>
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
