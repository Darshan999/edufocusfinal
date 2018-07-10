
<?php

$sub_id=$_SESSION["sub_id"];
 
?>
        <div class="sidebar-box">
            <div class="sidebar-box-inner">

    
                     <?php
                        
                        

                        if(isset($_POST["joingrp"]))
                        {

                        if(!empty($_SESSION["u_email_id"]))
                        {
                             $u_email_id=$_SESSION["u_email_id"];
                         //echo $u_email_id;
                        // echo $sub_id;
                             //include 'database.php';
                            $obj3=new database();
                            $res3=$obj3->grpmember($u_email_id,$sub_id);
                            $cnt=mysql_num_rows($res3);

                            if($cnt!=1)
                            {

                           
                           
                            $date=date('d-m-Y');
                
                           $obj=new database();
                          // if($u_email_id!=$fk_u_email_id and $sub_id!=$fk_sub_id)
                          // {
                                //$_SESSION['grp_member']=$u_email_id;
                             $res=$obj->joingrp($date,$sub_id,$u_email_id);
                           //  $cnt2=mysql_num_rows($res);
                             if($res==1)
                             {
                                echo "<script type='text/javascript'>alert('SuccessFull Joined');</script>"; 
                             }
                             else
                             {
                                echo "<script type='text/javascript'>alert('Error in Join Group');</script>"; 
                             }
                             


                           }
                           else
                           {
                                echo "<script type='text/javascript'>alert('Already Joined');</script>";
                           }


                        }

                        else
                        {
                            echo "<script type='text/javascript'>alert('Plz Login');</script>";

                        }
                                       
                       }

                     ?>
                    <form method="post" action="#">
                                <div class="form-group margin-bottom-none">
                               <button type="submit" name="joingrp" class="view-all-accent-btn joingrp_btn">Join Group</button>
                            </div>
                    </form>
                           
                    <?php


                        $obj1=new database();
                        $res1=$obj1->usersubjoin($sub_id);
                        while($row1=mysql_fetch_assoc($res1))
                        {
                            //echo $fk_u_email_id;

                            if($row1["u_type"]=="expert")
                            {
                                
                            
                                $exp_name=$row1["u_name"];

                                $exp_img=$row1["u_photo"];
                               // $char="../";
                             //  $exp_img=ltrim($exp_img,$char);
                              // echo $exp_img;
                                 echo     '<h3 class="sidebar-title">'.$row1["sub_name"].'</h3>
                                 

                                         <div class="media">
                                            <a href="exp_profile.php?u_email_id='.$row1["u_email_id"].'" class="pull-left">
                                                <img  src="'.$exp_img.'" class="media-object exp_img" >
                                            </a>
                                            <div class="media-body">
                                                <h3 class="exp_name"><a href="exp_profile.php?u_email_id='.$row1["u_email_id"].'">'.$exp_name.'</a></h3>
                                            </div> 
                                          </div>
                                          <br/>';
                                


                        }
                    
                            
                           
                        }

                         $obj2=new database();
                        $res2=$obj2->usergrpsubjoin($sub_id);
                        while($row2=mysql_fetch_assoc($res2))
                        {
                              if($sub_id==$row2["fk_sub_id"])
                            {
                            
                                 if($row2["u_type"]=="student")
                                {
                                $stu_name=$row2["u_name"];
                                echo '<ul class="sidebar-categories">
                                            <li><a href="#">'.$stu_name.'</a> </li>
                                        </ul>
                                         <br/>
                                ';
                                
                                }
                            }
                            }
                    

                            
                                        

                             
                                  
                         
                        
                        ?> 
                      </div>
                                </div>           
                               
                            