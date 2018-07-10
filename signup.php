<?php

    if(isset($_POST["txtsign"]))
    {

              $u_email_id=$_POST["u_email_id"];
              $u_name=$_POST["u_name"];    
              $u_password=$_POST["txtpass"];   
              $u_cpassword=$_POST["txtpass1"];      
              //$u_photo=$_POST["u_photo"];         
              $u_mobile_no=$_POST["u_mobile_no"];         
              $u_gender=$_POST["u_gender"];                  
              $u_active='inactive';
              $u_status='on';
              $u_type='student';
              $u_qualification='null';
              $u_desc='null';

          
     if($_FILES["txt_photo"]["name"]=="")
      {

                          $target_file="";
      }
      else if($_FILES["txt_photo"]["name"]!="")
      {
    $target_dir = "img/user/";
    $target_file = $target_dir . basename($_FILES["txt_photo"]["name"]);
    move_uploaded_file($_FILES["txt_photo"]["tmp_name"], $target_file);
      //echo "The file ". basename( $_FILES["txt_photo"]["name"]). " has been uploaded.";
      }

    
          if($u_password==$u_cpassword)
          {
        include 'database.php';
        $res=new  database();
        $res->insertuser($u_email_id,$u_name,$u_password,$target_file,$u_mobile_no,$u_gender,$u_qualification,$u_desc,$u_active,$u_status,$u_type);
        
       header('location:index4.php');
          }   
         

        else
        {
            
      echo '<script language="javascript">;
                    alert("Your Password And Confirm Password Not Match");
                    window.location.href="index4.php";
                    </script>';
        }



    
 }   
    
?>


