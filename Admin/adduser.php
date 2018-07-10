
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Creative - Bootstrap 3 Responsive Admin Template">
    <meta name="author" content="GeeksLabs">
    <meta name="keyword" content="Creative, Dashboard, Admin, Template, Theme, Bootstrap, Responsive, Retina, Minimal">
    <link rel="shortcut icon" href="img/favicon.png">

    <title>Insert Student </title>

    <!-- Bootstrap CSS -->    
    <link href="css/bootstrap.min.css" rel="stylesheet">
    
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    <!-- bootstrap theme -->
    <link href="css/bootstrap-theme.css" rel="stylesheet">
    <!--external css-->
    <!-- font icon -->
    <link href="css/elegant-icons-style.css" rel="stylesheet" />
    <link href="css/font-awesome.min.css" rel="stylesheet" />    
    <!-- full calendar css-->
    <link href="assets/fullcalendar/fullcalendar/bootstrap-fullcalendar.css" rel="stylesheet" />
	<link href="assets/fullcalendar/fullcalendar/fullcalendar.css" rel="stylesheet" />
    <!-- easy pie chart-->
    <link href="assets/jquery-easy-pie-chart/jquery.easy-pie-chart.css" rel="stylesheet" type="text/css" media="screen"/>
    <!-- owl carousel -->
    <link rel="stylesheet" href="css/owl.carousel.css" type="text/css">
	<link href="css/jquery-jvectormap-1.2.2.css" rel="stylesheet">
    <!-- Custom styles -->
	<link rel="stylesheet" href="css/fullcalendar.css">
	<link href="css/widgets.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <link href="css/style-responsive.css" rel="stylesheet" />
	<link href="css/xcharts.min.css" rel=" stylesheet">	
	<link href="css/jquery-ui-1.10.4.min.css" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="css/EduFocus.css">


  <link href="pagination/demo/Content/bootstrap.min.css" rel="stylesheet">
    <link href="pagination/demo/css/jquery.dataTables_themeroller.css" rel="stylesheet">

 
     <script type="text/javascript">
    function del()
    {
      return confirm("Are you sure you wanna delete this post?");
    }
    </script>

    <!--validation -->
<script language="JavaScript">
<!--
function email_validate(u_email_id)
{

var regMail = /^([_a-zA-Z0-9-]+)(\.[_a-zA-Z0-9-]+)*@([a-zA-Z0-9-]+\.)+([a-zA-Z]{2,3})$/;

if(regMail.test(u_email_id) == false)
{

//document.getElementById("status").innerHTML = "Email address is not valid yet.";
alert("Email address is not valid yet.");
}
else
{

//document.getElementById("status").innerHTML = "You have entered a valid Email address!";
//alert(" valid");
}
}
-->
</script>

<script type="text/javascript">
$(document).ready(function(){
$("#test4").keyup(function() {
    var val = $("#test4").val();
    if (parseInt(val) < 0 || isNaN(val)) {
        alert("Please Enter Only Numeric Values");
        $("#test4").val("");
        $("#test4").focus();
    }
});
});
</script>

<script type="text/javascript">
  
  function allLetter(u_name)
{
  var letters=/^[A-Za-z]+$/;
  if(u_name.value.match(letters))
  {
      return true;
  }
  else
  {
      
      u_name.value="";
      u_name.focus();
      alert(' Name must have Alphabetic characters only');
      return false;
  }
}

</script>

<script type="text/javascript">
  
  function allNumeric(u_mobile_no)
{
  var letters=/^[0-9-+]+$/;
  if(u_mobile_no.value.match(letters))
  {
      return true;
  }

  else
  {
      
      u_mobile_no.value="";
      u_mobile_no.focus();
      alert(' Mobile Number must have Numerics only');
      return false;
  }

}

</script>


<script type="text/javascript">
function validation()
{
var a = document.form.pass.value;
if(a=="")
{
alert("Please Enter Your Password");
document.form.pass.focus();
return false;
}
if ((a.length < 4) || (a.length > 8))
{
alert("Your Password must be 4 to 8 Character");
document.form.pass.select();
return false;
}
}
</script>

<script>
function passid_validation(passid,mx,my)
{
  mx=5;
  my=12;
  var pl=passid.value.length;
  if(pl==0 || pl>my || pl<mx)
  {
    alert("Password should be of 5-12 digits only ");
    passid.value="";
    passid.focus();
    return false;
  }
  return true;
}
</script>

<script>
function passid_validation1(passid,mx,my)
{
  mx=5;
  my=12;
  var pl=passid.value.length;
  if(pl==0 || pl>my || pl<mx)
  {
    alert("Password should be of 5-12 digits only ");
    passid.value="";
    passid.focus();
    return false;
  }
  return true;
}
</script>


<!--validation -->

   
    <!-- =======================================================
        Theme Name: NiceAdmin
        Theme URL: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/
        Author: BootstrapMade
        Author URL: https://bootstrapmade.com
    ======================================================= -->
  </head>

  <body class="backcolor">
  <!-- container section start -->
  <section id="container" class="">
     
      
      
      <!--header end -->
      <?php

        include'./header.php';
      ?>

       <?php

    $u_email_id=$_SESSION["u_email_id"];
  //  include 'database.php';
    $obj2=new database();
    $res2=$obj2->userdetail($u_email_id);
    while($row=mysql_fetch_assoc($res2))
    {
      $u_type=$row["u_type"];
    }

   // echo $u_email_id;

    if(!empty($_SESSION["u_email_id"]))
    {
      if($u_type!='admin')
      {
      // echo "<script type='text/javascript'>alert('You can`t access ');</script>";
       header('location:../mainpage.php');
      }
    }
    else
    {
      
     // echo "<script type='text/javascript'>alert('You can`t access ');</script>";
       header('location:../index4.php');
     
    }

    ?>

      <!--sidebar start-->
      <?php
        include'./sidebar.php';
      ?>
      <section id="main-content">
          <section class="wrapper">

  <div class="container-fluid">
    <div class="row">

    <center><h1 class="text">Add User</h1></center>
    <div class="panel-body">
   
    </div>
  
   <?php
           
           
           
            if(isset($_POST["useradd"]))
            {

              $u_email_id=$_POST["u_email_id"];
              $u_name=$_POST["u_name"];    
              $u_password=$_POST["txtpass"];   
             // $u_cpassword=$_POST["txtpass1"];      
              //$u_photo=$_POST["u_photo"];         
              $u_mobile_no=$_POST["u_mobile_no"];         
              $u_gender=$_POST["u_gender"];                  
              $u_status='on';         
              $u_type=$_POST["u_type"];
              $u_qualification='null';
              $u_desc='null';

              if($u_type=='admin')
              {
                $u_active='active';
              }             
              else if($u_type=='student') 
              {
                $u_active='active';
              }

              if($_FILES["txt_photo"]["name"]=="")
               {

                          $target_file="";
              }
              else if($_FILES["txt_photo"]["name"]!="")
              {
              $target_dir = "../img/user/";
              $target_file = $target_dir . basename($_FILES["txt_photo"]["name"]);
              move_uploaded_file($_FILES["txt_photo"]["tmp_name"], $target_file);
              $target_file="img/user/". basename($_FILES["txt_photo"]["name"]);
             // echo "The file ". basename( $_FILES["txt_photo"]["name"]). " has been uploaded.";
            }

           // require 'database.php';

    
            $obj1=new database();
            $res1=$obj1->insertuser($u_email_id,$u_name,$u_password,$target_file,$u_mobile_no,$u_gender,$u_qualification,$u_desc,$u_active,$u_status,$u_type);

                   echo '<script langauge="javascript">;
                                    alert("Added sucessfully");
                                    window.location.href="student.php";
                                    </script>';

    
            }
            

        ?>

        
      
              <div class="row">
                  <div class="col-lg-12">
                      <section class="panel">
                          <header class="panel-heading">
                             
                          </header>
                          <div class="panel-body">
                              <div class="form">
                                  <form class="form-validate form-horizontal " id="register_form" method="post" action="" enctype="multipart/form-data">
                                     
                                      <div class="form-group ">
                                          <label for="email" class="control-label col-lg-2">Email <span class="required">*</span></label>
                                          <div class="col-lg-10">
                                              <input class="form-control " id="email" name="u_email_id" type="text" onblur="email_validate(this.value);" placeholder="Enter Email_Id " required="" />
                                          </div>
                                      </div>
                                      <div class="form-group ">
                                          <label for="username" class="control-label col-lg-2">Username <span class="required">*</span></label>
                                          <div class="col-lg-10">
                                              <input class="form-control " id="username" name="u_name" type="text" placeholder="Enter Name " onblur="return allLetter(u_name);" required="" />
                                          </div>
                                      </div>
                                      <div class="form-group ">
                                          <label for="password" class="control-label col-lg-2">Password <span class="required">*</span></label>
                                          <div class="col-lg-10">
                                              <input class="form-control " id="password"  type="password" name="txtpass" onblur="return passid_validation(txtpass);" placeholder="Enter Password"  required="" />
                                          </div>
                                      </div>
                                       <div class="form-group ">
                                          <label for="address" class="control-label col-lg-2">Mobile Number<span class="required">*</span></label>
                                          <div class="col-lg-10">
                                              <input class=" form-control" id="address" name="u_mobile_no" type="text" placeholder="Enter Mobile Number" onblur="return allNumeric(u_mobile_no);"required="" />
                                          </div>
                                      </div>

                                      <div class="form-group">
                                        <label class="control-label col-lg-2">Upload Image <span class="required">*</span></label>
                                          <div class="col-lg-10">
                                          <input class="form-control browse_img" type="file" name="txt_photo" required="">

                                          </div>
                                      </div>

                                       <div class="form-group ">
                                          <label for="address" class="control-label col-lg-2">Gender <span class="required">*</span></label>
                                          <div class="col-lg-10">
                                              <label class="radio-inline"><input type="radio" name="u_gender" checked value="male"/>Male</label>

                                              <label class="radio-inline"><input type="radio" name="u_gender" value="female"/>Female</label>
                                          </div>
                                      </div>

                                      <div class="form-group">
                                       <label for="address" class="control-label col-lg-2">User Type <span class="required">*</span></label>
                                      <div class="col-lg-10">
                                          <select class="form-control m-bot15" name="u_type">

                                      
                                              <option >admin</option>
                                              <option >student</option>

                                          </select>
                                          </div>

                                        
                                      
                                  </div>

                                      
                                      <div class="form-group">
                                        
                                              <center><button class="btn btn-primary text-center" type="submit" name="useradd">Add User</button>
                                              
                                      </div>

                                  </form>
                              </div>
                          </div>
                      </section>
                  </div>
              </div>

    </div>
  </div>

              </section>
              </section>

</section>
</body>
  <!-- container section start -->

    <!-- javascripts -->
    <script src="js/jquery.js"></script>
  <script src="js/jquery-ui-1.10.4.min.js"></script>
    <script src="js/jquery-1.8.3.min.js"></script>
    <script type="text/javascript" src="js/jquery-ui-1.9.2.custom.min.js"></script>
    <!-- bootstrap -->
    <script src="js/bootstrap.min.js"></script>
    <!-- nice scroll -->
    <script src="js/jquery.scrollTo.min.js"></script>
    <script src="js/jquery.nicescroll.js" type="text/javascript"></script>
    <!-- charts scripts -->
    <script src="assets/jquery-knob/js/jquery.knob.js"></script>
    <script src="js/jquery.sparkline.js" type="text/javascript"></script>
    <script src="assets/jquery-easy-pie-chart/jquery.easy-pie-chart.js"></script>
    <script src="js/owl.carousel.js" ></script>
    <!-- jQuery full calendar -->
    <<script src="js/fullcalendar.min.js"></script> <!-- Full Google Calendar - Calendar -->
  <script src="assets/fullcalendar/fullcalendar/fullcalendar.js"></script>
    <!--script for this page only-->
    <script src="js/calendar-custom.js"></script>
  <script src="js/jquery.rateit.min.js"></script>
    <!-- custom select -->
    <script src="js/jquery.customSelect.min.js" ></script>
  <script src="assets/chart-master/Chart.js"></script>
   
    <!--custome script for all page-->
    <script src="js/scripts.js"></script>
    <!-- custom script for this page-->
    <script src="js/sparkline-chart.js"></script>
    <script src="js/easy-pie-chart.js"></script>
  <script src="js/jquery-jvectormap-1.2.2.min.js"></script>
  <script src="js/jquery-jvectormap-world-mill-en.js"></script>
  <script src="js/xcharts.min.js"></script>
  <script src="js/jquery.autosize.min.js"></script>
  <script src="js/jquery.placeholder.min.js"></script>
  <script src="js/gdp-data.js"></script>  
  <script src="js/morris.min.js"></script>
  <script src="js/sparklines.js"></script>  
  <script src="js/charts.js"></script>
  <script src="js/jquery.slimscroll.min.js"></script>
 
  <script src="pagination/demo/Scripts/bootstrap.min.js"></script>
  <script src='pagination/demo/js/jquery.dataTables.min.js'></script>
  <script>

      //knob
      $(function() {
        $(".knob").knob({
          'draw' : function () { 
            $(this.i).val(this.cv + '%')
          }
        })
      });

      //carousel
      $(document).ready(function() {
          $("#owl-slider").owlCarousel({
              navigation : true,
              slideSpeed : 300,
              paginationSpeed : 400,
              singleItem : true

          });
      });

      //custom select box

      $(function(){
          $('select.styled').customSelect();
      });
    
    /* ---------- Map ---------- */
  $(function(){
    $('#map').vectorMap({
      map: 'world_mill_en',
      series: {
        regions: [{
          values: gdpData,
          scale: ['#000', '#000'],
          normalizeFunction: 'polynomial'
        }]
      },
    backgroundColor: '#eef3f7',
      onLabelShow: function(e, el, code){
        el.html(el.html()+' (GDP - '+gdpData[code]+')');
      }
    });
  });

  
       $(function () {

            $('#dataTable').dataTable({
               // "bJQueryUI": true,
                "sPaginationType": "full_numbers",
        //"pageLength": 1
            });

            $('#chk-all').click(function () {
                if ($(this).is(':checked')) {
                    $('#responsiveTable').find('.chk-row').each(function () {
                        $(this).prop('checked', true);
                        $(this).parent().parent().parent().addClass('selected');
                    });
                }
                else {
                    $('#responsiveTable').find('.chk-row').each(function () {
                        $(this).prop('checked', false);
                        $(this).parent().parent().parent().removeClass('selected');
                    });
                }
            });
        });

      
      

  </script>

  </body>
</html>
