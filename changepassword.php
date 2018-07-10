<?php

    session_start();
?>

<!doctype html>
<html class="no-js" lang="">
    
<!-- Mirrored from www.radiustheme.com/demo/html/academics/academics/single-lecturers.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 31 Jan 2017 17:52:26 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
<head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>EduFocus | Change Password</title>
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
                  // $u_email_id=$_SESSION["u_email_id"];
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
                        <h2>Change Password</h2>
                        <ul>
                            <li><a href="#">Home</a> -</li>
                            <li>Details</li>
                        </ul>
                    </div>
                </div>  
            </div> 

            
            
          <?php 
                   // include 'database.php';
                    $obj=new database();
                    $res=$obj->peruserdisplay($_SESSION["u_email_id"]);
                    while($row=mysql_fetch_assoc($res))
                    {
                        $u_photo=$row["u_photo"];
                        $u_name=$row["u_name"];
                        $pass=$row["u_password"];
                    }
        ?>
        

       <?php
if(isset($_POST["editpass"]))
{
    $u_email_id=$_SESSION["u_email_id"];
    $pass1=$_POST["oldpass"];
    $pass2=$_POST["newpass"];
    $pass3=$_POST["renewpass"];
    
       if($pass==$pass1)
        {
              if($pass2==$pass3)
              {
                   $obj3=new database();
                   $res3=$obj3->updatepassword($u_email_id,$pass2);
                   if($res3==1)
                   {
                    header("location:mainpage.php");
                   }
                   
              }

             else
             {
  
                  echo '<script type="text/javascript">';
                  echo "alert('please Re type new password');";
                  echo "</script>";

  
            }
       }
         
       else
      {
//  echo "old password is wrong";
        echo '<script type="text/javascript">';
        echo "alert('Old password is wrong');";
       echo "</script>";

      }
            
    
    
}
?>


                            <div class="faq-page-area insertdata" >
                <div class="container">
                    <div class="row panel-group blog_margin" id="faq-accordian">
                        
                     <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                            <div class="lecturers-contact-info">
                                <img src="<?php echo $u_photo;?>" name="u_name" class="expertviewprofile img-responsive" alt="team">
                                <h2><?php echo $u_name;?></h2>
                            </div>  
                        </div>  
                        <div class="col-lg-8 col-md-8 col-sm-6 col-xs-12">
                  <form action=""  enctype="multipart/form-data" method="post">
                                         
                      
                           <div class="leave-comments">
                                        <h3 class="sidebar-title">Change Password</h3>
                                        <div class="row">
                                            <div class="contact-form"> 
                                                <form method="post" action="" enctype="multipart/form-data">
                                                    <fieldset>
                                                     
                                                        <div class="col-sm-12">
                                                            <div class="form-group">
                                                                <input type="password"   class="form-control" name="oldpass" type="password" placeholder="Enter Old Password">
                                                                <div class="help-block with-errors"></div>
                                                            </div>
                                                        </div>


                                                        <div class="col-sm-12">
                                                            <div class="form-group">
                                                                <input type="password"   class="form-control" name="newpass" type="password" placeholder="Enter New Password">
                                                                <div class="help-block with-errors"></div>
                                                            </div>
                                                        </div>


                                                        <div class="col-sm-12">
                                                            <div class="form-group">
                                                                <input type="password"   class="form-control" name="renewpass" type="password" placeholder="Re-enter New password">
                                                                <div class="help-block with-errors"></div>
                                                            </div>
                                                        </div>
         
                                                        
                                                        <div class="col-sm-12">
                                                            <div class="form-group margin-bottom-none">
                                                                <button type="submit" name="editpass" class="view-all-accent-btn">Update Password</button>
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
            
           


        
      
      <!--<div class="entry-widget">
          <div class="widget-profile">
              <div class="image" ></div>
                                <div class="portfolio text-center col-md-offset-1 col-sm-offset-3 editprofile_img" >


                                 <a onClick="u_photo"><img alt="" height="150px" width="150px" src="<?php echo $u_photo; ?>"></a>

                                 <a href=""><img alt="" height="150px" width="150px" src="<?php echo $u_photo; ?>"></a>

                                 </div>
    
                          <div class="info">
                        
                               <form class="form-horizontal " method="post" action="" enctype="multipart/form-data">
                                     
                                     <div class="form-group ">
                                          <label for="email" class="control-label col-lg-2">Email <span class="required">*</span></label>
                                          <div class="col-lg-10">
                                              <input class="form-control " id="email" readonly="" name="u_email_id" type="email" value="<?php echo  $_SESSION["u_email_id"];?>" />
                                          </div>
                                      </div>

                                      <div class="form-group ">
                                          <label for="username" class="control-label col-lg-2">Name <span class="required">*</span></label>
                                          <div class="col-lg-10">
                                              <input class="form-control "  value="<?php echo  $u_name;?>" id="username" name="u_name" type="text" />
                                          </div>
                                      </div>
                                   
                                    <div class="form-group ">
                                          <label for="address" class="control-label col-lg-2">Number <span class="required">*</span></label>
                                          <div class="col-lg-10">
                                              <input class=" form-control" id="address" value="<?php echo  $u_mobile_no;?>" name="u_mobile_no" type="text" />
                                          </div>
                                      </div>
                                  

                                      <div class="form-group">
                                        <label class="control-label col-lg-2"> Image <span class="required">*</span></label>
                                          <div class="col-lg-10">
                                          <input class="form-control browse_img" type="file" id="btn" style="visibility: hidden;"  name="u_photo" >

                                          </div>
                                      </div>

                                       <div class="form-group ">
                                          <label  class="control-label col-lg-2">Gender<span class="required">*</span></label>
                                          <div class="col-lg-10">
                                              <label class="radio-inline"><input type="radio" name="u_gender" value="male" <?php if($u_gender=="male") {echo 'checked';} ?>/>male</label>

                                              <label class="radio-inline"><input type="radio" name="u_gender" value="female" <?php if($u_gender=="female") {echo 'checked';} ?>/>female</label>
                                          </div>
                                      </div>


                             <button type="submit" name="editpro" class="btn btn-success text-center">Update</button>
                                  </center>

                                  </form>

                                  </div>
                                  </div>
                                  </div>
 
</div>                          
                          </div>
                          
                    
                  </div>-->
               
 

              <?php
                include './footer.php';
            ?>
            <!-- Footer Area End Here -->
        </div>
        <!-- Preloader Start Here -->
        <div id="preloader"></div>
        <!-- Preloader End Here -->
                 <!--editor -->
        <script type="text/javascript" src="ckeditor/ckeditor.js"></script>

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

<!-- Mirrored from www.radiustheme.com/demo/html/academics/academics/single-lecturers.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 31 Jan 2017 17:52:29 GMT -->
</html>

