<?php

   session_start();
    $u_email_id=$_SESSION["u_email_id"];
?>
<header class="header dark-bg">
            <div class="toggle-nav">
                <div class="icon-reorder tooltips" data-original-title="Toggle Navigation" data-placement="bottom"><i class="icon_menu"></i></div>
            </div>

            <!--logo start-->
            <a href="index.php" class="logo">Edu<span class="lite">Focus</span></a>
            <!--logo end-->

            <div class="nav search-row" id="top_menu">
                <!--  search form start -->
               
                <!--  search form end -->                
            </div>

            <div class="top-nav notification-row">                
                <!-- notificatoin dropdown start-->
                <ul class="nav pull-right top-menu">
                    
                    <!-- task notificatoin start -->
                    <?php
                    //ini_set( "display_errors", 0); 
                        require 'database.php';
                      $obj=new database();
                    
                    $res=$obj->approveblog();
                    $cnt=mysql_num_rows($res);
                    echo'
                    <li id="task_notificatoin_bar" class="dropdown">
                        <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                            <i class="icon-task-l"></i>
                            <span class="badge bg-important">6</span>
                        </a>
                        <ul class="dropdown-menu extended tasks-bar">
                            <div class="notify-arrow notify-arrow-blue"></div>
                            <li>
                                <p class="blue">You have 6 pending Request</p>
                            </li>
                            <li>
                                <a href="notesapprove.php">
                                    <div class="task-info">
                                        <div class="desc">Notes 
                                        
                                        </div>
                                      
                                    </div>
                                 </a>
                                 
                            </li>
                            <li>
                                <a href="questionapprove.php">
                                    <div class="task-info">
                                   
                                        <div class="desc">
                                          Questions
                                         
                                        </div>
                                        </div>
                                    
                                </a>
                            </li>
                            
                            
                        </ul>
                    </li>';
                    ?>
                    <!-- task notificatoin end -->
                    <!-- inbox notificatoin start-->
                <?php
                    
                     $obj=new database();
                    $res=$obj->approveblog1();
                    $res1=$obj->approveblog();
                    $cnt=mysql_num_rows($res1);

                echo '
                    <li id="mail_notificatoin_bar" class="dropdown">
                        <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                            <i class="icon-envelope-l"></i>
                            <span class="badge bg-important">'.$cnt.'</span>
                        </a>
                        <ul class="dropdown-menu extended inbox">
                            <div class="notify-arrow notify-arrow-blue"></div>
                            <li>
                                <p class="blue">You have '.$cnt.' new messages</p>
                            </li>';
                            while($row=mysql_fetch_assoc($res))
                            {

                            echo'
                            <li>
                                <a href="#">
                                    <span class="photo"><img alt="avatar" src="../'.$row["blog_photo"].'"></span>
                                    <span class="subject">
                                    <span class="from">'.$row["blog_title"].'</span>
                                    <span class="time"></span>
                                    <span class="message"></span>
                                    </span>
                                    
                                </a>
                            </li>';
                        }
                        echo'
                            <li>
                                <a href="blogapprove.php">See all messages</a>
                            </li>
                        </ul>
                    </li>';
                ?>
                    <!-- inbox notificatoin end -->
                    <!-- alert notification start-->
                    <?php

                   
                    $obj=new database();
                    $res=$obj->approvestudent();
                    $cnt=mysql_num_rows($res);
                     echo '
                    <li id="alert_notificatoin_bar" class="dropdown">
                        <a data-toggle="dropdown" class="dropdown-toggle" href="#">

                            <i class="icon-bell-l"></i>
                            <span class="badge bg-important">'.$cnt.'</span>
                        </a>
                        <ul class="dropdown-menu extended notification">
                            <div class="notify-arrow notify-arrow-blue"></div>
                            <li>
                                <p class="blue">You have '.$cnt.' new notifications</p>
                            </li>';
                            
                   $cnt1=0;
                    while($row=mysql_fetch_assoc($res))
                    {
                        if($cnt1<2)
                     {
                       // $time=date("i");
                        $u_name=$row["u_name"];
                        echo '<li>
                                <a href="studentapprove.php">
                                    <img src="../'.$row["u_photo"].'" height="40px" width="40px">&nbsp;
                                    <span class="label label-primary"></span> 
                                    '.$u_name.'
                                  
                                </a>
                            </li>';
                    }
                    $cnt1++;
                }

                   
                         echo ' 
                            <li>
                                <a href="studentapprove.php">See all notifications</a>
                            </li>
                        </ul>
                    </li>';

                    ?>
                    <!-- alert notification end-->
                    <!-- user login dropdown start-->
                    <li class="dropdown">
                    <?php 
                       
                       $obj=new database();
                       $res=$obj->peruserdisplay($u_email_id);
                       while($row=mysql_fetch_assoc($res))
                       {
                            $u_name=$row["u_name"];
                            $u_photo="../".$row["u_photo"];
                       }
 
                       echo  '<a data-toggle="dropdown" class="dropdown-toggle" href="#">
                            <span class="profile-ava">
                                <img alt="" src="'.$u_photo.'" height="40px" width="40px">
                            </span>
                            <span class="username">'.$u_name.'</span>
                            <b class="caret"></b>
                        </a>';
                    ?>
                        <ul class="dropdown-menu extended logout">
                            <div class="log-arrow-up"></div>
                            <li class="eborder-top">
                                <a href="myprofile.php"><i class="icon_profile"></i> My Profile</a>
                            </li>
                            <li>
                                <a href="../index4.php?logout=1"><i class="icon_key_alt"></i> Log Out</a>
                            </li>
                           </ul>
                    </li>
                    <!-- user login dropdown end -->
                </ul>
                <!-- notificatoin dropdown end-->
            </div>
      </header>      