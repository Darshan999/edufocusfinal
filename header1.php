<?php

       // session_start();
        $u_email_id=$_SESSION["u_email_id"];
?>
 <!DOCTYPE html>
      <html>
      <head>

<link rel="stylesheet" type="text/css" href="css/EduFocus.css">

      </head>
      <body>
      
     
     
<header>  
<!-- aa final thai gayu -->              
                <div id="header2" class="header2-area">
                    <div class="header-top-area header1">
                    
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                    
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                    <div class="header-top-right">
                                        <ul>
                                          
                                          <nav>
                                        <ul>
                                            <li>
                                            <?php
                                            require 'database.php';    
                                            $obj1=new database();
                                            $res1=$obj1->peruserdisplay($u_email_id);
                                            while($row1=mysql_fetch_assoc($res1))
                                            {
                                                $u_photo=$row1["u_photo"];
                                                $type=$row1["u_type"];
                                            }

                                         echo '<a href="#" class="pull-left profile_img">
                                        <img src="'.$u_photo.'" class="media-object" style="border-radius: 32px;height: 49px; width: 52px ;">
            
                                            </a>';


                                            ?>
                                                  
                                          
                                            <ul>
                                                    <li><a href="myblog.php">My Post</a></li>
                                                    <?php
                                                    if($type=="expert")
                                                    {
                                                    echo '<li><a href="expert_viewprofile.php">My Profile</a></li>

                                                        <li><a href="exp_editprofile.php">Edit Profile</a></li>
                                                        ';
                                                     }
                                                     else
                                                     {
                                                        echo '<li><a href="student_viewprofile.php">My Profile</a></li>

                                                            <li><a href="student_editprofile.php">Edit Profile</a></li>

                                                        ';
                                                     }
                                                    ?>
                                                    
                                                     <li><a href="changepassword.php">Change Password</a></li>
                                                    <li><a href="index4.php?logout=1">Log Out</a></li>
                                                </ul> 
                                                </li>
                                            </nav>
                                          
                                           

                                        </ul>
                                    </div>
                                </div>
                      
                        </div>
                        </div>
                    </div>
                    <div class="main-menu-area bg-textPrimary" id="sticker">
                        <div class="container">
                            <div class="row">                         
                                <div class="col-lg-2 col-md-2 col-sm-3">
                                    <div class="logo-area">
                                        <a href="mainpage.php"><img class="img-responsive" src="img/logo-blue.png" alt="logo"></a>
                                    </div>
                                </div>  
                                <div class="col-lg-9 col-md-9 col-sm-9">
                                    <nav>
                                        <ul>
                                            
                                            <!--<li><a href="#">Courses</a>
                                                <ul>
                                                    <li><a href="courses1.html">Courses 1</a></li>        
                                                    <li><a href="courses2.html">Courses 2</a></li>        
                                                    <li><a href="courses3.html">Courses 3</a></li>
                                                    <li><a href="single-courses1.html">Course Details 1</a></li>
                                                    <li><a href="single-courses2.html">Course Details 2</a></li>
                                                    <li><a href="single-courses3.html">Course Details 3</a></li>
                                                </ul>   
                                            </li>-->
                                             <li><a href="mainpage.php">Home</a>
                                                
                                            </li>

                                            <li><a href="#">Courses</a>
                                                <ul>
                                                    <?php
                                                       // include './database.php';
                                                        $obj=new database();
                                                        $res=$obj->coursedisplay();

                                                        while($row=mysql_fetch_assoc($res))
                                                        {
                                                            echo '<li>';
                                                            echo '<a href="subjects.php?course_id='.$row["course_id"].'">'.$row["course_name"].'</a>';
                                                            echo '</li>';
                                                        }    ?>
                                                   
                                                </ul>   
                                            </li>
                                            <li><a href="news.php">News</a>
                                                
                                            </li>
                                             <li><a href="event.php">Events</a>
                                               
                                            </li>
                                             <li><a href="#">Alumni</a>
                                                <ul>
                                                    <li><a href="company.php">Company</a></li>     
                                                    
                                                </ul>
                                            </li> 
                                            <li><a href="contactus.php">Contact Us</a>
                                               
                                            </li>
                                            <li><a href="aboutus.php">About Us</a>
                                               
                                            </li>

                                        </ul>
                                    </nav>
                                </div>   
                                
                            </div>                          
                        </div> 
                    </div>
                </div>
                <!-- Mobile Menu Area Start -->
                <div class="mobile-menu-area">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="mobile-menu">
                                    <nav id="dropdown">
                                        <ul>
                                            <li><a href="#">Home</a>
                                                <ul>
                                                    <li><a href="index.html">Home 1</a></li>
                                                    <li><a href="index2.html">Home 2</a></li>
                                                    <li><a href="index3.html">Home 3</a></li>                                                       
                                                    <li><a href="index4.html">Home 4</a></li>                                                       
                                                </ul>   
                                            </li>
                                            <li><a href="#">Pages</a>
                                                <ul>
                                                    <li><a href="about1.html">About 1</a></li>
                                                    <li><a href="about2.html">About 2</a></li>
                                                    <li><a href="about3.html">About 3</a></li>
                                                    <li><a href="about4.html">About 4</a></li>
                                                    <li><a href="lecturers1.html">lecturers 1</a></li>
                                                    <li><a href="lecturers2.html">lecturers 2</a></li>
                                                    <li><a href="single-lecturers.html">lecturers Details</a></li>
                                                    <li><a href="pricing1.html">Pricing Plan 1</a></li>
                                                    <li><a href="pricing2.html">Pricing Plan 2</a></li>
                                                    <li><a href="shop1.html">Shop 1</a></li>
                                                    <li><a href="shop2.html">Shop 2</a></li>
                                                    <li><a href="single-shop.html">Shop Details</a></li>
                                                    <li><a href="faq.html">Faq</a></li>
                                                    <li><a href="404.html">404 Error</a></li>
                                                </ul>   
                                            </li>
                                            <li><a href="#">Courses</a>
                                                <ul>
                                                    <li><a href="courses1.html">Courses 1</a></li>        
                                                    <li><a href="courses2.html">Courses 2</a></li>        
                                                    <li><a href="courses3.html">Courses 3</a></li>
                                                    <li><a href="single-courses1.html">Course Details 1</a></li>
                                                    <li><a href="single-courses2.html">Course Details 2</a></li>
                                                    <li><a href="single-courses3.html">Course Details 3</a></li>
                                                </ul>   
                                            </li>



                                            <li><a href="#">Research</a>
                                                <ul>
                                                    <li><a href="research1.html">Research 1</a></li>     
                                                    <li><a href="research2.html">Research 2</a></li> 
                                                    <li><a href="research3.html">Research 3</a></li> 
                                                    <li><a href="single-research.html">Research Details</a></li> 
                                                </ul>
                                            </li>
                                            <li><a href="#">News</a>
                                                <ul>
                                                    <li class="has-child-menu"><a href="#">News</a>
                                                        <ul class="thired-level">
                                                            <li><a href="news1.html">News 1</a></li>
                                                            <li><a href="news2.html">News 2</a></li>
                                                            <li><a href="single-news.html">News Details</a></li>
                                                        </ul>
                                                    </li>     
                                                    <li class="has-child-menu"><a href="#">Event</a>
                                                        <ul class="thired-level">
                                                            <li><a href="event.html">Event</a></li>
                                                            <li><a href="single-event.html">Event Details</a></li>
                                                        </ul>
                                                    </li> 
                                                </ul>
                                            </li>
                                            <li><a href="#">Gallery</a>
                                                <ul>
                                                    <li><a href="gallery1.html">Gallery 1</a></li>     
                                                    <li><a href="gallery2.html">Gallery 2</a></li>
                                                </ul>                                           
                                            </li>
                                            <li><a href="#">Contact</a>
                                                <ul>
                                                    <li><a href="contact1.html">Contact 1</a></li>     
                                                    <li><a href="contact2.html">Contact 2</a></li>
                                                </ul>                                           
                                            </li>
                                        </ul>
                                    </nav>
                                </div>           
                            </div>
                        </div>
                    </div>
                </div>  
                <!-- Mobile Menu Area End -->
 </body>
      </html>