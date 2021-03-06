
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Creative - Bootstrap 3 Responsive Admin Template">
    <meta name="author" content="GeeksLabs">
    <meta name="keyword" content="Creative, Dashboard, Admin, Template, Theme, Bootstrap, Responsive, Retina, Minimal">
    <link rel="shortcut icon" href="img/favicon.png">

    <title>Approve Blogs </title>

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
 
   
    <!-- =======================================================
        Theme Name: NiceAdmin
        Theme URL: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/
        Author: BootstrapMade
        Author URL: https://bootstrapmade.com
    ======================================================= -->

    <script>
        function del()
        {
          return confirm("Are You Sure You Want To Delete?");
        }
     </script>
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

      <?php
       
       
       if(isset($_POST["delete"]))
       {
         
        //include 'database.php'; 
        $obj=new database(); 
        @@$idArr = $_POST['chk'];
          if (empty($_POST["chk"])) {
                          echo '<script language="javascript">;
                        alert("Please Selece Check Box");window.location.href="blogapprove.php";
                        </script>';

        }
        else
        {               
         foreach($idArr as $blog_id)
         {
            $res=$obj->blogsmuldel($blog_id);
        
         }
         if($res==1){
           header('location:blogs.php');
         }
        }
       }
       
      ?>

      <?php
             
       if(isset($_POST["approve"]))
       {
         
       //include 'database.php'; 
        $obj=new database(); 
        @@$idArr = $_POST['chk'];
          if (empty($_POST["chk"])) {
                          echo '<script language="javascript">;
                        alert("Please Selece Check Box");window.location.href="blogapprove.php";
                        </script>';

        }
        else
        {               
         foreach($idArr as $blog_id)
         {
            $res=$obj->blogsmulapprove($blog_id);
        
         }
         if($res==1){
           header('location:blogs.php');
         }
        }
       }
       
      ?>

     
      <section id="main-content">
          <section class="wrapper">

  <div class="container-fluid">
    <div class="row">

    <center><h1 class="text"> Approve Blogs</h1></center>
    <form action="" method="post">
    <div class="panel-body">


    <button class="btn btn-success" type="submit" name="approve" ><span>Approve All</span></button>
    <button class="btn btn-danger" type="submit" name="delete" onClick="return del()"><span>Delete All</span></button>
    </div>
<table class="table table-striped table-advance table-hover" id="dataTable">
    <thead>
      <tr>
      <th>Select</th>
      <th><i class="icon_document_alt"></i> Title</th>
      <th><i class="icon_document_alt"></i> Description</th>
      <th><i class="fa fa-picture-o"></i> Photo</th>
      <th><i class="icon_profile"></i> Date</th>
      <th><i class="fa fa-user"></i> User Name</th>
      <th><i class="fa fa-book fa-fw"></i> Subject Name</th>
      <th><i class="icon_cogs"></i> Action</th>
      </tr>
    </thead>
    <tbody>
      <?php

         //include'database.php';        
          $obj=new database();
          $res=$obj->approveblog();

          while($row=mysql_fetch_assoc($res))
          {
        
             $blog_id=$row["blog_id"];
            $sortcontent=substr($row["blog_desc"],0,40)."...";

              echo'<tr>';
              ?>
              

              <td><input type="checkbox" name="chk[]" value="<?php echo $row["blog_id"]; ?>" /></td>
              <?php 
              echo '  

              <td>'.$row["blog_title"].'</td>
            <td><a href="blogdesc.php?blog_id='.$blog_id.'">'.$sortcontent.'</a></td>
   
              <td><img src="../'.$row["blog_photo"].'" class="imgdisplay"/></td>
              <td>'.$row["blog_date"].'</td>
              <td>'.$row["u_name"].'</td>
              <td>'.$row["sub_name"].'</td>
              <td><a href="blogapprovecode.php?blog_id='.$row["blog_id"].'" class="btn btn-success"><span class="glyphicon glyphicon-ok" arial-hidden="true"></span></a>

             <a href="blogdisapprove.php?blog_id='.$row["blog_id"].'" onClick="return del()" class="btn btn-danger"><span class="glyphicon glyphicon-remove" arial-hidden="true"></span></a></td>
              </tr>';
       
            }
      ?>
    </tbody>
    </tr>
  </table>


    </div>
  </div>
  </div>
              </section>
              </section>

</section>
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
