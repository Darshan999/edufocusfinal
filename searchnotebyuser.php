<?php

    session_start();
    $sub_id=$_SESSION["sub_id"];
     $u_email_id1=$_SESSION["email"];
?>
<!doctype html>
<html class="no-js" lang="">
    
<!-- Mirrored from www.radiustheme.com/demo/html/academics/academics/shop1.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 31 Jan 2017 17:52:29 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
<head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>EduFocus | Notes</title>
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
                        <h2>All Notes</h2>
                        <ul>
                            <li><a href="#">Home</a> -</li>
                            <li>Notes</li>
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
                                        
                                        <select  id="ddl" class="form-control m-bot15 dropdown search_dropdown22" onChange="window.location='searchnotebyuser.php?notes='+this.value">
                                        <option>Choose Notes From Selected User</option>

                                        <?php

                                       // $u_email_id=$_GET['u_email_id'];
                                        // $sub_id=$_REQUEST["sub_id"];
                                        // $_SESSION["sub_id"]=$sub_id;
                                  //       $sub_id=$_SESSION["sub_id"];
                                         //include 'database.php';
                                         $obj=new database();
                                         $res=$obj->searchusernotes($sub_id,$u_email_id1);

                                         

                                         while($row=mysql_fetch_assoc($res))
                                         {

                                            $selected='';
                                            if(isset($_GET['notes']) && $_GET['notes'] == $row["notes_title"]) { 
                                                $selected='selected';
                                            }

                                            if($row["type"]=="pdf" || $row["type"]=="ppt")
                                            { 
                                         
                                              echo '<option '.$selected.'>'.$row["notes_title"].'</option>';
                                            }

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
                                        
                                        <select class="form-control m-bot15 dropdown" onChange="window.location='searchnotes.php?u_email_id='+this.value">
                                        <option>Select User</option>

                                        <?php

                                        // $sub_id=$_REQUEST["sub_id"];
                                        // $_SESSION["sub_id"]=$sub_id;
                                  //       $sub_id=$_SESSION["sub_id"];
                                         //include 'database.php';
                                         $obj=new database();
                                         $res=$obj->searchnotesUser($sub_id);

                                         

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
             <div class="courses-page-area2 notes_margin">
                <div class="container" id="inner-isotope">
                <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">

                <?php
                        include 'innerheader.php';
                    ?>
                    </div>
                    </div>
            <!-- Shop Page 1 Area Start Here -->
            <div class="shop-page1-area">
                <div class="container">
                    <div class="row blog_margin">   
                        <div class="col-lg-9 col-md-9 col-sm-8 col-xs-12 ">
                            <div class="row">
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                    <div class="courses-page-top-area">
                                        <div class="courses-page-top-left">
                                            <p>Showing 13-24 of 50 results</p>
                                        </div>
                                        <div class="courses-page-top-right">
                                             <ul>
                                                <li class="active"><a href="#gried-view" data-toggle="tab" aria-expanded="false"><i class="fa fa-th-large"></i></a></li>    
                                                <li><a href="#list-view" data-toggle="tab" aria-expanded="true"><i class="fa fa-list"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row"> 
                                <!-- Tab panes -->
                                <div class="tab-content">
                                    <div role="tabpanel" class="tab-pane active shop-page1-xs-width" id="gried-view">


                                    <?php //search mate

                                      //  $u_email_id=$_REQUEST["u_email_id"];
                                        $notes_title=$_REQUEST["notes"];

                                       // $searchtitle=$_POST["txttitle"];
                                        $obj=new database();
                                        $res=$obj->searchnotesbyuser($notes_title,$sub_id,$u_email_id1);

                                        $cnt1=mysql_num_rows($res);
                                        if($cnt1>=1)
                                        {

                                        while($row=mysql_fetch_assoc($res))
                                        {
                                           
                                           // $notes_ext=substr(, )
                                            $notes=$row["notes"];
                                            $type=$row["type"];
                                           // $filename_from_url = parse_url($notes);
                                           // $ext = pathinfo($filename_from_url['path'], PATHINFO_EXTENSION);

                                            if($type=="pdf" || $type=="PDF")
                                            {
                                                 $notes_img='img/notes/1.png';
                                            }
                                            else if($type=="ppt" || $type=="PPT")
                                            {
                                                 $notes_img='img/notes/2.png';
                                            }
                                            if($type=="pdf" || $type=="ppt" || $type=="PDF" || $type=="PPT")
                                            {
                                            
                                            echo ' 
                                            <form method="post">
                                            <div class="col-lg-4 col-md-6 col-sm-6 col-xs-6">

                                            <div class="product-box1">
                                                <ul class="product-social">
        
                                                    <li><a href='.$notes.' name="check"><i class="fa fa-eye" aria-hidden="true"></i></a></li>
                                                </ul>
                                                <div class="product-img-holder">
                                                    <a href="#"><img class="img-responsive" src='.$notes_img.' alt="product"></a>
                                                </div>
                                                <div class="product-content-holder">
                                                    <h3><a href="#">'.$row["notes_title"].'</a></h3>
                                                    
                                                </div>
                                            </div>                                            
                                            </div>
                                            </form>';
                                            }
                                    
                                        } //end while

                                        }

                                        else
                                        {
                                            echo "no record found";
                                        }
                               

                                    // end search

                

                                    ?> <!--search mate end-->

                                     
                                    </div>
                                    <!-- Listed product show -->

                                    <div role="tabpanel" class="tab-pane" id="list-view">                                       

                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                            <div class="product-box2">
                                                <div class="media">
                                                    <a class="pull-left" href="#">
                                                        <img class="img-responsive" src="img/product/3.jpg" alt="product"/>
                                                    </a>
                                                    <div class="media-body">
                                                        <div class="product-box2-content">
                                                            <h3><a href="#">Money Book - Finance</a></h3>
                                                            <span>$260.00</span>
                                                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                                                        </div> 
                                                        <ul class="product-box2-cart">
                                                            <li><a href="#">Add To Cart</a></li>
                                                            <li><a href="#"><i class="fa fa-heart-o" aria-hidden="true"></i></a></li>
                                                            <li><a href="#" data-toggle="modal" data-target="#myModal"><i class="fa fa-eye" aria-hidden="true"></i></a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                            
                                         
                                        </div>
                                    </div>
                                </div>
                            </div>
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
                                                    
                                                     <a href="insertnote.php?sub_id='.$sub_id.'" name="insnote" class="sidebar-search-btn-full disabled default-big-btn">Add Notes</a>
                                                </div>
                                                
                                            </form>
                                        </div>
                                    
                                </div>';
                       
                       ?>     
                        

                    <?php
                    include 'sidebar.php';
                    ?>
                       
                       </div>
                </div>                     
                    </div>
                </div>
            </div>
            </div>
            </div>
            <!-- Shop Page 1 Area End Here -->
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

        <!-- Select2 Js -->
        <script src="js/select2.min.js" type="text/javascript"></script>

        <!-- Nouislider Js -->
        <script src="vendor/noUiSlider/nouislider.min.js" type="text/javascript"></script>

        <!-- Magic Popup js -->
        <script src="js/jquery.magnific-popup.min.js" type="text/javascript"></script>
        
        <!-- wNumb Js -->
        <script src="js/wNumb.js" type="text/javascript"></script>

        <!-- Custom Js -->
        <script src="js/main.js" type="text/javascript"></script>

    </body>

<!-- Mirrored from www.radiustheme.com/demo/html/academics/academics/shop1.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 31 Jan 2017 17:52:35 GMT -->
</html>
