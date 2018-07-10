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

    </head>
    <body>
        <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->

        <!-- Add your site or application content here -->
        <div id="wrapper">
            <!-- Header Area Start Here -->
            <?
                    include'./header1.php';
              

            ?>
            <!-- Header Area End Here -->
            <!-- Inner Page Banner Area Start Here -->
            <div class="inner-page-banner-area" style="background-image: url('img/banner/5.jpg');">
                <div class="container">
                    <div class="pagination-area">
                        <h2>Blogs</h2>
                        <ul>
                            <li><a href="index4.php">Home</a> - </li>
                            <li>Insert Blogs</li>
                        </ul>
                    </div>
                </div>  
            </div>  

           <!--   Data from database    -->
            <?php
             $company_id=$_REQUEST["company_id"];
             require 'database.php';
             
       
        $obj=new database();
        $res=$obj->mycompanyedit($company_id);
        while($row=mysql_fetch_assoc($res))
        {

        
                    $company_name=$row["company_name"];
                    $company_title=$row["company_title"];
                    $company_logo=$row["company_logo"];
                  $company_desc=$row["company_desc"];
                  $company_web_name=$row["company_web_name"];
                  //  echo $photo;
        }

           
           
     ?>


       <!--  edit blog  -->
             <?php
           
            $company_id=$_REQUEST["company_id"];
           
            if(isset($_POST["edit"]))
            {

            $company_name=$_POST["companyname"];    
           $company_title=$_POST["companytitle"];
           $company_desc=$_POST["companydesc"];
           $company_web_name=$_POST["companyweb"];
           
                         if($_FILES["photo"]["name"]=="")
                        {

                          $photo=$company_logo;
                        }
                        else if($_FILES["photo"]["name"]!="")
                            {
                                unlink($company_logo);
                                $photo="img/company/".basename($_FILES["photo"]["name"]);

                                move_uploaded_file($_FILES["photo"]["tmp_name"],$photo);
                                
                            }   

            $obj1=new database();
            $res1=$obj1-> mycompanydetail_update($company_id,$company_name,$photo,$company_title,$company_desc,$company_web_name);

            echo '<script langauge="javascript">;
                alert("Company Details updated sucessfully");
                window.location.href="mycompany.php";
                </script>';
            }
        ?>
    
                    <div class="faq-page-area insertdata" >
                <div class="container">
                    <div class="row panel-group blog_margin" id="faq-accordian">
                        
                     <div class="col-lg-9 col-md-9 col-sm-8 col-xs-12 ">
                  <form action=""  enctype="multipart/form-data" method="post">
                                         
                      
                           
                           <div class="leave-comments">
                                        <h3 class="sidebar-title">Edit Company Details</h3>
                                        <div class="row">
                                            <div class="contact-form"> 
                                                <form method="post">
                                                    <fieldset>
                                                        <div class="col-sm-12">
                                                            <div class="form-group">
                                                                <input type="text" name="companyname" placeholder="Company Name" class="form-control" value="<?php echo $company_name; ?>" required>
                                                                <div class="help-block with-errors"></div>
                                                            </div>
                                                        </div>

                                                        <div class="col-sm-12">
                                                         <div class="news-img-holder">
                                                     <img src="<?php echo $company_logo ; ?>" style="height: 100px; width: 100px;" class="img-responsive blog_img" alt="research" >
                                                     </div>
                                                     </div>
         
                                                        <div class="col-sm-12">
                                                            <div class="form-group ">
                                                                <input type="file" name="photo"  class="form-control " >
                                                                <div class="help-block with-errors"></div>
                                                            </div>
                                                        </div>



                                                         <div class="col-sm-12">
                                                            <div class="form-group">
                                                                <input type="text" name="companytitle" placeholder="Company Title" value="<?php echo $company_title?>" class="form-control" required>
                                                                <div class="help-block with-errors"></div>
                                                            </div>
                                                        </div>
                                                        <div class="col-sm-12">
                                                            <div class="form-group">
                                                                <textarea class="form-control ckeditor" name="companydesc" rows="6" placeholder="Company Description" ><?php echo $company_desc ?></textarea>
                                                                <div class="help-block with-errors"></div>
                                                            </div>
                                                        </div>
                                                        <div class="col-sm-12">
                                                            <div class="form-group">
                                                                <input type="text" name="companyweb" placeholder="Company Website Path" value="<?php echo $company_web_name; ?>" class="form-control" required>
                                                                <div class="help-block with-errors"></div>
                                                            </div>
                                                        </div>
                                                        <div class="col-sm-12">
                                                            <div class="form-group margin-bottom-none">
                                                                <button type="submit" name="edit" class="view-all-accent-btn">Update</button>
                                                            </div>
                                                        </div>
                                                    </fieldset>
                                                </form>
                                            </div>
                                        </div>
                                    </div>         </form>
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
