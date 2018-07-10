<?php

    session_start();

?>
 <?php
 
            $password=$_POST["txtpass"];
            $email=$_POST["txtemail"];
            require 'database.php';
            $obj=new database();
            $res=$obj->login($email,$password);
            $cnt=mysql_num_rows($res);
           // echo $email;
           // echo $password;
            if($cnt==1)
            {

            while($row=mysql_fetch_array($res))
            {
                $u_email_id=$row["u_email_id"];
                $_SESSION["u_email_id"]=$u_email_id;
            	  if($row['u_type']=="admin")
                    {
                        //$_SESSION["u_email_id"]=$email;
                        //$_SESSION["u_email_id"]=$email1;

                    header('location:admin/index.php');
                       //     echo "admin ayo";
                    }
                    else
                    {
                        // $_SESSION["u_email_id"]=$email1;
                    header('location:mainpage.php');
                        //echo "userr ayo";
                    }
               
            }

            }
            else
            {
                echo '<script langauge="javascript">;
                                    alert("Invalid Username Or Password");
                                    window.location.href="index4.php";
                                    </script>';
             
            }
            
    
 ?>
