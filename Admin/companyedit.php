<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Creative - Bootstrap 3 Responsive Admin Template">
    <meta name="author" content="GeeksLabs">
    <meta name="keyword" content="Creative, Dashboard, Admin, Template, Theme, Bootstrap, Responsive, Retina, Minimal">
    <link rel="shortcut icon" href="img/favicon.png">

    <title>Edit Company</title>

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

      <!--sidebar start-->
      <?php
        include'./sidebar.php';
      ?>
      <section id="main-content">
          <section class="wrapper">

  <div class="container-fluid">
    <div class="row">

    <center><h1 class="text">Edit Company</h1></center>
    <div class="panel-body">

    </div>
    
      <?php

        $company_id=$_REQUEST["company_id"];
     //   require 'database.php';
             
        $obj=new database();
        $res=$obj->companydisplay1($company_id);
        while($row=mysql_fetch_assoc($res))
        {

                    $company_name=$row["company_name"];
                    $company_title=$row["company_title"];
                    $company_desc=$row["company_desc"];
                    $company_logo=$row["company_logo"];
                    $company_web_name=$row["company_web_name"];
                    


        
        }

           
           
     ?>

        

       <!--  edit Students  -->
             <?php
           
            $company_id=$_REQUEST["company_id"];
           
            if(isset($_POST["companyedit"]))
            {

                    $company_name=$_POST["company_name"];
                    $company_title=$_POST["company_title"];
                    $company_desc=$_POST["company_desc"];
                    //$company_logo=$_POST["company_logo"];
                    $company_web_name=$_POST["company_web_name"];
                    
              $pic="../".$company_logo;
                    
                         if($_FILES["photo"]["name"]=="")
                        {

                          $photo=$company_logo;
                        }

                        else if($_FILES["photo"]["name"]!="")
                            {
                                unlink($pic);
                                $photo="../img/company/".basename($_FILES["photo"]["name"]);
                                move_uploaded_file($_FILES["photo"]["tmp_name"],$photo);
                                 $photo="img/company/".basename($_FILES["photo"]["name"]);
                            } 
                  


              //echo $u_gender;

            $obj1=new database();
            $res1=$obj1->updatecompany($company_id,$company_name,$photo,$company_title,$company_desc,$company_web_name);

                        echo '<script langauge="javascript">;
                                    alert("Update sucessfully");
                                    window.location.href="company.php";
                                    </script>';

            
            }
        ?>
      
       <form action=""  method="post"  enctype="multipart/form-data">

        <div class="col-lg-12">
                      <section class="panel">
                          <header class="panel-heading">
                              
                          </header>
                         
                          <div class="panel-body">
                              
                                  <div class="form-group">
                                      <label>Name :</label>
                                      <input type="text" class="form-control" id="exampleInputEmail1"
                                        name="company_name" value="<?php echo $company_name; ?>">
                                  </div>

                                  <img height="100px" width="100px" src="<?php echo '../'.$company_logo; ?>" ><?php echo $company_logo; ?>


                                  <div class="form-group">
                                      <label for="exampleInputFile">Photo :</label>
                                      <input type="file"  id="exampleInputFile" name="photo">
                                      
                                  </div>

                                  <div class="form-group">
                                   <label>Title :</label>
                                      <textarea class="form-control ckeditor" name="company_title" rows="6" placeholder=" Title" ><?php echo $company_title; ?></textarea>
                                      <div class="help-block with-errors"></div>
                                  </div>

                                  <div class="form-group">
                                   <label>Description :</label>
                                      <textarea class="form-control ckeditor" name="company_desc" rows="6" placeholder=" Description" ><?php echo $company_desc; ?></textarea>
                                      <div class="help-block with-errors"></div>
                                  </div>



                                  <div class="form-group">
                                      <label>Website URL :</label>
                                      <input type="text" class="form-control" id="exampleInputEmail1"
                                        name="company_web_name" value="<?php echo $company_web_name; ?>">
                                  </div>

                                   
                                  <center>
                             <button type="submit" name="companyedit" class="btn btn-success text-center">Submit</button>
                                  </center>

                             

                          </div>
                          
                      </section>
                  </div>
                </form>
 
  </div>
  </div>
              </section>
              </section>

</section>
  <!-- container section start -->

     <!-- ck editor -->
    <script type="text/javascript" src="assets/ckeditor/ckeditor.js"></script>

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
    <script src="js/fullcalendar.min.js"></script> <!-- Full Google Calendar - Calendar -->
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
                "bJQueryUI": true,
                "sPaginationType": "full_numbers"
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

       $(function () {
            $('#dataTable').dataTable({
                "bJQueryUI": true,
                "sPaginationType": "full_numbers"
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
