<?php

    session_start();
?>
<!doctype html>
<html class="no-js" lang="">
    
<!-- Mirrored from www.radiustheme.com/demo/html/academics/academics/faq.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 31 Jan 2017 17:52:56 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
<head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>EduFocus | Answers</title>
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
                        <h2>Multiple Answers</h2>
                        <ul>
                            <li><a href="index4.php">Home</a> -</li>
                           <li><a href="#">Questions</a> </li>
                        </ul>
                    </div>
                </div>  
            </div> 
            <!-- Inner Page Banner Area End Here --> 
                
            <!-- Faq Page Area Start Here -->
            <div class="faq-page-area">
                <div class="container">
                    <div class="row panel-group" id="faq-accordian">
                        
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                    
                        <?php

                            //require "database.php";
                       $que_id=$_REQUEST["que_id"];
                     
                        $cnt=0;
                       $i=0;
                        
                         $obj1=new database();
                        $res1=$obj1->questionuserdisplay1($que_id);

                         while($row1=mysql_fetch_assoc($res1))
                        {
                            $que_title=$row1["que_title"];
                           // echo  "<center><h4>".$que_title."</center></h4>"; 

                            echo '
                            

                            <div class="panel-title faq-box-title"><center>
                                            <h3>'.$que_title.'</h3>
                                           <!--<h3>'.$row1["fk_u_email_id"].'</h3>
                                             <h3>'.$row1["que_date"].'</h3>
                                             <h3>'.$row1["que_time"].'</h3>-->
                                             
                                            </center>
                                        </div>

                                       ';
                        } 

                        $obj=new database();
                        $res=$obj->answeruserdisplay($que_id);


                        while($row=mysql_fetch_assoc($res))
                        {
                            //$que_id=$row["que_id"];
                           
                                
                                  $cnt=$cnt+1;
                           
                        echo  ' 
                        
                         <div class="faq-box-wrapper">
                                <div class="faq-box-item panel panel-default">
                                    <div class="panel-heading active">
                                        
                                    </div>
                                    <div aria-expanded="false" id="collapseOne'.$i.'" role="tabpanel" class="panel-collapse collapse in">
                                        <div class="panel-body faq-box-body">
                                            <p>'.$row["ans_desc"].'</p>
                                             <p>'.$row["u_name"].'</p>
                                             <p>'.$row["ans_date"].'</p>
                                            
                                        </div>
                                    </div>
                                   
                                </div>
                            </div>
                           ';
                      
                    }
                        ?>

                        <?php

                    
                       if(isset($_POST["anspost"]))
                        {
                                if(!empty($_SESSION["u_email_id"]))
                             {

                            
                           // $sub_id=$_REQUEST["sub_id"];
                            $ans_desc=$_POST["ansdesc"];
                            $flag="active";
                            $ans_date=date("Y/m/d");
                            $ans_time=date("H:i:s");
                            
                            $viwe=1;
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
                   
                               $res=new database();
                               $cnt=$res->insertanswer($ans_desc,$ans_date,$ans_time,$flag,$view,$que_id,$u_email_id);

                             header('location:ans.php?que_id='.$que_id.'');


                    }
                    else
                    {
                        echo "<script type='text/javascript'>alert('Plz Join Group');</script>";
                     }

                           

                             

                        }
                        else
                         {
                       echo "<script type='text/javascript'>alert('Plz Join Group');</script>";
                       // echo "plz login";
                         }
                    }
                    

                        ?>
                        
                        <form action=""  enctype="multipart/form-data" method="post">
                       
                           <div class="leave-comments">
                                        <h3 class="sidebar-title">Your Answer</h3>
                                        <div class="row">
                                            <div class="contact-form"> 
                                                <form>
                                                    <fieldset>
                                                        
                                                        <div class="col-sm-12">
                                                            <div class="form-group">
                                                           
                                     <textarea class="form-control ckeditor" name="ansdesc" rows="6"></textarea>
                                                 
                                                                <div class="help-block with-errors"></div>
                                                            </div>
                                                        </div>
                                                        </br>
                                                        <div class="col-sm-12">
                                                            <div class="form-group margin-bottom-none">
                                                                <button type="submit" name="anspost" class="view-all-accent-btn">Post Answer</button>
                                                            </div>
                                                        </div>
                                                    </fieldset>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                    </form>
                     
                  
                    
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
